@extends('layout.master')

@section('content')

    <section class="container" id="contact">
        <div class="row">
        
            <div class="col-sm-12 col-md-8">
                <h1 class="text-center">{{ $title }}</h1>
                <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="body">Message:</label>
                        <textarea name="bodyMessage" id="bodyMessage" rows="5" class="form-control"></textarea>
                    </div>

                    @if (count($errors))
                        <div class="form-group">
                            <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                            </div>
                        </div>
                    @endif

                    <button class="btn btn-success">Send Message</button>

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