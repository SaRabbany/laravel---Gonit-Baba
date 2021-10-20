@extends('includes.app')
@section('content')




<h1>All Question Titles</h1>
@foreach ($allQuestions as $question)
    {{ $question->title }}
@endforeach

@endsection