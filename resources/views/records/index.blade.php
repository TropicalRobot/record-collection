@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-wrap">
        @foreach ($recordsData['releases'] as $result)
            <div class="book-container">
                <div class="page">
                    <a href="{{ '/records/'.$result['id'] }}" target="_self"></a>
                    <img src="{{ $result['thumb'] }}"/>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
