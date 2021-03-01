<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
