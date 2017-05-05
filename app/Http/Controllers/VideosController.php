<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;
use Intensivettt\Video;
use Intensivettt\Videoscategoria;

class VideosController extends Controller
{
	public function index(Request $request)
	{
		$videos = Video::search($request->nombre_video)->orderBy('id', 'DESC')->paginate(8);
		$videos->each(function($videos){
			$videos->categoria;
		});

		return view('admin.videos.index')->with('videos', $videos);

	}

	public function create(){
		$categorias = Videoscategoria::orderBy('nombre_categoria', 'ASC')->lists('nombre_categoria', 'id');
		return view('admin.videos.create')->with('categorias', $categorias);
	}

	public function store(Request $request)
	{
		$video = new Video($request->all());
		$video->save();

		flash("Felicidades has registrado con éxito el video: ". $video->nombre_video)->success();

		return redirect()->route('admin.videos.index');
	}

   public function edit($id)
   {
   	   $video = Video::find($id);
   	   $video->categoria;
   	   $categorias = Videoscategoria::orderBy('nombre_categoria', 'ASC')->lists('nombre_categoria', 'id');
       return view('admin.videos.edit')->with('categorias', $categorias)->with('video', $video);
   }

   public function update(Request $request, $id)
   {
   	  $video = Video::find($id);
   	  $video->fill($request->all());
   	  $video->save();
   	  flash("actualizaste con éxito el video ".$video->nombre_video)->warning();
   	  return redirect()->route("admin.videos.index");
   }
   
   public function destroy($id)
   {
   	$video =  Video::find($id);
   	$video->delete();
   	flash("Eliminaste con éxito el video: ".$video->nombre_video)->warning();
   	return redirect()->route("admin.videos.index");
   }
    
}
