<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Stock\BulkDestroyStock;
use App\Http\Requests\Admin\Stock\DestroyStock;
use App\Http\Requests\Admin\Stock\IndexStock;
use App\Http\Requests\Admin\Stock\StoreStock;
use App\Http\Requests\Admin\Stock\UpdateStock;
use App\Models\Stock;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class StocksController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexStock $request
     * @return array|Factory|View
     */
    public function index(IndexStock $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Stock::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'location', 'is_active'],

            // set columns to searchIn
            ['id', 'name', 'location']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.stock.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.stock.create');

        return view('admin.stock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreStock $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreStock $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Stock
        $stock = Stock::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/stocks'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/stocks');
    }

    /**
     * Display the specified resource.
     *
     * @param Stock $stock
     * @throws AuthorizationException
     * @return void
     */
    public function show(Stock $stock)
    {
        $this->authorize('admin.stock.show', $stock);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Stock $stock
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Stock $stock)
    {
        $this->authorize('admin.stock.edit', $stock);


        return view('admin.stock.edit', [
            'stock' => $stock,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateStock $request
     * @param Stock $stock
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateStock $request, Stock $stock)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Stock
        $stock->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/stocks'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/stocks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyStock $request
     * @param Stock $stock
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyStock $request, Stock $stock)
    {
        $stock->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyStock $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyStock $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Stock::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
