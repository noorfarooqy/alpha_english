@extends('layouts.app')

@section('pageTitle')
    Dashboard
@endsection

@section('content')
    @include('dashboard.main_content')
@endsection

@section('breadcrumb-link')
    <li><a href="#">Dashboard</a></li>
                    <li class="active">Home</li>
@endsection