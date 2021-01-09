@extends('layouts.app')

@section('pageTitle')
Exercise
@endsection

@section('breadcrumb-link')

@endsection

@section('content')
@foreach ($exercises as $key=> $exercise)
<div class="col-lg-4">
    <div class="card">
        <div class="shopping-card">
            <img class="img-responsive" src="/assets/demo/exercise/images/{{$exercise}}.png" alt="">
        </div>
        <div class="shopping-card-text text-center">
            <h4>{{ucfirst(str_replace('_', ' ', $exercise))}}</h4>
        </div>
        <div class="text-center ">
            {{-- <span class="p-10 color-danger f-w-400">$150</span> --}}
            <a href="/demo/fetch/exercise?exercise={{$exercise}}" class="btn btn-danger bg-danger btn-outline">View Exercise</a>
        </div>
    </div>
</div>
@endforeach
@endsection
