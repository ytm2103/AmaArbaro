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
                          <a class="nav-link active">History</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link">My profile</a>
                        </li>
                      </ul>
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
@endsection
