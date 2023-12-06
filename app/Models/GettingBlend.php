<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GettingBlend extends Model
{
    protected $fillable = [
        'code',
        'admin_user_id',
        'stock_id',
        'blend_details_id',
        'qtd',
        'finished',
        'calculable_info',
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];


    public function coffeeGrains()
    {
        return $this->belongsToMany(CoffeeGrain::class, 'getting_blend_coffee_grain')
                    ->withPivot('quantity');
    }

    protected $casts = [
        'calculable_info' => 'array',
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/getting-blends/'.$this->getKey());
    }
}
