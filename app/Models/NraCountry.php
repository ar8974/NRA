<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraCountry extends Model
{
    use HasFactory;

    protected $table = 'nra_country';
    protected $primaryKey = 'Country_Code';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'Country_Code',
        'Country',
    ];
}
