<?php

namespace App\Http\Requests\Admin\GettingBlend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreGettingBlend extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.getting-blend.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'code' => ['required', 'string'],
            'admin_user_id' => ['required', 'integer'],
            'stock_id' => ['required', 'integer'],
            'blend_details_id' => ['required', 'integer'],
            'qtd' => ['required', 'integer'],
            'finished' => ['required', 'boolean'],
            
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
