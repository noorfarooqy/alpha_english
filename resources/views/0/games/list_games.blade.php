@extends('layouts.app')

@section('pageTitle')
Games
@endsection

@section('breadcrumb-link')

@endsection

@section('content')
@foreach ($games as $key=> $game)
<div class="col-lg-4">
    <div class="card">
        <div class="shopping-card">
            <img class="img-responsive" src="/assets/demo/games/images/{{$game}}.png" alt="">
        </div>
        <div class="shopping-card-text text-center">
            <h4>{{ucfirst(str_replace('_', ' ', $game))}}</h4>
        </div>
        <div class="text-center ">
            {{-- <span class="p-10 color-danger f-w-400">$150</span> --}}
            <a href="/demo/igame/{{$game}}/fetch" class="btn btn-danger bg-danger btn-outline">View PPT</a>
        </div>
    </div>
</div>
@endforeach
@endsection
