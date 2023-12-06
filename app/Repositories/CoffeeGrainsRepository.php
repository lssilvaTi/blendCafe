<?php

namespace App\Repositories;

use App\Models\CoffeeGrain;

class CoffeeGrainsRepository
{
    /**
     * Get all Stocks from the database.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllByStockId(int $stockId)
    {
        return CoffeeGrain::where('stock_id', $stockId)
            ->select(
                'id',
                'lote',
                'safra',
                'qtd',
                'def',
                'umid',
                'imp',
                'broca',
                'num18',
                'num17',
                'num16',
                'num15',
                'num14',
                'num13',
                'num12',
                'num10_11 as num10',
                'numfundo_b as numfundo',
            )
            ->get();
    }

}
