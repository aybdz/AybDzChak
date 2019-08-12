<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    public function User(){
	    return $this->belongsTo('App\User', 'idUser', 'id');
	}

	public function Product(){
	    return $this->belongsTo('App\Product', 'idProduct', 'id');
	}

	public function Order(){
	    return $this->belongsTo('App\Order', 'idOrder', 'id');
	}
}
