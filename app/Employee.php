<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function office() {
    	return $this->hasOne('App\Office', 'officeCode', 'officeCode');
    }

    public function customers(){
    	return $this->hasMany('App\Customer', 'salesRepEmployeeNumber','employeeNumber')->take(2);
    }
}
