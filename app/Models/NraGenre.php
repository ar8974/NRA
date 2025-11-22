<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraGenre extends Model
{
    use HasFactory;

    protected $table = 'nra_genre';
    protected $primaryKey = 'Genre_ID';
    public $timestamps = false;

    protected $fillable = ['Genre_ID', 'Name'];
}