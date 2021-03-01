<?php

namespace App;

use App\Company;
use App\MediaLink;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected $fillable = [
        'name',
        'job_title',
        'description',
        'company_id',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function links()
    {
        return $this->hasMany(MediaLink::class);
    }

}
