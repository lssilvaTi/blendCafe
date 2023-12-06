<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GettingBlend\BulkDestroyGettingBlend;
use App\Http\Requests\Admin\GettingBlend\DestroyGettingBlend;
use App\Http\Requests\Admin\GettingBlend\IndexGettingBlend;
use App\Http\Requests\Admin\GettingBlend\StoreGettingBlend;
use App\Http\Requests\Admin\GettingBlend\UpdateGettingBlend;
use App\Models\GettingBlend;
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
use Illuminate\Http\Request;

// Services
use App\Services\GettingBlendsService;
use App\Services\CoffeeGrainsService;
use App\Services\StocksService;
use App\Services\BlendDetailsService;
use Maatwebsite\Excel\Concerns\ToArray;

class GettingBlendsController extends Controller
{
    protected $gettingBlendsService;
    protected $coffeeGrainsService;
    protected $stocksService;
    protected $blendDetailsService;

    public function __construct(
        GettingBlendsService $gettingBlendsService,
        CoffeeGrainsService $coffeeGrainsService,
        StocksService $stocksService,
        BlendDetailsService $blendDetailsService
    )
    {
        $this->gettingBlendsService = $gettingBlendsService;
        $this->coffeeGrainsService = $coffeeGrainsService;
        $this->stocksService = $stocksService;
        $this->blendDetailsService = $blendDetailsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param IndexGettingBlend $request
     * @return array|Factory|View
     */
    public function index(IndexGettingBlend $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(GettingBlend::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            [
                'id', 'code', 'admin_user_id', 'stock_id', 'blend_details_id', 'qtd', 'finished', 'updated_at', 
                'admin_users.first_name', 'admin_users.last_name',
                'stocks.name as stock_name',
                'blend_details.name as blend_detail_name'
            ],

            // set columns to searchIn
            ['id', 'code'],

            function ($query) use ($request) {
                $query->join('admin_users', 'admin_users.id', '=', 'getting_blends.admin_user_id');
                $query->join('stocks', 'stocks.id', '=', 'getting_blends.stock_id');
                $query->join('blend_details', 'blend_details.id', '=', 'getting_blends.blend_details_id');
            }
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.getting-blend.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.getting-blend.create');

        $stockOptions = $this->stocksService->getAllStockOptions();
        $blendDetailOptions = $this->blendDetailsService->getAllBlendDetailsOptions();

        $adminUserId = auth()->user()->id;

        return view('admin.getting-blend.create', [
            'stockOptions' => $stockOptions,
            'blendDetailOptions' => $blendDetailOptions,
            'adminUserId' => $adminUserId,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGettingBlend $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreGettingBlend $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the GettingBlend
        $gettingBlend = GettingBlend::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/getting-blends'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/getting-blends');
    }

    /**
     * Display the specified resource.
     *
     * @param GettingBlend $gettingBlend
     * @throws AuthorizationException
     * @return void
     */
    public function show(GettingBlend $gettingBlend)
    {
        $this->authorize('admin.getting-blend.show', $gettingBlend);
        
        $enabledResults = false;

        return view('admin.getting-blend.show', [
            'enabledResults' => $enabledResults,
            'gettingBlend' => $gettingBlend,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param GettingBlend $gettingBlend
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(GettingBlend $gettingBlend)
    {
        $this->authorize('admin.getting-blend.edit', $gettingBlend);

        $stockOptions = $this->stocksService->getAllStockOptions();
        $blendDetailOptions = $this->blendDetailsService->getAllBlendDetailsOptions();

        return view('admin.getting-blend.edit', [
            'gettingBlend' => $gettingBlend,
            'stockOptions' => $stockOptions,
            'blendDetailOptions' => $blendDetailOptions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateGettingBlend $request
     * @param GettingBlend $gettingBlend
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateGettingBlend $request, GettingBlend $gettingBlend)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values GettingBlend
        $gettingBlend->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/getting-blends'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/getting-blends');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyGettingBlend $request
     * @param GettingBlend $gettingBlend
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyGettingBlend $request, GettingBlend $gettingBlend)
    {
        $gettingBlend->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyGettingBlend $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyGettingBlend $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    GettingBlend::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }

    public function showOptimeze(GettingBlend $gettingBlend)
    {
        $this->authorize('admin.getting-blend.show', $gettingBlend);

        $type = request()->query('type');

        $grainsInStock = $this->coffeeGrainsService->getAllCoffeeGrainsByStockId($gettingBlend->stock_id);
        $blendDetail = $this->blendDetailsService->getBlendDetailsById($gettingBlend->blend_details_id);

        $response = $this->gettingBlendsService->sendRequestToOptimize($grainsInStock, $blendDetail, $gettingBlend->qtd, $type);

        $responseInfos = [
            'status' => $response['status'],
            'feasible' => $response['result']['optimizationResult']['feasible'],
            'bounded' => $response['result']['optimizationResult']['bounded'],
            'isIntegral' => $response['result']['optimizationResult']['isIntegral'],
            'totalQuantityUsed' => $response['result']['totalQuantityUsed'],
        ];

        $grainsUsed = $response['result']['optimizationResult']['grainsUsed'];

        $characteristicsAvg = $response['result']['characteristicsAvg'];

        $enabledResults = true;
        
        return view('admin.getting-blend.show', [
            'enabledResults' => $enabledResults,
            'gettingBlend' => $gettingBlend,
            'blendDetail' => $blendDetail,
            'responseInfos' => $responseInfos,
            'grainsUsed' => $grainsUsed,
            'characteristicsAvg' => $characteristicsAvg,
        ]);
    }

    public function makeBlend(Request $request) {
        $gettingBlendId = $request->input('gettingBlendId');
        $grainsUsed = json_decode($request->input('grainsUsed'), true);
        $characteristicsAvg = $request->input('characteristicsAvg');
        
        $gettingBlend = GettingBlend::find($gettingBlendId);
    
        // Percorrer cada grão utilizado e salvar o relacionamento
        foreach ($grainsUsed as $grain) {
            $grainId = $grain['id'];
            $quantity = $grain['quantity'];
    
            // Anexar grão com quantidade à tabela de relacionamento
            $gettingBlend->coffeeGrains()->attach($grainId, ['quantity' => $quantity]);
        }
        
        $gettingBlend->calculable_info = $characteristicsAvg;
        $gettingBlend->finished = true;
        $gettingBlend->save();

        // // Redirecionar ou retornar uma resposta após a operação bem-sucedida
        if ($request->ajax()) {
            return ['redirect' => url('admin/getting-blends'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }
    
        return redirect('admin/getting-blends')->with('success', 'Blend criado com sucesso');
    }

    public function viewInfos(GettingBlend $gettingBlend)
    {
        $gettingBlend->load('coffeeGrains');

        $coffeGrainsUsed = $gettingBlend->coffeeGrains;
        
        $stockUsed = Stock::find($gettingBlend->stock_id);

        $blendDetail = $this->blendDetailsService->getBlendDetailsById($gettingBlend->blend_details_id);

        $blendCaracteristics = $gettingBlend->calculable_info;

        return view('admin.getting-blend.viewInfos', [
            'gettingBlend' => $gettingBlend,
            'coffeGrainsUsed' => $coffeGrainsUsed,
            'stockUsed' => $stockUsed,
            'blendDetail' => $blendDetail,
            'blendCaracteristics' => $blendCaracteristics,
        ]);
    }
    
}    
