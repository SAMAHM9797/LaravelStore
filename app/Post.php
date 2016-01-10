<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $primaryKey = 'id';
	protected $table = 'posts';
	protected $fillable = array('url', 'title', 'description','content','blog','created_at_ip', 'updated_at_ip');

	public function comments()
	{
		return $this->hasMany('App\Comments','post_id');
	}
  // returns the instance of the user who is author of that post
	public function author()
	{
		return $this->belongsTo('App\User','author_id');
	}
}

}
