<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraContract extends Model
{
    use HasFactory;

    protected $table = 'nra_contract';
    protected $primaryKey = 'Contract_ID';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'Contract_ID',
        'Series_ID',
        'Contract_date',
        'Contract_end',
        'Charge_per_ep',
    ];

    public function webseries()
    {
        return $this->belongsTo(NraWebseries::class, 'Series_ID', 'Series_ID');
    }
}
