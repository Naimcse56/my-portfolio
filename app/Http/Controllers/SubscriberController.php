<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function subscribe_now(Request $request)
    {
        Subscriber::create(['email' => $request->email]);
        return back()->with('success', 'Subscribed successfully.');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $row = Subscriber::orderBy('id', 'desc');
            return Datatables::of($row)
                    ->addIndexColumn()
                    ->addColumn('created_at', function($row){
                        return date('d M, Y h:i', strtotime($row->created_at));
                    })
                    ->make(true);
        }
        return view('backend.subscribers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
