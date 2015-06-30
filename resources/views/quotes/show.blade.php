@extends('app')

@section('content')

    <h1>{{ $quote->title }}</h1>
    <hr/>

    <article>
        {{ $quote->body }}
    </article>

@stop