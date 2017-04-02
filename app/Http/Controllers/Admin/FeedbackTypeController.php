<?php

namespace App\Http\Controllers\Admin;

use App\FeedbackType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback_types = FeedbackType::latest()->get();
        return view('admin.feedback-types.index', compact('feedback_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feedback-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $feedback_type = new FeedbackType();
        $feedback_type->name = request('name');
        $feedback_type->save();

        return redirect('admin/feedback-types');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedbackType = FeedbackType::find($id);
        return view('admin.feedback-types.edit', compact('feedbackType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $feedbackType = FeedbackType::find($id);

        $this->validate($request, [
            'name' => 'required',
        ]);

        $feedbackType->name = request('name');
        $feedbackType->save();

        return redirect('admin/feedback-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
