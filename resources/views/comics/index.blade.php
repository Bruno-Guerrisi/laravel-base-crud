@extends('layouts.main')

@section('main-content')
 
<section class="container mb-4 text-center">

    <h1>Welcome Comics</h1>
    

    <div class="row card-group flex-wrap">
        @foreach ($comics as $comic)

            <div class="col-sm-12 col-md-6 col-lg-4 mb-4 h-100">
                <div class="card h-100" style="width: 22rem;">

                    <img src="{{ $comic->thumb }}" class="card-img-top"
                         alt="{{ $comic->series }}" 
                         style="max-height: 15rem;
                                object-fit: contain">

                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->series }}</h5>
                        <p class="card-text">{{ Str::limit( $comic->description , 120, '...') }}</p>
                        <a href="{{ route('comics.show', $comic->id ) }}" class="btn btn-primary">Altre informazioni</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>


</section>

@endsection