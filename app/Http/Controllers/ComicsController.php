<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicRequest;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Str;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics= Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {
        $form_data=$request->all();

         $new_comic= new Comic();
        // $new_comic->title=$form_data['title'];
        // $new_comic->slug=$this->generateSlug($new_comic->title);
        // $new_comic->description=$form_data['description'];
        // $new_comic->thumb=$form_data['thumb'];
        // $new_comic->price=$form_data['price'];
        // $new_comic->series=$form_data['series'];
        // $new_comic->sale_date=$form_data['sale_date'];
        // $new_comic->type=$form_data['type'];
        // $new_comic->artists= $form_data['artists'];
        // $new_comic->writers= $form_data['writers'];ù
        $form_data['slug']=$this->generateSlug($form_data['title']);

        $new_comic->fill($form_data);

        $new_comic->save();

        return redirect()->route('comics.show',$new_comic);


    }
    private function generateSlug($string){

        $slug= Str::slug($string.'-');
        $original_slug=$slug;
        // 3
        $exist= Comic::where('slug',$slug)->first();
        dump(($exist));

        // 5
        $c=1;
        while($exist){
            $slug=$original_slug.'-'.$c;
            $exist= Comic::where('slug',$slug)->first();
            $c++;
        }
        return $slug;

    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $form_data=$request->all();
        if($form_data['title']===$comic->title){
            $form_data['slug']=$comic->slug;
        }else{
            $form_data['slug']=$this->generateSlug($form_data['title']);

        }

        $comic->update($form_data);
        return redirect()->route('comics.show',compact('comic'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted','il comic '. $comic->title.'è stato eliminato correttamente');
    }
}
