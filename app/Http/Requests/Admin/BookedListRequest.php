<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BookedListRequest extends FormRequest
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
            'catalog_room_id' => 'required|integer|exists:catalog_room,id',
            'nama' => 'required|max:255',
            'ktp' => 'required|max:255',
            'nohp' => 'required|max:255',
            'checkin' => 'required|date',
            'checkout' => 'required|date',
        ];
    }
}
