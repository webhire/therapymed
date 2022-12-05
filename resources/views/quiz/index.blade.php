@extends('quiz.layouts.main')

@section('content')

    <form action="{{ route('quiz.store') }}" method="POST">
        @csrf
    <div class="row justify-content-center">
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
                <button style="width:50%" type="submit" class="btn btn-success" name="answer" value="1" >Ha</button>
                <button style="width:50%" type="submit" class="btn btn-danger float-right" name="answer" value="0" >Yoq</button>
        </div>
        <!-- ./col -->
    </div>
    </form>

@endsection
