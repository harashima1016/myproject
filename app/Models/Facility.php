<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = 'facility';

    //事業部
    public function division() {
    	return $this->belongsTo('App\Models\Division');
    }
    //部署
    public function department() {
    	return $this->belongsTo('App\Models\Department');
    }
    //取引ステータス
    public function transaction_status() {
    	return $this->belongsTo('App\Models\TransactionStatus');
    }
    //運営状況
    public function sales_status() {
    	return $this->belongsTo('App\Models\SalesStatus');
    }

}
