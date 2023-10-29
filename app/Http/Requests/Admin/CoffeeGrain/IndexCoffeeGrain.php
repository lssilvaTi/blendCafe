<?php

namespace App\Http\Requests\Admin\CoffeeGrain;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexCoffeeGrain extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.coffee-grain.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orderBy' => 'in:id,lote,nf,slip,qtd,prod,safra,bebida,cheiro,aspecto,mofo,def,umid,imp,broca,num18,num17,num16,num15,num14,num13,num12,num10_11,numfundo_b,stock_id|nullable',
            'orderDirection' => 'in:asc,desc|nullable',
            'search' => 'string|nullable',
            'page' => 'integer|nullable',
            'per_page' => 'integer|nullable',

        ];
    }
}
