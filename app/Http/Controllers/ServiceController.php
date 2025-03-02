<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $row = Service::orderBy('name', 'asc');
            return Datatables::of($row)
                    ->addIndexColumn()
                    ->addColumn('short_details', function($row){
                        return substr($row->short_details, 0, 90).' ...';
                    })
                    ->addColumn('icon', function($row){
                        return $row->icon;
                    })
                    ->addColumn('action', function($row){
                        return view('backend.services.component.action', compact('row'));
                    })
                    ->rawColumns(['icon','action'])
                    ->make(true);
        }
        return view('backend.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Service::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'short_details' => $request->short_details,
            'icon' => $request->icon,
        ]);
        
        return back()->with('success', 'Added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['service'] = Service::find($id);
        return view('backend.services.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);
            Service::find($id)->update([
                                'name' => $request->name,
                                'short_details' => $request->short_details,
                                'icon' => $request->icon,
                            ]);
            
            return redirect()->route('services.index')->with('success', 'Updated successfully.');
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
            $response = Service::find($request->id)->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
