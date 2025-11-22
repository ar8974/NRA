<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NraProdhouse extends Model
{
    protected $table = 'nra_prodhouse';
    protected $primaryKey = 'House_ID';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'House_ID',
        'Name',
        'Street',
        'City',
        'ZIP',
        'Year_Est',
        'Country_Code'
    ];
}
