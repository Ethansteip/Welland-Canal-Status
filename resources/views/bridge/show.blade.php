@extends('layouts.main')

@section('title', 'Welland Canal System')

@section('content')


    <div>
        <h1 class='text-dark display-4 text-center mt-md-4'>{{ $bridge->location }}</h1>
        <hr>
    </div>
    <div>
        <h1 class='text-dark display-5 text-center mt-md-4'>{{ $bridge->name }}</h1>
    </div>
    <br>
    <div class='container'>
        <div class='row'>
            <div class='col-4'>
                <div class="card shadow bg-light">
                    <div class="card-body">
                    <h3 class="card-title text-center text-secondary">Current Status</h3>
                    <h4 class="card-text text-secondary font-weight-bold text-center pb-md-2 text-success">{{ $bridge->status->last()->status }}</h4>
                    </div>
                </div>
            </div>
            <div class='col-4'>
                <div class="card shadow bg-light">
                    <div class="card-body">
                    <h3 class="card-title text-center text-secondary">Last Raised</h3>
                    <h4 class="card-text text-secondary font-weight-bold text-center pb-md-2">{{ $bridge->history }}</h4>
                    </div>
                </div>
            </div>
            <div class='container'>
                <div class='row'>
                    <div class='col'>
                        <h4>
                           {{ $duration }}
                        </h4>

                    </div>
                    <div class="container">
                        <table class='table'>
                            <tbody
                        @foreach ($bridgeStatus as $status)
                            <TR>
                                <td>
                                {{ $status->id }}
                                </td>
                                <td>
                                    {{ $status->status }}
                                </td>
                                <td>
                                    {{ $status->created_at }}
                                </td>
                            </TR>
                        @endforeach
                        </tbody>
                        
                        </table>
                        {{ $bridgeStatus->links() }}
                    </div>
                    
                </div>
            </div>

    </div>

@endsection