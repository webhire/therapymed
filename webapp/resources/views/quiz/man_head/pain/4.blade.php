@extends('quiz.layouts.main')

@section('content')

    <form action="{{ route('man.head.dizziness.quiz.4.store') }}" method="POST">
        @csrf
        <div id="buy-tickets" class="section-with-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    @foreach($questions as $question)
                        @if( $question->id === 24)
                            <h3>{{ $question->question_explanation_uz }}</h3>
                        @endif
                    @endforeach
                </div>
                <button style="width:50%" type="submit" class="btn btn-lg btn-outline-success" name="answer" value="1" >Ha</button>
                <a style="width:50%" class="button btn btn-lg btn-outline-danger float-right" href="#popup1">Yoq</a>
            </div>
    </form>

    <div id="popup1" class="overlay">
        <div class="popup" >
            <a class="close" href="#">&times;</a>
            <div class="content">
                @foreach($results as $result)
                    @if($result->id === 26)
                        <h5>{{ $result->result_explanation_uz }}</h5>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
