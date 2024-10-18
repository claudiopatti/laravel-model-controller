@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie['title'] }}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie['original_title'] }}</h6>
                  <h6 class="card-title">{{ $movie['nationality'] }}</h6>
                  <p class="card-title">{{ $movie['date'] }}</p>
                  <p class="card-title">{{ $movie['vote'] }}</p>
                </div>
              </div>
        </div>
            
        @endforeach
    </div>
</div>
@endsection
