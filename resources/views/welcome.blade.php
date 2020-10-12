@extends('layouts.app')


@section('content')

<section class="herosection">
    <div class="intro">
        <h1 class="text-center"> I M NOAH. I M PHOTOGRAPHER </h1>
        <button class="vp">View Portfolio</button>

<section>
    <div class="container">
        <h1 class="pt-5 pb-3 mb-5 text-center AboutMeHeading">ABOUT ME</h1>
    </div>
    <div class="container py-4 px-5 AboutMeContent">
        <h1 class="pb-1">Hi, I'm Noah Passionate Photographer</h1>
        <h5 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

    </div>
</section>


<section>

    <div class="row">
        <div class="col-sm-6 ">
            <div class="p-5  container">
                    <div class="cards  d-inline-flex p-2  text-white ">
                        <img src="frontend\img\target.png" alt=""></img>
                        <h1 class="card-text">50+ Clients</h1>
                    </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="p-5 container">
                    <div class=" cards1  d-inline-flex p-2  text-white">
                        <img src="frontend\img\wedding-rings.png" alt=""></img>
                        <h1 class="card-text">Wedding Photoshoot</h1>
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 ">
            <div class="p-5 container">
                    <div class="cards  d-inline-flex p-2  text-white ">
                        <img src="frontend\img\photography.png" alt=""></img>
                        <h1 class="card-text">Professional Photoshoots</h1>
                    </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="p-5 container">
                    <div class=" cards1 d-inline-flex p-2  text-white">
                        <img src="frontend\img\instagram.png" alt=""></img>
                        <h1 class="card-text">50k+ Insta Followers</h1>
                    </div>
            </div>
        </div>
    </div>

</section>


@endsection
