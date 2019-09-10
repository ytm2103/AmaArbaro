@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a href="#profile" class="nav-link active" data-toggle="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                          <a href="#history" class="nav-link" data-toggle="tab">History</a>
                        </li>
                      </ul>
                    
                      <div class="tab-content">
                        <div id="profile" class="tab-pane active">
                            <div class="m-4 p-4 border border-primary">
                                <p>Name: <input type="text" value="{{ $user->name }}"></p>
                                <p>E-mail: <input type="text" value="{{ $user->email }}"></p>
                                <p>Name: {{ $user->name }}</p>
                                <p>E-mail: {{ $user->email }}</p>
                                <p>Password: </p>
                                <p>Delete</p>
                            </div>
                        </div>
                        <div id="history" class="tab-pane">
                            @foreach ($donations as $donation)
                            <div class="m-4 p-4 border border-primary">
                                <p>No. {{ $donation->id }}</p>
                                <p>Date : {{ $donation->created_at }}</p>
                                <p>Amount : ${{ $donation->amount }}</p>
                            </div>
                            @endforeach
                        </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
