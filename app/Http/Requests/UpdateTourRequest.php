<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'category_id' => ['required'],
            'discount' => ['required', 'integer'],
            'tour_name' => ['required'],
            'start' => ['required'],
            'price' => ['required', 'integer'],
            'image' => ['required'],
            'quantity'=> ['required', 'integer'],
            'description' => ['required'],
            'days' => ['required', 'integer'],
        ];
    }
}
