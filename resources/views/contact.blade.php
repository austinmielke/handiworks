@extends('layout.master')

@section('content')

    <section class="container" id="contact">
        <div class="row">
        
            <div class="col-sm-12 col-md-8">
                <h1 class="text-center">{{ $title }}</h1>
                <form action="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="body">Message:</label>
                        <textarea class="form-control" id="body" rows="5"></textarea>
                    </div>
                </form>
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
                </ul>
            </div>

        </div>
    </section>

@endsection