@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-wrap">
            @foreach ($items as $item)
                <div class="book-container">
                    {{ $item->title }}
                </div>
            @endforeach
        </div>
    </div>
@endsection
