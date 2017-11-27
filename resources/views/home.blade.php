@extends('layouts.app')

@section('content')
<ul id="page-nav">
    <li>
        <a href="#" title="">
            <i class="fa fa-circle"></i>
        </a>
    </li>
    <li>
        <a href="#" title="">
            <i class="fa fa-circle-o"></i>
        </a>
    </li>
    <li>
        <a href="#" title="">
            <i class="fa fa-circle-o"></i>
        </a>
    </li>
    <li>
        <a href="#" title="">
            <i class="fa fa-circle-o"></i>
        </a>
    </li>
</ul>
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1 class="text-white"><span class="text-green">Approved</span> iPhone Unlocking Service</h1>
                <p class="text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <a href="#" class="btn btn-primary">Unlock iPhone <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <a href="#" class="hero-anchor">More</a>
</section>

@include('shared.usp')
@include('shared.testimonials')
@endsection
