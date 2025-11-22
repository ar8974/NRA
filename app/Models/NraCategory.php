<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NraCategory extends Model
{
    protected $table = 'nra_category';
    protected $primaryKey = 'Category_ID';
    public $timestamps = false;

    public function webseries()
    {
        return $this->hasMany(NraWebseries::class, 'Category_ID', 'Category_ID');
    }
}
