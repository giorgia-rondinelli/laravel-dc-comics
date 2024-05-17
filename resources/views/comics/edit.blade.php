@extends('layout.main')

@section('content')

<div class="container ">
    <h3>Modifica comic</h3>
    <form class="" action="{{route('comics.update',$comic)}}" method="POST">
        @csrf
        @method('Put')

            <div class="mb-3">
              <label for="title" class="form-label pt-3 ">Titolo</label>
              <input value="{{$comic->title}}" name="title" type="text" class="form-control" id="title" aria-describedby="">

            </div>
            <div class="mb-3">
              <label for="description" class="form-label pt-3 ">Descrizione</label>
              <input value="{{$comic->description}}" name="description" type="text" class="form-control" id="description" aria-describedby="">

            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label  ">Immagine</label>
              <input name="thumb"value="{{$comic->thumb}} type="text" class="form-control" id="thumb" aria-describedby="">

            </div>
            <div class="mb-3">
              <label for="price" class="form-label  ">Prezzo</label>
              <input value="{{$comic->price}} name="price" type="text" class="form-control" id="price" aria-describedby="">

            </div>
            <div class="mb-3">
              <label for="series" class="form-label  ">Serie</label>
              <input value="{{$comic->series}} name="series" type="text" class="form-control" id="series" aria-describedby="">

            </div>
            <div class="mb-3">
              <label for="sale_date" class="form-label  ">Data di uscita</label>
              <input value="{{$comic->sale_date}} name="sale_date" type="text" class="form-control" id="sale_date" aria-describedby="">

            </div>
            <div class="mb-3">
              <label for="type" class="form-label  ">Tipologia</label>
              <input value="{{$comic->type}} name="type" type="text" class="form-control" id="type" aria-describedby="">

            </div>
            <div class="mb-3">
              <label for="writers" class="form-label  ">Scrittori</label>
              <input value="{{$comic->writers}} name="writers" type="text" class="form-control" id="writers" aria-describedby="">

            </div>
            <div class="mb-3">
              <label for="artists" class="form-label  ">Artisti</label>
              <input value="{{$comic->artists}} name="artists" type="text" class="form-control" id="artists" aria-describedby="">

            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>



    </form>
</div>



@endsection

@section('title')

@endsection
