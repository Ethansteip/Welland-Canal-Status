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
                    <h4 class="card-text text-dark font-weight-bold text-center pb-md-2">{{ $bridge->history }}</h4>
                    </div>
                </div>
            </div>
            <div class='col-4'>
                <div class="card shadow bg-light">
                    <div class="card-body">
                    <h3 class="card-title text-center text-secondary">Average Raise Duration</h3>
                    <h4 class="card-text text-dark font-weight-bold text-center pb-md-2">{{ $duration }} Minutes</h4>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                    <div class='row justify-content-center'>
                        <div class='col-center'>
                            <table class='table'>
                                <tbody
                                    <tr>
                                        <th class='text-center'>Status ID</th>
                                        <th class='text-center'>Bridge Status</th>
                                        <th class='text-center'>Date/Time</th>
                                    </tr>
                                    @foreach ($bridgeStatus as $status)
                                        <tr>
                                            <td class='text-center'>{{ $status->id }}</td>
                                            <td class='text-center'>{{ $status->status }}</td>
                                            <td class='text-center'>{{ $status->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            
                            </table>

                            <br>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col'>
                                            <ul class="pagination pagination-lg">
                                            {{ $bridgeStatus->links(("pagination::bootstrap-4")) }}
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
</div>

@endsection