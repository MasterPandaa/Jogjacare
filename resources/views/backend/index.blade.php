@extends('backend.layouts.app')

@section('title') @lang("Dashboard") @endsection

@section('breadcrumbs')
<x-backend.breadcrumbs />
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="background-image: url('{{ asset('img/Wallpaper/wallpaperkeraton.jpg') }}'); background-size: cover; height: 474px; opacity: 0.9;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection