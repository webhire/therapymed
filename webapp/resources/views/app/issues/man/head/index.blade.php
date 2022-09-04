@extends('app.issues.layouts.main')

@section('content')
    <title>Erkak - Bosh</title>

    <main>

        <section id="schedule" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Erkak - Bosh</h2>
                </div>

                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    @foreach($head_issues as $issue)
                        @if($issue->body_part_id == 1 and $issue->gender_id == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="#issue-{{ $issue->id }}" role="tab" data-bs-toggle="tab">{{ $issue->issue_uz }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>

                <h3 class="sub-heading">This is only Alpha version of the application. Feel free to visit <a
                        href="https://github.com/webhire/therapymed" target="_blank">GitHub</a> page in order to see
                    version changes or just contact to developer. Sincerely WebHire Team.</h3>

                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    @foreach($head_issues as $issue)
                        @if($issue->body_part_id == 1 and $issue->gender_id == 1)
                            <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="issue-{{ $issue->id }}">

                                <div class="row schedule-item justify-content-center">
                                    <div class="col-md-10" style=text-align:center>
                                        <h4>{{ $issue->description_uz }}</h4>
                                        <a href="{{ route('man.quiz-' . $issue->id) }}" class="button btn btn-primary">Tashxis qo'yish</a>
                                    </div>
                                </div>

                            </div>
                        @endif
                    @endforeach

                </div>
            </div>

        </section>

    </main>

@endsection
