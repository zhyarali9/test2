

@extends('layout.layout')

@section('content')
<div class="container mt-4">
    <a href="/"><div class="btn btn-light back  p-2 radius-10" ><i class="fas fa-arrow-left"></i> Go to Back</div></a>
    <div class="row d-flex justify-content-center">
        @foreach($social_media as $social)
        <div class="col-md-3 home-card">
            <div class="card shadow" style="border-radius:10px">
                <img class="card-img-top" src='<?php image("sc.png"); ?>' alt="">
                <div class="card-body">
                    <h4 class="card-title text-center">{{$social['title']}}</h4>
                    <p class="card-text text-center">{{$social['income']}}</p>
                   
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- <div class="container">
    <div class="row">
        <button type="button" class="btn btn-outline-warning">{{$name}}</button>
    </div>
</div> -->

@endsection