<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSewaValidation extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [

            'id_mobil' => 'required',
            'tanggal_sewa' => 'required |date |after:today',
            'tanggal_kembali' => 'required|date|after:tanggal_sewa',

        ];
    }

    public function messages()
    {
        return [
            'id_mobil.required' => 'Mobil harus dipilih dahulu',
            'tanggal_sewa.required' => 'tanggal sewa harus diisi',
            'tanggal_sewa.date' => 'tanggal sewa harus berupa tanggal',
            'tanggal_kembali.date' => 'tanggal kembali harus berupa tanggal',
            'tanggal_kembali.required' => 'tanggal kembali harus diisi',

            'tanggal_sewa.after' => 'Tanggal penyewaan tidak boleh hari ini atau kemarin',
            'tanggal_kembali.after' => 'Tanggal kembali harus setelah tanggal sewa',
        ];
    }
}
