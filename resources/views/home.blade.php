@extends('layouts.main')

@section('content')
{{-- SEZIONE LUNGHE --}}
@include('partials.cards' , ['cards' => $lunghe , 'title' => 'LE LUNGHE'])
{{-- SEZIONE CORTE --}}
@include('partials.cards' , ['cards' => $corte , 'title' => 'LE CORTE'])
{{-- SEZIONE CORTISSIME --}}
@include('partials.cards' , ['cards' => $cortissime , 'title' => 'LE CORTISSIME'])
@endsection
