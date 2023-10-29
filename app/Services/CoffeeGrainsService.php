<?php

namespace App\Services;

use App\Repositories\StocksRepository;

class CoffeeGrainsService
{

    /**
     * @var StocksRepository
     */
    protected $stocksRepository;

    /**
     * CoffeeGrainsService constructor.
     *
     * @param StocksRepository $stocksRepository
     */

    public function __construct(StocksRepository $stocksRepository)
    {
        $this->stocksRepository = $stocksRepository;
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

    public function getDrinkOptions()
    {
        $drinks = [
            'Limpa',
            'Neutro',
            'Riada',
            'Rio',
            'Suja',
            'Terra'
        ];

        $drinkOptions = [];

        foreach ($drinks as $drink) {
            $drinkOptions[] = ['name' => $drink];
        }

        return $drinkOptions;
    }

    public function getSmellOptions()
    {
        $smells = [
            'Fumaça',
            'Limpo',
            'Mofo',
            'Terreiro'
        ];

        $smellOptions = [];

        foreach ($smells as $smell) {
            $smellOptions[] = ['name' => $smell];
        }

        return $smellOptions;
    }


    public function getAspectOptions()
    {
        $aspects = [
            'Verde',
            'Descansado'
        ];
        
        $aspectOptions = [];

        foreach ($aspects as $aspect) {
            $aspectOptions[] = ['name' => $aspect];
        }

        return $aspectOptions;
    }

}
