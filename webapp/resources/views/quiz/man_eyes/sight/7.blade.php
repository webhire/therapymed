@extends('quiz.layouts.main')

@section('content')

    <form action="{{ route('man.eyes.sight.quiz.7.store') }}" method="POST">
        @csrf
        <div id="buy-tickets" class="section-with-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header align-content-center">
                    @foreach($questions as $question)
                        @if( $question->id === 17)
                            <h3>{{ $question->question_explanation_uz }}</h3>
                        @endif
                    @endforeach
                </div>
                <button style="width:50%" type="submit" class="btn btn-lg btn-outline-success" name="answer" value="1" >Ha</button>
                <button style="width:50%" type="submit" class="btn btn-lg btn-outline-danger float-right" name="answer" value="0" >Yoq</button>
            </div>
    </form>

@endsection
