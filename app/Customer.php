<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'active', 'company_id'];

    public function scopeActive($query){

    	return $query->whereActive(1);
    }

    public function scopeInactive($query){

    	return $query->whereActive(0);
    }

    public function Company(){

    	return $this->belongsTo(Company::class);
    }

    public function getActiveAttribute($attribute){

    	return $this->activeOptions()[$attribute];
    }

    public function activeOptions(){

        return [
            1 => 'Active',
            0 => 'Inactive'
        ];
    }
}
