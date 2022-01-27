@extends('layouts.main')

@section('main-content')
 
<section class="container mb-4 text-center">

    <h1 class="mb-3">Welcome Comics</h1>

    @if (session('deleted'))
        <div class="alert alert-success">
            {{ session('deleted') }}
            : è stata eliminata correttamente.
        </div>
    @endif
    

    <div class="row card-group flex-wrap justify-content-center">
        @foreach ($comics as $comic)

            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 h-100">

                <div class="card h-100 my_card" style="width: 22rem;">

                    <img src="{{ $comic->thumb }}" class="card-img-top"
                         alt="{{ $comic->series }}"
                         style="max-height: 15rem;
                                object-fit: contain">

                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->series }}</h5>
                        <p class="card-text">{{ Str::limit( $comic->description , 120, '...') }}</p>
                        <a href="{{ route('comics.show', $comic->id ) }}" class="btn btn-primary">Altre informazioni</a>
                    </div>

                    <div class="button_deleted_container">
                        <form action="{{ route('comics.destroy', $comic->id ) }}" method="POST">
                            @csrf
                            
                            @method('DELETE')
                            
                            <button class="button_deleted"type="submit" value="delete">
                                
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>

                        <a class="button_edit" href="{{ route('comics.edit', $comic->id) }}">
                                
                            <i class="fas fa-tools"></i>
                        </a>
                    </div>

                </div>
            </div>

        @endforeach
    </div>

    {{ $comics->links() }}

</section>

@endsection