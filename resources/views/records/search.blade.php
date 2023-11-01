@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <div class="d-flex flex-wrap">
            <form action="{{ route('records-search') }}" method="get">
                <input type="text" name="q" value="">
            </form>
        </div>
    </div>

    @if($recordsData)
        <div class="d-flex flex-wrap">
        @foreach ($recordsData['results'] as $result)
            <div class="book-container">
                <div class="page">
                    <a href="{{ '/records/'.$result['master_id'] }}" target="_self"></a>
                    <img src="{{ $result['thumb'] }}"/>
                </div>
            </div>
        @endforeach
        </div>
    @endif
</div>
@endsection
