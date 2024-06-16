<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    public function index()
    {
        $details = Detail::all();
        return view('details.index', compact('details'));
    }

    public function home()
    {
        $details = Detail::all();
        return view('home', compact('details'));
    }
    
    public function create()
    {
        return view('details.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
            'date' => 'required',
        ]);
    
        $maxId = Detail::max('id');
    
        $newId = $maxId ? $maxId + 1 : 1;
    
        $detail = new Detail([
            'id' => $newId, 
            'title' => $request->get('title'),
            'image' => $request->get('image'),
            'content' => $request->get('content'),
            'date' => $request->get('date')
        ]);
    
        $detail->save();
    
        return redirect('/details')->with('success', 'Detail saved!');
    }

    public function show($id)
    {
        $detail = Detail::find($id);
        if (request()->wantsJson()) {
            return response()->json($detail);
        }
        return view('details.show', compact('detail'));
    }

    public function edit($id)
    {
        $detail = Detail::find($id);
        return view('details.edit', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
            'date' => 'required',
        ]);

        $detail = Detail::find($id);
        $detail->title = $request->get('title');
        $detail->image = $request->get('image');
        $detail->content = $request->get('content');
        $detail->date = $request->get('date');
        $detail->save();

        return redirect('/details')->with('success', 'Detail updated!');
    }

    public function destroy($id)
    {
        $detail = Detail::find($id);
        $detail->delete();

        return redirect('/details')->with('success', 'Detail deleted!');
    }
}
