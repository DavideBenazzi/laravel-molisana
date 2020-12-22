@extends('layouts.main')

@section('content')


<h2>LUNGHE</h2>
<div class="cards">
        @foreach ($lunghe as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>
            </div>
        @endforeach
    </div>
    
    <h2>CORTE</h2>
    <div class="cards">
        @foreach ($corte as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>
            </div>
        @endforeach
    </div>
   
    <h2>CORTISSIME</h2>  
    <div class="cards">
        @foreach ($cortissime as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>
            </div>
        @endforeach
    </div>

@endsection
