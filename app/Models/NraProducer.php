<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NraProducer extends Model
{
    protected $table = 'nra_producer';
    protected $primaryKey = 'Prod_ID';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'Prod_ID',
        'F_Name',
        'L_Name',
        'Street',
        'City',
        'ZIP',
        'Phone_code',
        'Local_Phone',
        'Email',
        'Country_Code',
    ];

    public function country() {
        return $this->belongsTo(NraCountry::class, 'Country_Code', 'Country_Code');
    }
}
