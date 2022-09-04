@extends('quiz.layouts.main')

@section('content')

    <form action="{{ route('man.head.dizziness.quiz.5.store') }}" method="POST">
        @csrf
        <div id="buy-tickets" class="section-with-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    @foreach($questions as $question)
                        @if( $question->id === 35)
                            <h3>{{ $question->question_explanation_uz }}</h3>
                        @endif
                    @endforeach
                </div>
                <a style="width:50%" class="button btn btn-lg btn-outline-success" href="#popup1">Ha</a>
                <a style="width:50%" class="button btn btn-lg btn-outline-danger float-right" href="#popup2">Yoq</a>
            </div>
    </form>

    <div id="popup1" class="overlay">
        <div class="popup" >
            <a class="close" href="#">&times;</a>
            <div class="content">
                @foreach($results as $result)
                    @if($result->id === 35)
                        <h5>{{ $result->result_explanation_uz }}</h5>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div id="popup2" class="overlay">
        <div class="popup" >
            <a class="close" href="#">&times;</a>
            <div class="content">
                @foreach($results as $result)
                    @if($result->id === 404)
                        <h5>{{ $result->result_explanation_uz }}</h5>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
