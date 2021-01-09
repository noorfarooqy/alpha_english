@extends('layouts.app')

@section('pageTitle')
PPTs
@endsection

@section('breadcrumb-link')

@endsection

@section('content')
@foreach ($ppts as $key=> $ppt)
<div class="col-lg-4">
    <div class="card">
        <div class="shopping-card">
            <img class="img-responsive" src="/assets/demo/ppts/images/{{$ppt}}.png" alt="">
        </div>
        <div class="shopping-card-text text-center">
            <h4>{{ucfirst(str_replace('_', ' ', $ppt))}}</h4>
        </div>
        <div class="text-center ">
            {{-- <span class="p-10 color-danger f-w-400">$150</span> --}}
            <a href="/demo/ppt/{{$ppt}}/fetch" class="btn btn-danger bg-danger btn-outline">View PPT</a>
        </div>
    </div>
</div>
@endforeach
@endsection
