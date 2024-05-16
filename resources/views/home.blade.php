@extends('layout.main')

@section('content')
<div class="container">
    <h1>LIsta CD comics</h1>
</div>




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

                </div>
            </div>
        @endforeach
    </div>

</div>




@endsection

@section('title')

@endsection
