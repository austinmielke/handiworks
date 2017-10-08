@extends('layout.master')

@section('content')

        <section class="container" id="patterns-list">

            <div class="row">

                @foreach($patterns as $pattern)
    
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card text-center">
                            <div class="image">
                                <a href="/patterns/{!! $pattern->id !!}">
                                    <img class="img-fluid" src="{!! $pattern->first_photo->medium2_url !!}" alt="{!! $pattern->name !!} by Judy M. Ellis, Handiwords Ltd LLC">
                                </a>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">{{ $pattern->name }}</h4>
                                <a href="/patterns/{!! $pattern->id !!}" class="btn btn-primary">More Info</a>
                            </div>
                        </div>
                    </div>
    
                @endforeach
                
            </div>

        </section>

@endsection