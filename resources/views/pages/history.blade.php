@extends('layout.temp_about')
@section('title','Epicentrum - About')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="histo">

    <div class="container-fluid">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-7 col-lg-8">
                <h1 class="comp_title">About Us</h1></br>
                <!-- <h1 class="invi">About Us</h1> -->
                <div class="desc_history">
                    <p class="desc_comp_b"> &emsp;&emsp; Epicentrum is the largest annual international-scale communication festival in Indonesia held by the Faculty of Communication Science, Universitas Padjadjaran (Fikom Unpad). This festival is a forum for the younger generation, especially students, to contribute and realize their role as agents of change in solving various problems in society through a communication point of view.</p>
                    <p class="desc_comp_b"> &emsp;&emsp; Youngsters are expected to create the best works and innovations as solutions to real problems by integrating Pentahelix, which includes ABCGM (Academician, Business, Community, Government, and Media) to achieve Epicentrum's goals. In collaboration with the seven competitions from each study program at Fikom Unpad, Epicentrum held a series of competitions, webinars, talk shows, and online workshops. All competition subjects consist of Research Mindedness, Ideation, Liblicious, Parade Jurnalistik, The 10th Padjadjaran Public Relations Fair (Public Relations Student Forum (PRSF) and OlymPRday), Tell A Vision, and Mediation. The seven competitions focus on solving national to global problems which will be linked to their respective scientific focus. This year, Public Relations Student Forum (PRSF) from The 10th Padjadjaran Public Relations Fair, Research Mindedness, Commoviecator, and Ideation can be competed internationally all around Asia.</p>
                    <p class="desc_comp_b"> &emsp;&emsp; In comparison with the previous year, Epicentrum 2022 is here to raise awareness of issues related to overcoming the global climate crisis. Epicentrum 2022 promoted one of the SDGs themes, climate action, later packaged as Earthmergency Call. This theme comes with the tagline "Action against climate disruption." To avoid the new extreme situation that could even be predicted to exceed the impact of the Covid-19 pandemic, innovative action is needed to address the global climate crisis. Therefore, this year, Epicentrum 2022 challenges Youngsters to contribute as an agent of change in solving the problem through a communication perspective.</p>
                    <p class="desc_comp_b"> &emsp;&emsp; We hope that Epicentrum can be used as an activity that can unite all departments in the Faculty of Communication Sciences in Asia to strengthen a sense of togetherness. Thus, Epicentrum is not only realized as a festival and competition, but also as a concrete manifestation of the contribution of all students and communication personnel in Asia to problems in the country.</p>
                </div>
            </div>
        </div>
        <!-- <hr style="width:50%;text-align:left;margin-left:0"> -->
    </div>
</section>
<!--Galeri Photo -->
<section>
    <h1 class="comp_title">Gallery</h1><br><br>

    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="row text-center text-lg-left">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/2.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/3.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/4.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/5.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/6.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/7.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/8.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/9.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/10.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/11.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('assets/img/gallery/12.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection