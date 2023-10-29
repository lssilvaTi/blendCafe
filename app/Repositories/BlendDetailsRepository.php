<?php

namespace App\Repositories;

use App\Models\BlendDetail;

class BlendDetailsRepository
{

    public function getAllBlendDetails()
    {
        return BlendDetail::select('id', 'name')->get();
    }

}
