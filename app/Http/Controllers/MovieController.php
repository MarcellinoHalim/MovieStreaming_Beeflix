<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    //
    public function home(){

        $movies = Movie::paginate(4);

        $datas = [
            'movies'=>$movies
        ];

        return view('home', $datas);
    }

    public function inputMovie(){
        $genres = Genre::all();
        return view ('inputMovie', ['genres'=>$genres]);
    }

    public function store(Request $request){
        // 1. validasi
        $validated = $request->validate([
            'genre' => 'required',
            'photo' => 'required|image|max:5120', //5 MB
            'title' => 'required|max:30',
            'description' => 'required|max:50',
            'publish_date' => 'required|date|before:today'
        ]);

        // Menyimpan file
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Membuat nama file unik
            $file->move(public_path('images/movies'), $filename); // Mengupload file ke direktori public/photos
        }

        // 2. store data ke DB
        $movie = new Movie();
        $movie->genre_id = $request->genre;
        $movie->photo = $filename; // Simpan nama file ke dalam database
        $movie->title = $request->title;
        $movie->description = $request->descrption;
        $movie->publish_date = $request->publish_date;
        $movie->save();

        return back()->with('success', true);
    }

    public function delete($id){
        Movie::where('id', $id)->delete();
        return redirect('/')->with('success', 'Movie Deleted!');
    }
}
