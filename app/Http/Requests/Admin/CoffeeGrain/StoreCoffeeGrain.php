<?php

namespace App\Http\Requests\Admin\CoffeeGrain;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreCoffeeGrain extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.coffee-grain.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'lote' => ['required', 'string'],
            'nf' => ['nullable', 'string'],
            'slip' => ['required', 'integer'],
            'qtd' => ['required', 'integer'],
            'prod' => ['nullable', 'string'],
            'safra' => ['required', 'string'],
            'bebida' => ['required', 'string'],
            'cheiro' => ['required', 'string'],
            'aspecto' => ['required', 'string'],
            'mofo' => ['required', 'numeric'],
            'def' => ['required', 'integer'],
            'umid' => ['required', 'numeric'],
            'imp' => ['required', 'numeric'],
            'broca' => ['required', 'numeric'],
            'num18' => ['required', 'numeric'],
            'num17' => ['required', 'numeric'],
            'num16' => ['required', 'numeric'],
            'num15' => ['required', 'numeric'],
            'num14' => ['required', 'numeric'],
            'num13' => ['required', 'numeric'],
            'num12' => ['required', 'numeric'],
            'num10_11' => ['required', 'numeric'],
            'numfundo_b' => ['required', 'numeric'],
            'stock_id' => ['required', 'integer'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
