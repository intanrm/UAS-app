<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // index
    // create -> tampilan create
    // store -> saving
    // update
    // edit // -> view edit
    // destroy

    public function index() {
        $feedbacks = Feedback::latest()->paginate(20);
        return view('dashboard.feedback.index')->with('feedbacks', $feedbacks);
    }

    public function create() {
        return view('dashboard.feedback.create');
    }

    public function store(Request $request) {
        $request->validate([
            'user_name' =>'required',
            'user_role' =>'required',
            'rate' =>'required|numeric|min:1|max:5',
            'avatar' =>'required|file',
            'content' =>'required'
        ]);
        
        

        $file= $request->file('avatar');
        $fileName = $file->hashName();
        $file->storeAs('/public/avatars', $fileName);
        $fileDir = "/avatars/{$fileName}";

        Feedback::create(array_merge(
            $request->all(), 
            [
                'avatar' => $fileDir
            ]
        ));
        return redirect()->route('dashboard.feedback.index')->withSuccess('Feedback created');
    }

    public function edit($id) {
        $feedback = Feedback::findOrFail($id);
        return view('dashboard.feedback.edit')->with('feedback', $feedback);
    }

    public function update($id, Request $request) {
        $request->validate([
            'user_name' =>'required',
            'user_role' =>'required',
            'rate' =>'required|numeric|min:1|max:5',
            'content' =>'required'
        ]);

        $feedback = Feedback::findOrFail($id);

        $avatar = $feedback->avatar;

        if($request->hasFile('avatar')) {
            $file= $request->file('avatar');
            $fileName = $file->hashName();
            $file->storeAs('/public/avatars', $fileName);
            $avatar = "/avatars/{$fileName}";
        }

        $feedback->update(array_merge(
            $request->all(), 
            [
                'avatar' => $avatar
            ]
        ));

        return redirect()->route('dashboard.feedback.index')->withSuccess('Feedback updated');
    }

    public function destroy($id) {
        Feedback::findOrFail($id)->delete();
        return redirect()->route('dashboard.feedback.index')->withSuccess('Feedback deleted');
    }
}
