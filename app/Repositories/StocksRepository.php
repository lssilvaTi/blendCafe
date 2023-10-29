<?php

namespace App\Repositories;

use App\Models\Stock;

class StocksRepository
{
    /**
     * Get all Stocks from the database.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllStocks()
    {
        return Stock::where('is_active', 1)
            ->select('id', 'name')
            ->get();
    }

}
