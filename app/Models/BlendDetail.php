<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlendDetail extends Model
{
    protected $fillable = [
        'name',
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
        'min_num10_11',
        'max_num10_11',
        'min_numfundo_b',
        'max_numfundo_b',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/blend-details/'.$this->getKey());
    }
}
