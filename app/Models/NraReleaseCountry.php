<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraReleaseCountry extends Model
{
    use HasFactory;

    protected $table = 'nra_release_country';
    public $timestamps = false;

    protected $fillable = [
        'Series_ID',
        'Country_Code',
        'Release_Date',
    ];

    public function webseries()
    {
        return $this->belongsTo(NraWebseries::class, 'Series_ID', 'Series_ID');
    }

    public function country()
    {
        return $this->belongsTo(NraCountry::class, 'Country_Code', 'Country_Code');
    }
}
