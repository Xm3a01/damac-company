<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statstic extends Model
{
    protected $fillable = [
        'name',
        'percent',
        'company_id',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
