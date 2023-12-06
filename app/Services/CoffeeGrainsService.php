<?php

namespace App\Services;

use App\Repositories\StocksRepository;
use App\Repositories\CoffeeGrainsRepository;

class CoffeeGrainsService
{

    /**
     * @var StocksRepository
     */
    protected $stocksRepository;

     /**
     * @var CoffeeGrainsRepository
     */
    protected $coffeeGrainsRepository;

    /**
     * CoffeeGrainsService constructor.
     *
     * @param StocksRepository $stocksRepository
     * @param CoffeeGrainsRepository $coffeeGrainsRepository
     */

    public function __construct(StocksRepository $stocksRepository, CoffeeGrainsRepository $coffeeGrainsRepository)
    {
        $this->stocksRepository = $stocksRepository;
        $this->coffeeGrainsRepository = $coffeeGrainsRepository;
    }

    public function getAllCoffeeGrainsByStockId(int $stockId)
    {
        $coffeeGrains = $this->coffeeGrainsRepository->getAllByStockId($stockId)->toArray();
        
        return $coffeeGrains;
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
