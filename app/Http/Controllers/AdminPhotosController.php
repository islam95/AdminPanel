<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class AdminPhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::all();

        return view('admin.photos.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.photos.create');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $name = time(). $file->getClientOriginalName();
        $file->move('images', $name);

        Photo::create(['file' => $name]);

    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);

        if($photo) {
            unlink(public_path() . $photo->file);
        }
        $photo->delete();

        return redirect('admin/photos');
    }

}
