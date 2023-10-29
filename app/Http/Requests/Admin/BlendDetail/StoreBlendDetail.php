<?php

namespace App\Http\Requests\Admin\BlendDetail;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreBlendDetail extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.blend-detail.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string'],
            'min_def' => ['nullable', 'integer'],
            'max_def' => ['nullable', 'integer'],
            'min_umid' => ['nullable', 'numeric'],
            'max_umid' => ['nullable', 'numeric'],
            'min_imp' => ['nullable', 'numeric'],
            'max_imp' => ['nullable', 'numeric'],
            'min_broca' => ['nullable', 'numeric'],
            'max_broca' => ['nullable', 'numeric'],
            'min_num18' => ['nullable', 'numeric'],
            'max_num18' => ['nullable', 'numeric'],
            'min_num17' => ['nullable', 'numeric'],
            'max_num17' => ['nullable', 'numeric'],
            'min_num16' => ['nullable', 'numeric'],
            'max_num16' => ['nullable', 'numeric'],
            'min_num15' => ['nullable', 'numeric'],
            'max_num15' => ['nullable', 'numeric'],
            'min_num14' => ['nullable', 'numeric'],
            'max_num14' => ['nullable', 'numeric'],
            'min_num13' => ['nullable', 'numeric'],
            'max_num13' => ['nullable', 'numeric'],
            'min_num12' => ['nullable', 'numeric'],
            'max_num12' => ['nullable', 'numeric'],
            'min_num10_11' => ['nullable', 'numeric'],
            'max_num10_11' => ['nullable', 'numeric'],
            'min_numfundo_b' => ['nullable', 'numeric'],
            'max_numfundo_b' => ['nullable', 'numeric'],
            
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
