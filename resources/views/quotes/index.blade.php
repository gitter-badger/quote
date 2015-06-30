@extends('app')

@section('content')

    <h1>Quotes</h1>
    <hr/>

    @foreach($quotes as $quote)
        <article>
            <h2>
                <a href="{{ action('QuotesController@show', [$quote->id]) }}">{{ $quote->title }}</a>
            </h2>
            <p class="published-at" style="font-size: 10px">{{ $quote->published_at->diffForHumans() }}</p>
            <section class="body" style="font-size: 20px">{{ $quote->body }}</section>
        </article>
    @endforeach

@stop