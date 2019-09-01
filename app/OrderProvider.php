<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProvider extends Model
{
	public function User(){
	    return $this->belongsTo('App\User', 'idUser', 'id');
	}
}
