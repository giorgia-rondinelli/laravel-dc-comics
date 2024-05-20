@extends('layout.main')

@section('content')

<div class="container ">
    <h3>Modifica comic</h3>
    <form class="" action="{{route('comics.update',$comic)}}" method="POST">
        @csrf
        @method('Put')

            <div class="mb-3">
              <label for="title" class="form-label pt-3 ">Titolo</label>
              <input value="{{old('title', $comic->title) }}" name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="">
              @error ('title')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="description" class="form-label pt-3 ">Descrizione</label>
              <input value="{{old('description',$comic->description) }}" name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" aria-describedby="">
              @error ('description')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label  ">Immagine</label>
              <input name="thumb"value="{{old('thumb' ,$comic->thumb)}}" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" aria-describedby="">
              @error ('thumb')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="price" class="form-label  ">Prezzo</label>
              <input value="{{old('price', $comic->price)}}" name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="">
              @error ('price')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="series" class="form-label  ">Serie</label>
              <input value="{{old('series',$comic->series) }}" name="series" type="text" class="form-control @error('series') is-invalid @enderror" id="series" aria-describedby="">
              @error ('series')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="sale_date" class="form-label  ">Data di uscita</label>
              <input value="{{old('sale_date',$comic->sale_date) }}" name="sale_date" type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" aria-describedby="">
              @error ('sale_date')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror


            </div>
            <div class="mb-3">
              <label for="type" class="form-label  ">Tipologia</label>
              <input value="{{old('type',$comic->type) }}"  name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="type" aria-describedby="">
              @error ('type')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="writers" class="form-label  ">Scrittori</label>
              <input value="{{old('writers',$comic->writers) }}" name="writers" type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" aria-describedby="">
              @error ('writers')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="artists" class="form-label  ">Artisti</label>
              <input value="{{old('artists',$comic->artists) }}" name="artists" type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" aria-describedby="">
              @error ('artists')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>



    </form>
</div>



@endsection

@section('title')

@endsection
