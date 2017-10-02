@extends('layout.master')

@section('content')

    <section class="container" id="contact">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <h1 class="text-center">{{ $title }}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sed doloribus odio in aperiam voluptatibus
                    dolorem est consequuntur, error ab quisquam dolores quod debitis sequi ea fugiat. Odit possimus, adipisci.</p>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <a href="http://www.ravelry.com/designers/handiworks-ltd" target="_blank">
                <i class="fa fa-ravelry" aria-hidden="true"></i> Ravelry
                </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/Handiworks-Ltd-394179337378519/" target="_blank">
                <i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook
                </a>
                    </li>
                    <li>
                        <a href="mailto:handiworksltd@gmail.com">
                <i class="fa fa-envelope" aria-hidden="true"></i> Email
                </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection