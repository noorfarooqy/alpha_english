@extends('layouts.app')

@section('pageTitle')
Exercise
@endsection

@section('breadcrumb-link')

@endsection

@section('content')
@php
$collection = [1,2,3,4];
@endphp
@foreach ($collection as $key=> $item)
<div class="col-lg-4">
    <div class="card">
        <div class="shopping-card">
            <img class="img-responsive" src="/admin/assets/images/product.jpg" alt="">
        </div>
        <div class="shopping-card-text text-center">
            <h4>Sports Shoes</h4>
            <p>Some quick example text.</p>
        </div>
        <div class="text-center p-t-30 p-b-20">
            {{-- <span class="p-10 color-danger f-w-400">$150</span> --}}
            <button class="btn btn-danger bg-danger btn-outline">View Exercise</button>
        </div>
    </div>
</div>
@endforeach
@endsection
