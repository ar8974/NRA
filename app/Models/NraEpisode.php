<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraEpisode extends Model
{
    use HasFactory;

    protected $table = 'nra_episode';
    protected $primaryKey = 'Ep_ID';
    public $timestamps = false;

    protected $fillable = [
        'Series_ID',
        'Ep_No',
        'Title',
        'Ep_ID',
    ];

    public function webseries()
    {
        return $this->belongsTo(NraWebseries::class, 'Series_ID', 'Series_ID');
    }

    public function schedules()
    {
        return $this->hasMany(NraSchedule::class, 'Ep_ID', 'Ep_ID');
    }

    public function subs()
    {
        return $this->hasMany(NraSub::class, 'Ep_ID', 'Ep_ID');
    }

    public function dubs()
    {
        return $this->hasMany(NraDub::class, 'Ep_ID', 'Ep_ID');
    }
}
