<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'company_id',
    ];

    public function company() {
        return $this->belongsTo('App\Company', 'company_id', 'id');
    }
}
