<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelGroup extends Model
{
  protected $table = 'hotel_group';
  
    //事業部
    public function division() {
    	return $this->belongsTo('App\Models\Division');
    }
    //部署
    public function department() {
    	return $this->belongsTo('App\Models\Department');
    }
}
