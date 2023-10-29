<?php

namespace App\Http\Requests\Admin\GettingBlend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateGettingBlend extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.getting-blend.edit', $this->gettingBlend);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'code' => ['sometimes', 'string'],
            'admin_user_id' => ['sometimes', 'integer'],
            'stock_id' => ['sometimes', 'integer'],
            'blend_details_id' => ['sometimes', 'integer'],
            'qtd' => ['sometimes', 'integer'],
            'finished' => ['sometimes', 'boolean'],
            
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
