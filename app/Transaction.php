<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    public function Client(){
	    return $this->belongsTo('App\Client', 'idClient', 'id');
	}

	public function Credit(){
	    return $this->belongsTo('App\Credit', 'idCredit', 'id');
	}

	public function Order(){
	    return $this->hasOne('App\Order', 'id', 'idOrder');
	}
	
	public function User(){
	    return $this->belongsTo('App\User', 'idUser', 'id');
	}
}
