@extends('layout.temp_mediation') 
@section('title','Epicentrum - Mediation') 
@section('content') 
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title">Mediation</h1>
			<h2></h2>
		</div>
    </div>
</div>
</section>
<section class="d-flex align-items-center justify-content-center" id="overlay">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-10 col-lg-10">
			<div class="">
			<p class="desc_comp_b">&emsp;&emsp; <b> Mediation (Media in Action) </b> adalah salah satu mata lomba Epicentrum Unpad dari Prodi Manajemen Produksi Media."</b></p>
			<p class="desc_comp_b">&emsp;&emsp; Pada Mediation 2022, sub-tema yang digunakan adalah "Aksesibilitas Informasi Media terhadap Limbah Medis Rumah Tangga" dengan mengangkat konsep Production House yang mempunyai tiga output lomba yaitu videografi, audio, dan poster digital. Melalui sub-tema tersebut, Mediation 2022 berharap, dapat meningkatkan kesadaran masyarakat akan pentingnya pengelolaan limbah medis rumah tangga saat ini.</p>
			</div>
		</div>
    </div>
</div>
</section>

<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div style="background: white; border-radius: 100%;">
					<img src="{{ url('assets/img/Mediation.png')}}" class="card-img-top" alt="...">
				</div>
			</div>
	</div>
</div>
</section>

<section class="d-flex align-items-center justify-content-center teas">
	<div class="container pr-ex-center" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-6 col-lg-6">
				<h1 class="comp_title">Teaser</h1>
			</div>
			<div class="col-xl-6 col-lg-6">
				<h1 class="comp_title">More About Us</h1>
			</div>
			<div class="col-xl-6 col-lg-6">
				<iframe style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 360px;" src="https://www.youtube.com/embed/ilmkMPywVEQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>
			</div>
			<div class="col-xl-6 col-lg-6">
				<iframe style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 360px;" src="https://www.youtube.com/embed/VypFFsIOkl8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>
			</div>
		</div>
</section>

<!-- Awal Button -->
<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
	<div class="row">
	<div>
				<h1 class="comp_title">The Competition</h1>
			</div>
				</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/Theme_Desc.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">Theme Description</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('mediation_theme') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/Registration.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">Registration Competition</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('mediation_registration') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/FAQ_and_TRIVIA.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">FAQ & Trivia</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('mediation_faqtrivia') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
	</div>
</div>
</section>
 <!-- Akhir Button -->

<!--AWAL TALKSHOW-->
<section class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title">Our Talkshow</h1>
		</div>
    </div>
</div>

</section>

@if (empty($talkshow))
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-12 col-lg-12">
			<p class="coming_soon"><b>Coming Soon</b></p>
		</div>
    </div>
</div>
</section>
@else
<!-- coming soon POSTER -->
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<img src="{{ $talkshow->picture }}" class="img-fluid" >
		</div>
    </div>
</div>
</section>
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-10 col-lg-8">
			<p class="desc_comp">&emsp;&emsp; {{ $talkshow->description }}</p>
		</div>
    </div>
</div>
</section>
@endif

<!-- Section Judges -->
<section class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title_li">Judges</h1>
		</div>
    </div>
</div>
</section>
</section>

@if (count($judges) == 0)
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-12 col-lg-12">
			<p class="coming_soon"><b>Coming Soon</b></p>
		</div>
    </div>
</div>
</section>
@else
<!-- list judges -->
<section class="judges">
	<div class="container">
		<div class="judges-section">
			<div class="row mt-3 justify-content-center">
			@foreach ($judges as $item)
				<div class="col-md-3 col-sm-4 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
					<div class="mt-3">
						<img src="{{ $item->picture }}" class="pic-judges">
						<div class="judges-name">
							{{ $item->name }}
						</div>
						<div class="judges-occ">
							{{ $item->occupation }}
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</section>
@endif
<!-- Akhir Section Judges -->

<!-- list finalist -->
<section class="d-flex align-items-center justify-content-center cont">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title_li">Our Finalist</h1>
		</div>
    </div>
</div>
</section>

@if (count($finalists) == 0)

</section>
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-12 col-lg-12">
			<p class="coming_soon"><b>Coming Soon</b></p>
		</div>
    </div>
</div>
</section>

@else

<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up" data-aos-delay="150">
	<div class="row justify-content-center text-center">
		@foreach ($finalists as $item)
			<div class="col-xl-4 col-sm-6 mb-5">
			    <div class="contact_person rounded shadow-sm py-5 px-4">
			        <h5 class="mb-0">{{ $item->title }}</h5><span class="small text-uppercase text-muted text-center">{{ $item->subtitle }}</span>
			            <ul class="social mb-0 list-inline mt-3">
			                <li class="list-inline-item"><a href="http://line.me/ti/p/~{{ $item->line_id }}" class="social-link"><i class="fa-2x fab fa-line"></i></a></li>
			                <li class="list-inline-item"><a href="mailto:{{ $item-> email}}" class="social-link"><i class="fa-2x fas fa-envelope"></i></a></li>
			            </ul>
			    </div>
			</div>
		@endforeach
	</div>
</div>
</section>

@endif
<!-- Akhir Section finalist -->
@endsection