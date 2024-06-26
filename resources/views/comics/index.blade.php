@extends('layout.main')

@section('content')
<div class="container">
    <h1>I miei comics</h1>
</div>
@if (session('deleted'))
  <div class="alert alert-primary" role="alert">
    {{session('deleted')}}
  </div>


@endif



<div class="container d-flex ">
    <div class="row   ">
        @foreach ($comics as $comic)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">Data di uscita: {{$comic->sale_date}}</p>
                    <p class="card-text">Tipologia: {{$comic->type}}</p>
                    <p class="card-text">Prezzo: {{$comic->price}}</p>
                    <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">Dettagli</a>
                    <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning">Modifica</a>
                    <form class="d-inline" onsubmit="return confirm('sei sicuro di voler eliminare'{{$comic->titolo}})" method="POST" action="{{route('comics.destroy' ,$comic)}}"   >
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"> <i class="fa-solid fa-trash"></i></button>

                    </form>

                </div>
            </div>
        @endforeach
    </div>

</div>




@endsection

@section('title')

@endsection
