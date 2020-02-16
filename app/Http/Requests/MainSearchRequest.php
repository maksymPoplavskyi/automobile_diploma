<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainSearchRequest extends FormRequest
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
        return [
            'brand_id' => '',
            'model_id' => '',
            'years' => ''
        ];
    }

    public function getBrand()
    {
        return $this->getBrand();
    }

    public function getModel()
    {
        return $this->getModel();
    }

    public function getYears()
    {
        return $this->getYears();
    }
}
