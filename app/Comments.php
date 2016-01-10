<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	public function author()
	{
		return $this->belongsTo('App\User','user_id');
	}
  // returns post of any comment
	public function post()
	{
		return $this->belongsTo('App\Posts','post_id');
	}
}
}
