<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
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
      'name' => 'required|string',
      'email' => 'required|email',
      'favoriteMaterial' => 'nullable|string',
      'myFranrance' => 'nullable|string',
      'introduction' => 'nullable|string',
      'facebook' => 'nullable|string',
      'instagram' => 'nullable|string',
      'twitter' => 'nullable|string',
      'userImage' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048',
    ];
  }
}
