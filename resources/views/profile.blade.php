@extends('layouts.layout')

@section('title', 'Dashboard')




@section('content')
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            @Auth
            <img src=" " alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">

                <h5 class="card-title">{{Auth()->user()->name}}</h5>

                <p class="card-text">
                    Email : {{Auth()->user()->email}}
                </p>
                <p class="card-text">
                    Alamat : {{Auth()->user()->alamat}}
                </p>
                @endauth
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
@endsection