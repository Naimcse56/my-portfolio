<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['education_infos'] = Education::orderBy('title', 'asc')->get();
        return view('backend.education.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'institute_name' => 'required|string',
            'board' => 'required|string',
        ]);
        Education::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'department' => $request->department,
            'institute_name' => $request->institute_name,
            'board' => $request->board,
            'result' => $request->result,
            'passing_year' => $request->passing_year,
        ]);
        
        return back()->with('success', 'Added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['education'] = Education::find($id);
        return view('backend.education.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|string',
                'institute_name' => 'required|string',
                'board' => 'required|string',
            ]);
            Education::find($id)->update([
                                'title' => $request->title,
                                'department' => $request->department,
                                'institute_name' => $request->institute_name,
                                'board' => $request->board,
                                'result' => $request->result,
                                'passing_year' => $request->passing_year,
                            ]);
            
            return redirect()->route('education.index')->with('success', 'Updated successfully.');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $response = Education::find($request->id)->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
