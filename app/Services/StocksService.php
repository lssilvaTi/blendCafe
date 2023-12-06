<?php

namespace App\Services;

use App\Repositories\StocksRepository;

class StocksService
{
    /**
     * @var StocksRepository
     */
    protected $stocksRepository;

    /**
     * StocksService constructor.
     *
     * @param StocksRepository $stocksRepository
     */

    public function __construct(StocksRepository $stocksRepository)
    {
        $this->stocksRepository = $stocksRepository;
    }


    public function getAllStockOptions()
    {
        $stocks = $this->stocksRepository->getAllStocks()->toArray();
        
        return $stocks;
    }

}
