

@extends('layout.layout')

@section('content')

<div class="container text-center" style="margin-top:100px;margin-bottom:100px">
    
        <img src='<?php image("bg.jpg"); ?>' width="300px" class="img-fluid radius-10 shadow" alt="">
        <h4 class="text-white mt-3 mb-3">Buy Here What You Want !</h4>
        <div class="row justify-content-center">
        <a class="btn btn-light ml-2" href="/home">Home</a>
        <a class="btn btn-light ml-2" href="/login">login</a>
        <a class="btn btn-light ml-2" href="/shopper">Shopper</a>

        </div>
 
</div>


@endsection

