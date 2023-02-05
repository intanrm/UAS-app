<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Feedback;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        $courses = Course::latest()->get();
        $feedbacks = Feedback::latest()->limit(2)->get();

        $firstFeedback = $feedbacks[0] ?? null;
        $secondFeedback = $feedbacks[1] ?? null;

        return view('landing.index')
                ->with('courses', $courses)
                ->with('firstFeedback', $firstFeedback)
                ->with('secondFeedback', $secondFeedback);
    }
}
