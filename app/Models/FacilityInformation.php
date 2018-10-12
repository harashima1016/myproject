<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacilityInformation extends Model
{
    protected $table = 'facility_information';

    //施設
    public function facility() {
    	return $this->belongsTo('App\Models\Facility');
    }
}
