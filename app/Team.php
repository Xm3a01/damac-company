<?php

namespace App;

use App\Company;
use App\MediaLink;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia
{
   use InteractsWithMedia;

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
