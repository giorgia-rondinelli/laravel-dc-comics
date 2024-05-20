@extends('layout.main')

@section('content')

<div class="container ">
    <form class="" action="{{route('comics.store')}}" method="POST">
        @csrf

            <div class="mb-3">
              <label for="title" class="form-label pt-3 ">Titolo</label>
              <input class="form-control @error('title') is-invalid @enderror" name="title" type="text"  id="title" aria-describedby="" value=" {{old('title')}}">
              @error ('title')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="description" class="form-label pt-3 ">Descrizione</label>
              <input name="description" type="text" class="form-control  @error('description') is-invalid @enderror" id="description" aria-describedby="" value="{{old('description')}}">
              @error ('description')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label  ">Immagine</label>
              <input name="thumb" type="text" class="form-control  @error('thumb') is-invalid @enderror" id="thumb" aria-describedby="" value="{{old('thumb')}}">
              @error ('thumb')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="price" class="form-label  ">Prezzo</label>
              <input name="price" type="text" class="form-control  @error('price') is-invalid @enderror" id="price" aria-describedby="" value="{{old('price')}}">
              @error ('price')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="series" class="form-label  ">Serie</label>
              <input name="series" type="text" class="form-control  @error('series') is-invalid @enderror" id="series" aria-describedby="" value="{{old('titolo')}}">
              @error ('series')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="sale_date" class="form-label  ">Data di uscita</label>
              <input name="sale_date" type="text" class="form-control  @error('sale_date') is-invalid @enderror" id="sale_date" aria-describedby="" value="{{old('sale_date')}}">
              @error ('sale_date')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="type" class="form-label  ">Tipologia</label>
              <input name="type" type="text" class="form-control  @error('type') is-invalid @enderror" id="type" aria-describedby="" value="{{old('type')}}">
              @error ('type')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="writers" class="form-label  ">Scrittori</label>
              <input name="writers" type="text" class="form-control  @error('writers') is-invalid @enderror" id="writers" aria-describedby="" value="{{old('writers')}}">
              @error ('writers')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="artists" class="form-label  ">Artisti</label>
              <input name="artists" type="text" class="form-control  @error('artists') is-invalid @enderror" id="artists" aria-describedby="" value="{{old('artists')}}">
              @error ('artists')
              <p class="text-danger ">

                  {{$message}}
              </p>
              @enderror

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>



    </form>
</div>



@endsection

@section('title')

@endsection
