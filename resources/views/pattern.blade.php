@extends('layout.master')

@section('content')
    
    <section class="container" id="pattern">

        <div class="row">
            <div class="col">
                <ol class="breadcrumb"> 
                        <a href="/patterns/" class="breadcrumb-item">Patterns</a>
                        <a href="{{ Request::url() }}" class="breadcrumb-item active">{{ $pattern->name }}</a>
                </ol>  
            </div>
        </div>

        <div class="row">

            <div class="col image">
                <img src="{!! $pattern->photos[0]->medium_url !!}" alt="{!! $pattern->name !!} by Judy M. Ellis, Handiwords Ltd LLC !!}" class="img img-fluid">
            </div>

            <div class="col-sm-8 description">
            
                <h1>{{ $pattern->name }}</h1>

                @php
                    echo trim($pattern->notes_html, '"');
                @endphp

                <p class="text-center">
                    <a href="http://www.ravelry.com/patterns/library/{!! $pattern->permalink !!}" target="_blank" class="btn btn-primary">
                        <i class="fa fa-ravelry" aria-hidden="true"></i> Ravelry
                    </a>
    
                    <a href="/patterns/" class="btn btn-primary">Return to Patterns</a>
                </p>

            </div>

        </div>
    </section>

@endsection