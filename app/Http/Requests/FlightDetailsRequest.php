<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightDetailsRequest extends FormRequest
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
            'flight_iata' => 'required'
        ];
    }

    public function messages()
    {
        return [
          'flight_iata.required' => 'Please enter flight number.'
        ];
    }
}
