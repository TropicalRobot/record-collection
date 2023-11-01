@extends('layouts.app')

@section('content')
<div class="container">
    <h1>An error occurred while fetching weather data:</h1>
    <p>{{ $error }}</p>
</div>
@endsection
