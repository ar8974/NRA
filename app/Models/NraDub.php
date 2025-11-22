<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraDub extends Model
{
    use HasFactory;

    protected $table = 'nra_dub';
    protected $primaryKey = 'Dub_ID';
    public $timestamps = false;

    protected $fillable = ['Ep_ID', 'Language'];
}