<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlendDetail\BulkDestroyBlendDetail;
use App\Http\Requests\Admin\BlendDetail\DestroyBlendDetail;
use App\Http\Requests\Admin\BlendDetail\IndexBlendDetail;
use App\Http\Requests\Admin\BlendDetail\StoreBlendDetail;
use App\Http\Requests\Admin\BlendDetail\UpdateBlendDetail;
use App\Models\BlendDetail;
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

class BlendDetailsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBlendDetail $request
     * @return array|Factory|View
     */
    public function index(IndexBlendDetail $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BlendDetail::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'min_def', 'max_def', 'min_umid', 'max_umid', 'min_imp', 'max_imp', 'min_broca', 'max_broca', 'min_num18', 'max_num18', 'min_num17', 'max_num17', 'min_num16', 'max_num16', 'min_num15', 'max_num15', 'min_num14', 'max_num14', 'min_num13', 'max_num13', 'min_num12', 'max_num12', 'min_num10_11', 'max_num10_11', 'min_numfundo_b', 'max_numfundo_b'],

            // set columns to searchIn
            ['id', 'name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.blend-detail.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.blend-detail.create');

        return view('admin.blend-detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBlendDetail $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBlendDetail $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the BlendDetail
        $blendDetail = BlendDetail::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/blend-details'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/blend-details');
    }

    /**
     * Display the specified resource.
     *
     * @param BlendDetail $blendDetail
     * @throws AuthorizationException
     * @return void
     */
    public function show(BlendDetail $blendDetail)
    {
        $this->authorize('admin.blend-detail.show', $blendDetail);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BlendDetail $blendDetail
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BlendDetail $blendDetail)
    {
        $this->authorize('admin.blend-detail.edit', $blendDetail);


        return view('admin.blend-detail.edit', [
            'blendDetail' => $blendDetail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBlendDetail $request
     * @param BlendDetail $blendDetail
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBlendDetail $request, BlendDetail $blendDetail)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BlendDetail
        $blendDetail->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/blend-details'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/blend-details');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBlendDetail $request
     * @param BlendDetail $blendDetail
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBlendDetail $request, BlendDetail $blendDetail)
    {
        $blendDetail->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBlendDetail $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBlendDetail $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    BlendDetail::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
