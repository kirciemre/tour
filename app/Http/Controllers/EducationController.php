<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EducationAddRequest; //custom validation request i eklemeyi unutma!
use App\Models\Education; //custom validation request i eklemeyi unutma!


class EducationController extends Controller
{
    public function index() {
        $list = Education::all();
        return view('admin.education',compact('list'));
    }

    public function add() {
        return view('admin.education_add');
    }

    public function add_data(EducationAddRequest $request) {
        Education::create([
            "education_date"=> $request->date,
            "university" => $request->uni,
            "branch" => $request->branch,
            "description" => $request->description,
            "status" => $request->status
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('admin.education');
    }
}
