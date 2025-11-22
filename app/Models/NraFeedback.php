<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NraFeedback extends Model
{
    use HasFactory;

    protected $table = 'nra_feedback';
    protected $primaryKey = 'Feedback_ID';

    protected $fillable = [
        'Feedback_text',
        'Rating',
        'Feedback_date',
        'View_ID',
        'Series_ID',
    ];

    public function viewer()
    {
        return $this->belongsTo(NraViewer::class, 'View_ID', 'View_ID');
    }

    public function series()
    {
        return $this->belongsTo(NraWebseries::class, 'Series_ID', 'Series_ID');
    }
}
