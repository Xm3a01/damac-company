<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'name',
        'hint',
        'company_id',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
