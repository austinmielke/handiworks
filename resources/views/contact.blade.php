@extends('layout.master')

@section('content')

    <section class="container" id="contact">
        <div class="row justify-content-center">   
            <h1 class="text-center">{{ $title }}</h1>
            <!-- <div class="col-sm-12 col-md-8">
                <form class="mb-4" action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="text" name="email" id="email" value="{{old('email')}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" name="subject" id="subject" value="{{old('subject') ? old('subject') : $subject }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="body">Message:</label>
                        <textarea name="bodyMessage" id="bodyMessage" rows="5" class="form-control">{{old('bodyMessage')}}</textarea>
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
            </div> -->
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <ul>
                <li>
                        <a href="mailto:handiworksltd@gmail.com" target="_blank">
                            <i class="fa fa-envelope" aria-hidden="true"></i> Email
                        </a>
                    </li>
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
                        <a href="https://twitter.com/HandiworksLtd?lang=en" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i> Twitter
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/handiworksltd/" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i> Instagram
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection