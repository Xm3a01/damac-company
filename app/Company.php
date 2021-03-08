<?php

namespace App;

use App\Team;
use App\Service;
use App\Partiner;
use App\Statstic;
use App\Portfolio;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'about',
        'about_section_1',
        'about_section_2',
        'about_section_3',
        'why_us_title',
        'why_us',
        'why_us_section_1',
        'why_us_section_2',
        'why_us_section_3'
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function partiners()
    {
        return $this->hasMany(Partiner::class);
    }
    public function portfolioes()
    {
        return $this->hasMany(Portfolio::class);
    }
    public function statstics()
    {
        return $this->hasMany(Statstic::class);
    }
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
