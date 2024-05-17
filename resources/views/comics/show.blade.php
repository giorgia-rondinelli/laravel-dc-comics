@extends('layout.main')

@section('content')
<div class="container">
    <h1>Dettagli</h1>
</div>




<div class="container d-flex ">
    <div class="row justify-content-center
      ">

            <div class="card m-3 d-flex " style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">Data di uscita: {{$comic->sale_date}}</p>
                    <p class="card-text">Tipologia: {{$comic->type}}</p>
                    <p class="card-text">Prezzo: {{$comic->price}}</p>

                </div>

            </div>
            <div>
                    <p>{{$comic->description}}</p>
            </div>
            {{-- <?php
             //$artist_array= explode(',',$comic->artists);
            //?>

            <ul>
                @foreach ($artist_array as $artist )
                <li>{{$artist}}</li>
                @endforeach

            </ul> --}}
            <div>Artisti:
                    <p>{{$comic->artists}}</p>
            </div>
            <div>Scrittori:
                    <p>{{$comic->writers}}</p>
            </div>

    </div>

</div>




@endsection

@section('title')

@endsection
