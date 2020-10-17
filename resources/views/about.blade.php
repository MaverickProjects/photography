@extends('layouts.app')




@section('content')


<section class="herosectionabout">
    <div class="intro">
        <h1 class="text-center"> About Me</h1>
    </div>
</section>

<section>
    <div class="container aboutme">
        <div class="row ">
            <div class="col-4">
                <h1 class="pt-5 pb-3 mb-5 text-center AboutMeHeadingAbout">ABOUT ME</h1>
            </div>
            <div class="col-8  py-4 px-5 AboutMeContentAbout">
                <h5 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
            </div>
        </div>

    </div>
</section>
<section>
    <div class="howitstarted">
        <div class="row">
            <div class="col-lg-6 ">
                <img src="frontend\img\p1.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="box boxx arrow-bottom text-center">
                    <h1>How it Started</h1>
                </div>
                <h5 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
            </div>
        </div>

    </div>
</section>


<section>
    <div class="container photogalleryy">
        <h1 class="pt-5 pb-3 mb-5 text-center AboutMeHeading">Photo Gallery</h1>
    </div>


    <div class="container-fluid photogallery row ">
        <div class="col-sm-4"><img src="frontend\img\p1.jpg" alt=""></div>
        <div class="col-sm-4"><img src="frontend\img\p2.jpg" alt=""></div>
        <div class="col-sm-4"><img src="frontend\img\p3.jpg" alt=""></div>
    </div>
    <div class="container-fluid photogallery row ">
        <div class="col-sm-4"><img src="frontend\img\p4.jpg" alt=""></div>
        <div class="col-sm-4"><img src="frontend\img\p5.jpg" alt=""></div>
        <div class="col-sm-4"><img src="frontend\img\p6.jpg" alt=""></div>
    </div>
    <div class="container-fluid photogallery row ">
        <div class="col-sm-4"><img src="frontend\img\s3.jpg" alt=""></div>
        <div class="col-sm-4"><img src="frontend\img\s1.jpg" alt=""></div>
        <div class="col-sm-4"><img src="frontend\img\s2.jpg" alt=""></div>
    </div>
</section>



<section>
    <div class="somethingsimilar">
        <img src="frontend\img\s2.jpg" alt="">
        <div class="centered">
            <h1 class="text-center">Want something similar?</h1>
            <button class="vs">Contact Me</button>
        </div>
    </div>
</section>



@endsection
