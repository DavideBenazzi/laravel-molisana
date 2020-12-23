@extends('layouts.main')

@section('content')

    <section class="product-detail">
        <div class="hero container">
            <h1>{{ $product['titolo'] }}</h1>
            
            <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
            
            <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
            
            <div class="description">
                <p>{!! $product['descrizione'] !!}</p>
            </div>

            <div class="navigation-product">
                @if ($id > 0)
                <a href="{{ route ('product' , $id - 1) }}">&lt PREV</a>
                @endif
                
                @if ($id < $length)
                <a href="{{ route ('product' , $id + 1) }}">NEXT &gt</a>
                @endif
            </div>

        </div>
    </section>

@endsection
