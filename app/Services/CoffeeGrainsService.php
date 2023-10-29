<?php

namespace App\Services;

use App\Repositories\CoffeeGrainsRepository;

class CoffeeGrainsService
{

    /**
     * @var CoffeeGrainsRepository
     */
    protected $coffeeGrainsRepository;

    /**
     * CoffeeGrainsService constructor.
     *
     * @param CoffeeGrainsRepository $coffeeGrainsRepository
     */

    public function __construct(CoffeeGrainsRepository $coffeeGrainsRepository)
    {
        $this->coffeeGrainsRepository = $coffeeGrainsRepository;
    }


    /**
     * Get all stocks options.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllStockOptions()
    {
        $stocks = $this->coffeeGrainsRepository->getAllStocks()->toArray();
        
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
