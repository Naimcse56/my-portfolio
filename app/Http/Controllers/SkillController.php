<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $row = Skill::orderBy('name', 'asc');
            return Datatables::of($row)
                    ->addIndexColumn()
                    ->addColumn('is_focusable', function($row){
                        return view('backend.skills.component.is_focusable', compact('row'));
                    })
                    ->addColumn('action', function($row){
                        return view('backend.skills.component.action', compact('row'));
                    })
                    ->rawColumns(['is_focusable','action'])
                    ->make(true);
        }
        return view('backend.skills.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required|in:Technical,Professional',
        ]);
        Skill::create([
            'name' => $request->name,
            'type' => $request->type,
            'percentage' => $request->percentage,
            'is_focusable' => $request->is_focusable ? 1 : 0,
        ]);
        
        return back()->with('success', 'Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['skill'] = Skill::find($id);
        return view('backend.skills.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'type' => 'required|in:Technical,Professional',
            ]);
            Skill::find($id)->update([
                                'name' => $request->name,
                                'type' => $request->type,
                                'percentage' => $request->percentage,
                                'is_focusable' => $request->is_focusable ? 1 : 0,
                            ]);
            
            return redirect()->route('skills.index')->with('success', 'Updated successfully.');
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
            $response = $this->chequeRepository->delete($request->id);
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
