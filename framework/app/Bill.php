<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    public $timestamps = false;

    function BillDetail(){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }
    function Customer(){
        return $this->belongsTo('App\Customer','id_customer','id');
    }
    function Foods(){
         return $this->belongsToMany(
            'App\Food',
            'bill_detail', 
            'id_bill',
            'id_food'
        );
    }
    
}
