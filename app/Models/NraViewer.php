<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraViewer extends Model
{
    use HasFactory;

    protected $table = 'nra_viewer';
    protected $primaryKey = 'View_ID';
    public $timestamps = false;

    protected $fillable = [
        'View_ID',
        'F_Name',
        'L_Name',
        'Street',
        'City',
        'ZIP',
        'Acc_date',
        'Monthly_Charge',
        'Country_Code',
    ];

    public function country()
    {
        return $this->belongsTo(NraCountry::class, 'Country_Code', 'Country_Code');
    }

    public function webseries()
    {
        return $this->belongsToMany(NraWebseries::class, 'nra_viewer_series', 'View_ID', 'Series_ID');
    }

    public function getRouteKeyName()
    {
        return 'View_ID';
    }
}
