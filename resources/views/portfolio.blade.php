@extends('layouts.app')

@section('content')

<section class="herosectionabout">
    <div class="intro">
        <h1 class="text-center"> Portfolio</h1>
    </div>
</section>


<section>
    <h1 class="pt-5 pb-3 mb-5 text-center MyWorkHeading">My Work</h1>
</div>
<div class="container py-4 px-5 MyWorkContent">
    <h1 class="pb-1 text-center">Some Of My Work That Will Blow Your Mind</h1>
</div>
<div class="container">
<div class="row">
    <div class=" col-md-12 col-lg-6 ">
            <div class="MyWorkCards">
                <img src="https://source.unsplash.com/1600x900/?nature">
            </div>
    </div>
    <div class="col-md-12 col-lg-6 ">
            <div class=" MyWorkCards">
                <img src="https://source.unsplash.com/1600x900/?sky">
            </div>
    </div>
</div>

<div class="row pt-3">
    <div class="col-md-12 col-lg-6 ">
            <div class=" MyWorkCards">
                <img src="https://source.unsplash.com/1600x900/?ice">

            </div>
    </div>
    <div class="col-md-12 col-lg-6 ">
            <div class=" MyWorkCards ">
                <img src="https://source.unsplash.com/1600x900/?race">
            </div>
    </div>
</div>

<div class="row pt-3">
    <div class="col-md-12 col-lg-6 ">
            <div class=" MyWorkCards">
                <img src="https://source.unsplash.com/1600x900/?fight">

            </div>
    </div>
    <div class="col-md-12 col-lg-6 ">
            <div class=" MyWorkCards ">
                {{-- <img src="frontend\img\p6.jpg" alt=""> --}}
                <img src="https://source.unsplash.com/1600x900/?">
            </div>
    </div>
</div>



</section>

@endsection