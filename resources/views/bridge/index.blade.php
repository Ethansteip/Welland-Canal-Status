@extends('layouts.main')

@section('title', 'Welland Canal System')

@section('content')
    <header class="title">
        <h1>Welland Canal Bridge Status</h1>
    </header>

    <div class="wrapper">
        @foreach($bridges as $bridge)
            @include('bridge.partials.bridge', compact('bridge'))
        @endforeach
    </div>
@endsection
