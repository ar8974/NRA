<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraSub extends Model
{
    use HasFactory;

    protected $table = 'nra_sub';
    protected $primaryKey = 'Sub_ID';
    public $timestamps = false;

    protected $fillable = ['Series_ID', 'Language'];

    public function webseries()
    {
        return $this->belongsTo(NraWebseries::class, 'Series_ID', 'Series_ID');
    }
}
