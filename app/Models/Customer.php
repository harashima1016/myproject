<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    //顧客詳細情報
    public function detail()
    {
    	return $this->hasOne('App\Models\CustomerDetail');
    }

    // 従業員名
    public function staff() {
    	return $this->belongsTo('App\Models\Staff');
    }
}
