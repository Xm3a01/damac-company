<?php

namespace App;

use App\Company;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Partiner extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'company_id',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('partiners');
    }
}
