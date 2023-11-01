@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-wrap">
        @if ($recordData)
            <div class="book-container">
                <div class="page">
                    <a href="{{ $recordData['resource_url'] }}" target="_blank"></a>
                    <img src="{{ $recordData['images'][0]['uri'] }}"/>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
