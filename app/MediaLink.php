<?php

namespace App;

use App\Team;
use Illuminate\Database\Eloquent\Model;

class MediaLink extends Model
{
    protected $fillable = [
        'name',
        'icon',
        'team_id',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
