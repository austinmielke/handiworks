@extends('layout.master')

@section('content')

    <section class="container" id="about">
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="img/portrait.jpg" alt="Photo of Judy M. Ellis">
            </div>
            <div class="col-sm-8">

                <h1 class="text-center">{{ $title }}</h1>
                <p>Starting in 1984 Handiworks Ltd. began as a craft business doing antique reproduction needle arts. Ventures included various regional craft shows always focused on fiber arts in one form or another. Currently Handiworks focuses on knitting and crochet pattern designs.</p>

                <p>Judy Ellis is a lifelong knitter and crocheter. She was literally taught at the knee of both of her grandmothers who never used written patterns.</p>

                <hr>

                <h3 class="text-center">Services Offered:</h2>

                <div class="container">
                    <div class="row justify-content-around">

                        <div class="card col-lg-5">
                            <div class="card-body">
                                <h4 class="text-center card-title">
                                    <a href="contact/design" class="card-link">Knit or Crochet Design</a>
                                </h4>
                                <p class="card-text">Judy works with yarn manufactures and companies to create elegant garments and designs.</p>
                            </div>
                        </div>
    
                        <div class="card col-lg-5">
                            <div class="card-body">
                                <h4 class="text-center card-title">
                                    <a href="contact/teaching" class="card-link">Teaching</a>
                                </h4>
                                <p class="card-text">Judy will create a single session or series of knit or crochet classes for presentation to individuals or groups. Examples of classes include: beginning knit or crochet, reading charts, lace, fair isle, colorwork, socks, etc.</p>
                            </div>
                        </div>
    
                        <div class="card col-lg-5">
                            <div class="card-body">
                                <h4 class="text-center card-title">
                                    <a href="contact/sample" class="card-link">Sample Knit or Crochet</a>
                                </h4>
                                <p class="card-text">Knit or crochet a sample of your design. Need an additional piece to send with a trunk show? Or an item test knit or crocheted before the pattern is release? Designers can hire Judy to knit or crochet a sample of your design.</p>
                            </div>
                        </div>

                        <div class="card col-lg-5">
                            <div class="card-body">
                                <h4 class="text-center card-title">
                                    <a href="contact/custom" class="card-link">Custom Knit or Crochet</a>
                                </h4>
                                <p class="card-text">Have a design you'd like made, but don't have the time? Judy will work with you to determin yarn, labor costs and timelines.</p>
                            </div>
                        </div>
    
                        <div class="card col-lg-5">
                            <div class="card-body">
                                <h4 class="text-center card-title">
                                    <a href="contact/editing" class="card-link">Tech and Copy Editing</a>
                                </h4>
                                <p class="card-text">Ensure your pattern is ready for publishing by having Judy as a second set of eyes to proofread, tech and copy edit, as well as checking the numbers to make sure they work.</p>
                            </div>
                        </div>

                        <div class="card col-lg-5">
                            <div class="card-body">
                                <h4 class="text-center card-title">
                                    <a href="contact/repair" class="card-link">Repair Knit or Crocheted Items</a>
                                </h4>
                                <p class="card-text">Have an item that has a hole or is a bit worn out? Judy has the skills to repair it for you.</p>
                            </div>
                        </div>
    
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection