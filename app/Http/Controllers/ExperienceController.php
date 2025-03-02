<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['experiences'] = Experience::orderBy('start_date', 'desc')->get();
        return view('backend.experiences.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string',
            'designation' => 'required|string',
            'start_date' => 'required',
        ]);
        Experience::create([
            'user_id' => auth()->user()->id,
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'designation' => $request->designation,
            'start_date' => $request->start_date ? Carbon::parse($request->start_date)->format('Y-m-d') : null,
            'end_date' => $request->end_date ? Carbon::parse($request->end_date)->format('Y-m-d') : null,
            'currently_working' => $request->currently_working,
            'responsibility' => $request->responsibility,
        ]);
        
        return back()->with('success', 'Added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['experience'] = Experience::find($id);
        return view('backend.experiences.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'company_name' => 'required|string',
                'designation' => 'required|string',
                'start_date' => 'required',
            ]);
            Experience::find($id)->update([
                                'company_name' => $request->company_name,
                                'company_address' => $request->company_address,
                                'designation' => $request->designation,
                                'start_date' => $request->start_date ? Carbon::parse($request->start_date)->format('Y-m-d') : null,
                                'end_date' => $request->end_date ? Carbon::parse($request->end_date)->format('Y-m-d') : null,
                                'currently_working' => $request->currently_working,
                                'responsibility' => $request->responsibility,
                            ]);
            
            return redirect()->route('experiences.index')->with('success', 'Updated successfully.');
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
            $response = Experience::find($request->id)->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
