<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
      'country' => 'required|string',
      'body' => 'string|nullable',
      'brandLogo' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048',
    ];
  }
}
