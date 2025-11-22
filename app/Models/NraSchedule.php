<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraSchedule extends Model
{
    use HasFactory;

    protected $table = 'nra_schedule';
    protected $primaryKey = 'Schedule_ID';
    public $timestamps = false;

    protected $fillable = [
        'Ep_ID',
        'Ep_Start',
        'Ep_End',
        'Tech_Interrupt',
        'Viewers',
    ];

    public function episode()
    {
        return $this->belongsTo(NraEpisode::class, 'Ep_ID', 'Ep_ID');
    }
}
