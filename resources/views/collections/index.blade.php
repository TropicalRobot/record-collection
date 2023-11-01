@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-wrap">
            @foreach ($collections as $collection)
                <div class="book-container">
                    {{ $collection->title }}
                </div>
            @endforeach
        </div>
    </div>
@endsection
