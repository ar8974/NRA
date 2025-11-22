<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NraFeedback;
use Illuminate\Http\Request;

class NraFeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = NraFeedback::with(['viewer','series'])->paginate(10);
        return view('admin.feedback.index', compact('feedbacks'));
    }

    public function show(NraFeedback $feedback)
    {
        return view('admin.feedback.show', compact('feedback'));
    }

}
