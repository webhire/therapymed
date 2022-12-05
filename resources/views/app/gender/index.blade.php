@extends('app.gender.layouts.main')

@section('content')

    <main id="main">

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2 data-aos="fade-in">Tana a'zosini tanlang</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach($genders as $gender )
                                <li data-filter=".filter-{{ $gender->id }}">{{ $gender->gender_uz }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">
                    @foreach($bodyParts as $bodyPart)

                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $bodyPart->gender_id }}">
                            <div class="portfolio-wrap">
                                <img src="assets/img/body_parts/{{ $bodyPart->id }}.png" class="img-fluid"
                                     alt="">
                                <div class="portfolio-links">
                                    <a href="{{ route('man.issue-' . $bodyPart->id) }}" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                                <div class="portfolio-info">
                                    <h4>{{ $bodyPart->body_part_uz }}</h4>
                                    <p>{{ $bodyPart->body_part_uz }}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->


    </main><!-- End #main -->

@endsection


