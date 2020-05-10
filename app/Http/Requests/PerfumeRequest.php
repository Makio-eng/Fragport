<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfumeRequest extends FormRequest
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
      //
      'name' => 'required|string',
      'ja_name' => 'required|string',
      'rate' => 'nullable|string',
      'note' => 'nullable|string',
      'materials' => 'nullable|string',
      'perfumer' => 'nullable|string',
      'body' => 'nullable|string',
      'perfumeImage' => 'required|file|image|mimes:jpeg,png,jpg|',

    ];
  }
}
