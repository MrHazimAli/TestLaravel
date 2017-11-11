<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	//set this model only communicate with this table
  protected $table = 'posts';
  
}
