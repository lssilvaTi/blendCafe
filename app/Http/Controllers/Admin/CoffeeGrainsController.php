<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CoffeeGrain\BulkDestroyCoffeeGrain;
use App\Http\Requests\Admin\CoffeeGrain\DestroyCoffeeGrain;
use App\Http\Requests\Admin\CoffeeGrain\IndexCoffeeGrain;
use App\Http\Requests\Admin\CoffeeGrain\StoreCoffeeGrain;
use App\Http\Requests\Admin\CoffeeGrain\UpdateCoffeeGrain;
use App\Models\CoffeeGrain;
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

// Services
use App\Services\CoffeeGrainsService;

class CoffeeGrainsController extends Controller
{
    protected $coffeeGrainsService;

    public function __construct(CoffeeGrainsService $coffeeGrainsService)
    {
        $this->coffeeGrainsService = $coffeeGrainsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param IndexCoffeeGrain $request
     * @return array|Factory|View
     */
    public function index(IndexCoffeeGrain $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CoffeeGrain::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'lote', 'nf', 'slip', 'qtd', 'prod', 'safra', 'bebida', 'cheiro', 'aspecto', 'mofo', 'def', 'umid', 'imp', 'broca', 'num18', 'num17', 'num16', 'num15', 'num14', 'num13', 'num12', 'num10_11', 'numfundo_b', 'stock_id'],

            // set columns to searchIn
            ['id', 'lote', 'nf', 'prod', 'safra', 'bebida', 'cheiro', 'aspecto']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.coffee-grain.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.coffee-grain.create');

        $stockOptions = $this->coffeeGrainsService->getAllStockOptions();

        $drinkOptions = $this->coffeeGrainsService->getDrinkOptions();

        $smellOptions = $this->coffeeGrainsService->getSmellOptions();

        $aspectOptions = $this->coffeeGrainsService->getAspectOptions();
        
        return view('admin.coffee-grain.create', [
            'stockOptions' => $stockOptions,
            'drinkOptions' => $drinkOptions,
            'smellOptions' => $smellOptions,
            'aspectOptions' => $aspectOptions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCoffeeGrain $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCoffeeGrain $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CoffeeGrain
        $coffeeGrain = CoffeeGrain::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/coffee-grains'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/coffee-grains');
    }

    /**
     * Display the specified resource.
     *
     * @param CoffeeGrain $coffeeGrain
     * @throws AuthorizationException
     * @return void
     */
    public function show(CoffeeGrain $coffeeGrain)
    {
        $this->authorize('admin.coffee-grain.show', $coffeeGrain);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CoffeeGrain $coffeeGrain
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CoffeeGrain $coffeeGrain)
    {
        $this->authorize('admin.coffee-grain.edit', $coffeeGrain);

        $stockOptions = $this->coffeeGrainsService->getAllStockOptions();

        $drinkOptions = $this->coffeeGrainsService->getDrinkOptions();

        $smellOptions = $this->coffeeGrainsService->getSmellOptions();

        $aspectOptions = $this->coffeeGrainsService->getAspectOptions();

        return view('admin.coffee-grain.edit', [
            'coffeeGrain' => $coffeeGrain,
            'stockOptions' => $stockOptions,
            'drinkOptions' => $drinkOptions,
            'smellOptions' => $smellOptions,
            'aspectOptions' => $aspectOptions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCoffeeGrain $request
     * @param CoffeeGrain $coffeeGrain
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCoffeeGrain $request, CoffeeGrain $coffeeGrain)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CoffeeGrain
        $coffeeGrain->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/coffee-grains'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/coffee-grains');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCoffeeGrain $request
     * @param CoffeeGrain $coffeeGrain
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCoffeeGrain $request, CoffeeGrain $coffeeGrain)
    {
        $coffeeGrain->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCoffeeGrain $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCoffeeGrain $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CoffeeGrain::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
