<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $row = Blog::orderBy('post_date', 'desc');
            return Datatables::of($row)
                    ->addIndexColumn()
                    ->addColumn('is_featured', function($row){
                        return view('backend.blogs.component.is_featured', compact('row'));
                    })
                    ->addColumn('is_publish', function($row){
                        return view('backend.blogs.component.is_publish', compact('row'));
                    })
                    ->addColumn('action', function($row){
                        return view('backend.blogs.component.action', compact('row'));
                    })
                    ->editColumn('post_date', function($row){
                        return date('d M, Y', strtotime($row->post_date));
                    })
                    ->rawColumns(['is_featured','action','is_active'])
                    ->make(true);
        }
        return view('backend.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        
        $thumbnail_img = null;
        foreach($request->files as $k => $file)
        {
            $file = $file;
            $name = str_replace(' ','_',$user->name).'.'.$file->getClientOriginalExtension();
            $file->move(public_path() . '/blog/thumbnail_img', $name);
            $thumbnail_img = '/blog/thumbnail_img/' . $name;
        }
        Blog::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'slug' => str_replace(' ','-',strtolower($request->slug)).'-'.date('is'),
            'thumbnail_img' => $thumbnail_img,
            'post_date' => date('Y-m-d'),
            'details' => $request->details,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'is_featured' => $request->is_featured ? 1 : 0,
            'is_publish' => $request->is_publish ? 1 : 0,
        ]);
        
        return back()->with('success', 'Added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show($slug)
    {
        $data['blog'] = Blog::where('slug', $slug)->first();
        return view('blogs.blog_details', $data);
    }

    public function edit($id)
    {
        $data['blog'] = Blog::find($id);
        return view('backend.blogs.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
            ]);
            $blog = Blog::find($id);
            $thumbnail_img = $blog->thumbnail_img;
            foreach($request->files as $k => $file)
            {
                $file = $file;
                $name = str_replace(' ','_',$user->name).'.'.$file->getClientOriginalExtension();
                $file->move(public_path() . '/blog/thumbnail_img', $name);
                $thumbnail_img = '/blog/thumbnail_img/' . $name;
            }
            $blog->update([
                            'title' => $request->title,
                            'slug' => $request->title != $blog->title ? str_replace(' ','-',strtolower($request->slug)).'-'.date('is') : $blog->slug,
                            'details' => $request->details,
                            'thumbnail_img' => $thumbnail_img,
                            'meta_description' => $request->meta_description,
                            'meta_keywords' => $request->meta_keywords,
                            'is_featured' => $request->is_featured ? 1 : 0,
                            'is_publish' => $request->is_publish ? 1 : 0,
                        ]);
            
            return redirect()->route('blogs.index')->with('success', 'Updated successfully.');
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
            $response = Blog::find($request->id)->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function publish_status_update(Request $request)
    {
        try {
            Blog::find($request->id)->update([
                'is_featured' => $request->is_featured,
            ]);
            return response()->json([
                'success' => 'Updated successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function featured_status_update(Request $request)
    {
        try {
            Blog::find($request->id)->update([
                'is_publish' => $request->is_publish,
            ]);
            return response()->json([
                'success' => 'Updated successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }
}
