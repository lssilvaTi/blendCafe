<?php

namespace App\Http\Requests\Admin\BlendDetail;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexBlendDetail extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.blend-detail.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orderBy' => 'in:id,name,min_def,max_def,min_umid,max_umid,min_imp,max_imp,min_broca,max_broca,min_num18,max_num18,min_num17,max_num17,min_num16,max_num16,min_num15,max_num15,min_num14,max_num14,min_num13,max_num13,min_num12,max_num12,min_num10_11,max_num10_11,min_numfundo_b,max_numfundo_b|nullable',
            'orderDirection' => 'in:asc,desc|nullable',
            'search' => 'string|nullable',
            'page' => 'integer|nullable',
            'per_page' => 'integer|nullable',

        ];
    }
}
