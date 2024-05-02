<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view("viewmovie",[
            "movies" => movie::all()
        ]);
    }
  public function store(Request $request)
  {
    movie::create($request->all());
    return back();
  }


  public function edit($id)
  {
$movie = movie::find($id);
return view("movieupdate",
[
    "movie" => $movie
]);
}
public function update(Request $request,$id)
{
$movie =movie::find($id);
$movie->update($request->all());
return redirect("movie");
}

public function destroy($id)
{
$movie = movie::find($id);
$movie->delete();
return redirect("movie");
}

}
