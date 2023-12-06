<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoffeeGrain extends Model
{
    protected $fillable = [
        'lote',
        'nf',
        'slip',
        'qtd',
        'prod',
        'safra',
        'bebida',
        'cheiro',
        'aspecto',
        'mofo',
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
        'num10_11',
        'numfundo_b',
        'stock_id',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];

    public function gettingBlends()
    {
        return $this->belongsToMany(GettingBlend::class, 'getting_blend_coffee_grain')
                    ->withPivot('quantity');
    }
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/coffee-grains/'.$this->getKey());
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class, 'stock_id');
    }
}
