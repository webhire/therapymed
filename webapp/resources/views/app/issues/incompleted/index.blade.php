@extends('app.issues.layouts.main')

@section('content')
    <title>Incompleted Parts</title>

    <main>
        <!-- ======= Schedule Section ======= -->
        <section id="schedule" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Incompleted</h2>
                    <p>Alpha version</p>
                </div>

                <h4 style="text-align:center">Since it is alpha version, this part hasn't completed yet. Wait up the next update!</h4>
{{--                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    @foreach($eye_issues as $issue)
                        @if($issue->body_part_id == 2 and $issue->gender_id == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="#issue-{{ $issue->id }}" role="tab"
                                   data-bs-toggle="tab">{{ $issue->issue_uz }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>--}}

                <h3 class="sub-heading">This is only Alpha version of the application. Feel free to visit <a
                        href="https://github.com/webhire/therapymed" target="_blank">GitHub</a> page in order to see
                    version changes or just contact to developer. Sincerely WebHire Team.</h3>

{{--                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <!-- Schdule Day 1 -->
                    @foreach($eye_issues as $issue)
                        @if($issue->body_part_id == 2 and $issue->gender_id == 1)
                            <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="issue-{{ $issue->id }}">
                                <div class="row schedule-item">
                                    <div class="col-md-2">
                                        <time>09:30 AM</time>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>{{ $issue->description_uz }}</h4>
                                        <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- End Schdule Day 1 -->--}}

                </div>

            </div>

        </section><!-- End Schedule Section -->

    </main>

@endsection
