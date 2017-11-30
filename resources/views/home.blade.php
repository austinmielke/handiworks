@extends('layout.master')

@section('content')

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="carousel-title">Featured Patterns</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item carousel-item1 active">
                            <img class="img-fluid" src="img/carousel/1.jpg" alt="First slide">
                            <div class="carousel-caption">
                                <h3><a href="/patterns/503942">Midsummer Night Shawl</a></h3>
                                <p class="d-none d-sm-block">A timeless, yet versitile lace wrap.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="img/carousel/2.jpg" alt="Second slide">
                            <div class="carousel-caption">
                                <h3><a href="/patterns/546397">Phoenix Rising</a></h3>
                                <p class="d-none d-sm-block">A statement shawl using only knit and purl stitches.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="img/carousel/3.jpg" alt="Third slide">
                            <div class="carousel-caption">
                                <h3><a href="patterns/630256">Buffalo Round Up DK</a></h3>
                                <p class="d-none d-sm-block">Glamorous on all body types, done in a versatile dk weight.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <p class="lead">Starting in 1984 Handiworks Ltd. began as a craft business doing antique reproduction needle arts. Ventures included
                    various regional craft shows always focused on fiber arts in one form or another. Currently Handiworks
                    focuses on knitting and crochet pattern designs.</p>
            </div>
        </div>
    </section>
    
@endsection