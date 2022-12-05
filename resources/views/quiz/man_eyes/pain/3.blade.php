@extends('quiz.layouts.main')

@section('content')

    <form action="{{ route('man.eyes.pain.quiz.3.store') }}" method="POST">
        @csrf
        <div id="buy-tickets" class="section-with-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header align-content-center">
                    @foreach($questions as $question)
                        @if( $question->id === 3)
                            <h3>{{ $question->question_explanation_uz }}</h3>
                        @endif
                    @endforeach
                </div>
                <a style="width:50%" class="button btn btn-lg btn-outline-success" href="#popup1">Ha</a>
                <button style="width:50%" type="submit" class="btn btn-lg btn-outline-danger float-right" name="answer" value="0" >Yoq</button>
            </div>
    </form>

    <div id="popup1" class="overlay">
        <div class="popup" >
            <a class="close" href="#">&times;</a>
            <div class="content">
                @foreach($results as $result)
                    @if($result->id === 3)
                        <h5>{{ $result->result_explanation_uz }}</h5>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
