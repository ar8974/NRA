<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraWebseries extends Model
{
    use HasFactory;

    protected $table = 'nra_webseries';
    protected $primaryKey = 'Series_ID';
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'Series_ID',
        'Name',
        'Release',
        'House_ID',
        'Country'
    ];

    public function prodhouse()
    {
        return $this->belongsTo(NraProdhouse::class, 'House_ID', 'House_ID');
    }

    public function contracts()
    {
        return $this->hasMany(NraContract::class, 'Series_ID', 'Series_ID');
    }

    public function genres()
    {
        return $this->belongsToMany(
            NraGenre::class,
            'nra_series_genre',
            'Series_ID',
            'Genre_ID'
        );
    }
}
