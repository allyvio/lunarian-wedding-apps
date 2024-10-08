<?php

namespace App\Http\Requests;

use App\Rules\Slug;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WeddingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $stage = $this->request->get('stage');
        $rules =  [];
        $rule_slug_unique = Rule::unique('weddings', 'slug');
        if ($this->method() !== 'POST') {
            $rule_slug_unique->ignore($this->wedding->id);
        }
        if ($stage == 'start')
            $rules += [
                'slug' => ['required', 'string', 'between:4,20', $rule_slug_unique, new Slug],
                'title' => ['required', 'string', 'between:4,50'],
                'description' => ['nullable', 'string', 'max:1000'],
            ];
        if ($stage == 'couple')
            $rules += [
                'calon_pria' => ['required', 'string', 'between:2,100'],
                'calon_wanita' => ['required', 'string', 'between:2,100'],
                'nama_calon_pria' => ['required', 'string', 'between:2,100'],
                'nama_calon_wanita' => ['required', 'string', 'between:2,100'],
                'calon_pria_photo' => ['nullable', 'image', 'max:5120'],
                'calon_wanita_photo' => ['nullable', 'image', 'max:5120'],
            ];
        if ($stage == 'theme')
            $rules += [
                'theme' => ['required', Rule::in(['tropical', 'rustic', 'classic'])]
                // 'theme' => ['required', Rule::in(['classic'])]
            ];
        if ($stage == 'package')
            $rules += [
                'package_id' => ['required', 'exists:packages,id']
            ];
        if ($stage == 'quote')
            $rules += [
                'quote' => ['nullable', 'string']
            ];
        return $rules;
    }
}
