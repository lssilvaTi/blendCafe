<?php

namespace App\Http\Requests\Admin\CoffeeGrain;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateCoffeeGrain extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.coffee-grain.edit', $this->coffeeGrain);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'lote' => ['sometimes', 'string'],
            'nf' => ['nullable', 'string'],
            'slip' => ['sometimes', 'integer'],
            'qtd' => ['sometimes', 'integer'],
            'prod' => ['nullable', 'string'],
            'safra' => ['sometimes', 'string'],
            'bebida' => ['sometimes', 'string'],
            'cheiro' => ['sometimes', 'string'],
            'aspecto' => ['sometimes', 'string'],
            'mofo' => ['sometimes', 'numeric'],
            'def' => ['sometimes', 'integer'],
            'umid' => ['sometimes', 'numeric'],
            'imp' => ['sometimes', 'numeric'],
            'broca' => ['sometimes', 'numeric'],
            'num18' => ['sometimes', 'numeric'],
            'num17' => ['sometimes', 'numeric'],
            'num16' => ['sometimes', 'numeric'],
            'num15' => ['sometimes', 'numeric'],
            'num14' => ['sometimes', 'numeric'],
            'num13' => ['sometimes', 'numeric'],
            'num12' => ['sometimes', 'numeric'],
            'num10_11' => ['sometimes', 'numeric'],
            'numfundo_b' => ['sometimes', 'numeric'],
            'stock_id' => ['sometimes', 'string'],
            
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
