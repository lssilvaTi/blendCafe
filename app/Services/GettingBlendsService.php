<?php

namespace App\Services;

use App\Repositories\StocksRepository;
use App\Repositories\BlendDetailsRepository;

class GettingBlendsService
{

    /**
     * @var StocksRepository
     */
    protected $stocksRepository;

    /**
     * @var BlendDetailsRepository
     */
    protected $blendDetailsRepository;

    /**
     * CoffeeGrainsService constructor.
     *
     * @param StocksRepository $stocksRepository
     * @param BlendDetailsRepository $blendDetailsRepository
     */

    public function __construct(StocksRepository $stocksRepository, BlendDetailsRepository $blendDetailsRepository)
    {
        $this->stocksRepository = $stocksRepository;
        $this->blendDetailsRepository = $blendDetailsRepository;
    }


    /**
     * Get all stocks options.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllStockOptions()
    {
        $stocks = $this->stocksRepository->getAllStocks()->toArray();
        
        return $stocks;
    }

    /**
     * Get all blend details options.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllBlendDetailsOptions()
    {
        $blendDetails = $this->blendDetailsRepository->getAllBlendDetails()->toArray();
        
        return $blendDetails;
    }

}
