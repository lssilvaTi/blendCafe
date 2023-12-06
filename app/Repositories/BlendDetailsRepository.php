<?php

namespace App\Repositories;

use App\Models\BlendDetail;

class BlendDetailsRepository
{

    public function getAllBlendDetails()
    {
        return BlendDetail::select('id', 'name')->get();
    }

    public function findById(int $id)
    {
        return BlendDetail::find($id)
            ->select(
                'min_def',
                'max_def',
                'min_umid',
                'max_umid',
                'min_imp',
                'max_imp',
                'min_broca',
                'max_broca',
                'min_num18',
                'max_num18',
                'min_num17',
                'max_num17',
                'min_num16',
                'max_num16',
                'min_num15',
                'max_num15',
                'min_num14',
                'max_num14',
                'min_num13',
                'max_num13',
                'min_num12',
                'max_num12',
                'min_num10_11 as min_num10',
                'max_num10_11 as max_num10',
                'min_numfundo_b as min_numfundo',
                'max_numfundo_b as max_numfundo',
            )
            ->first();
    }

}
