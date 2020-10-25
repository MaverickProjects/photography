@extends('layouts.app')


@section('content')

<section class="herosection">
    <div class="intro text-center">
        <h1 class=""> I M NOAH. I M PHOTOGRAPHER </h1>
        <button class="vp">View Portfolio</button>
    </div>
</section>

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
<div class="container">
    <div class="row">
        @foreach ($cards as $card)
        <div class=" col-lg-6 col-md-12 col-sm-12">
            <div class="p-5 ">
                    <div class="cards  p-2  text-white ">
                        <img src="storage/{{$card->cardimg}}" alt="">
                        <h1 class="card-text">{{$card->title}}</h1>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
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
        @foreach ($portfolios as $portfolio)
        <div class=" col-md-12 col-lg-6 ">
            <div class="MyWorkCards">
            <img src="storage/{{$portfolio->image}}" alt="">
            <h3 class="text-center">Portfolio detail</h3>
            </div>
    </div>
        @endforeach
    </div>

    <div class="MyWorkButton pt-5 pb-5">
        <button class="button">View More</button>
    </div>

</section>

<!-- Testimonial Slick Slider Section -->
<section class="TestimonialSection">

    <div class="container TestimonialHeading">
        <h1 class="pt-5 pb-3 mb-5 text-center MyWorkHeading">People Review</h1>
    </div>
    <div class="container-fluid">
        <div class="slickSlider col-lg-6 col-sm-8 col-xs-8 text-center mx-auto">
            <div class="slide">
                <h1>John Doe</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="slide">
                <h1>Jason Mason</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="slide">
                <h1>Papu Mastan</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="slide">
                <h1>Appu Khote</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="slide">
                <h1>Chikna Mastan</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="container">
        <h1 class="pt-5 pb-3 mb-5 text-center ContactUsHeading">Contact Us</h1>

        <form action="/action_page.php">
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <div class="MyWorkButton contactUsButton">
        <button class="button" type="submit">Submit</button>
    </div>

        </form>
    </div>

</section>




@endsection
