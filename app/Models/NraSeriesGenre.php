<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraSeriesGenre extends Model
{
    use HasFactory;

    protected $table = 'nra_series_genre';
    public $incrementing = false;
    public $timestamps = false;

    protected $primaryKey = null;
    protected $fillable = [
        'Series_ID',
        'Genre_ID',
    ];

    public function webseries()
    {
        return $this->belongsTo(NraWebseries::class, 'Series_ID', 'Series_ID');
    }

    public function genre()
    {
        return $this->belongsTo(NraGenre::class, 'Genre_ID', 'Genre_ID');
    }
}
