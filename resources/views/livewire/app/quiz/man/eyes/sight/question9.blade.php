<div wire:init="deferLoad" class="container container-quiz mt-sm-5 my-1">
    <div class="question ml-sm-5 pl-sm-5 pt-2 animate-quiz">
        @foreach($question as $current_question)
            <div class="py-2 h5 align-content-center"><b>{{ $current_question->question_explanation_uz }}</b></div>
        @endforeach
        <div class="d-flex align-items-center pt-3 justify-content-evenly">
            <div class="ml-auto mr-sm-5">
                <button wire:loading.remove wire:click="$set('question9', true)" class="btn btn-outline-success">Ha</button>
                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal404">Yoq</button>
                <div wire:loading wire:target="$set, deferLoad">
                    <div class="spinner-border text-primary m-auto">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        @if($question9 === true)
            <livewire:app.quiz.man.eyes.sight.question10 />
        @endif
    </div>
    <livewire:app.quiz.answers.modal404 />
</div>
