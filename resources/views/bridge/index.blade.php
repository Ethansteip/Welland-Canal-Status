@extends('layouts.main')

@section('title', 'Welland Canal System')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col'>
                <div class='row'>

                    @foreach($bridges as $bridge)
                        @include('bridge.partials.bridge', compact('bridge'))
                    @endforeach
                </div>
            </div>
         </div>
    </div>
    
    
@endsection
