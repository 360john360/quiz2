@extends('layouts.main')

@section('content')
<div class="container mt-4">


@foreach($questions as $question)

     <div class="mt-4" id="question1">
            <h4>{{$question->question}}</h4>
                        <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                {{$question->answer1}}
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                {{$question->answer2}}
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                {{$question->answer4}}
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                {{$question->answer5}}
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                {{$question->answer6}} 
            </label>
    </div>
    @endforeach
</div>


@endsection
