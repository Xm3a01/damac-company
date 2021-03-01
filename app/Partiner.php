<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Partiner extends Model
{
    protected $fillable = [
        'name',
        'company_id',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
