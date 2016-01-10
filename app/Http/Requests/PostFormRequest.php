<?php 
namespace App\Http\Requests;
use App\Http\Requests\Request;
use App\User;
use Auth;
class PostFormRequest extends Request {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {    
      if($this->user()->can_post())
      {
          return true;
      }
          return false;
  }
  /**
   * These are the validation rules
   * for creating posts.
   */
  public function rules()
  {
    return [
      'title' => 'required|unique:posts|max:255',
      'title' => array('Regex:/^[A-Za-z0-9 ]+$/'),
      'body' => 'required',
    ];
  }    
}