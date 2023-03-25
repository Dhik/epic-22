@extends('layout.temp')
@section('title','Epicentrum - Pre Event')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center ">
	<div class="container" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-7 col-lg-8 col">
				<h1 class="comp_title">Pre Event</h1>
			</div>
		</div>
	</div>
</section>

<section class="d-flex align-items-center justify-content-center">
	<div class="container" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-7 col-lg-8">
				<img src="{{ url('assets/img/pre_event_poster.png')}}" class="img-fluid img_event" style="">
			</div>
		</div>
	</div>
</section>

<section id="hero" class="d-flex align-items-center justify-content-center" style="position: relative;
        display: none; 
        width: 90%; 
        height: 100%; 
        background-color: rgb(255, 255, 255); 
        z-index: 2; 
        margin: auto;
        border-radius: 90px;">
	<div class="container" style="padding-top:0px !important;" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-10 col-lg-8">
				<p class="theme-title">Epicentrum 2022 dan Upaya Mahasiswa dalam Pemecahan Masalah Iklim</p>
				<p class="desc_comp">&emsp;&emsp; Sabtu, 2 April 2022 – Epicentrum Fakultas Ilmu Komunikasi Universitas Padjadjaran telah melaksanakan rangkaian pre-event Epicentrum 2022, yaitu Webinar dan Takshow berjudul “Facing Climate Change in the Post-pandemic Era through Pentahelix Collaboration”. Tahun ini, Epicentrum mengangkat tema “Earthmergency Call: Action Against Climate Disruption” yang diharapkan dapat menjadi wadah mahasiswa untuk melaksanakan perannya sebagai agent of change dalam memecahkan permasalahan krisis iklim global melalui sudut pandang komunikasi.</p>
				<p class="desc_comp">&emsp;&emsp; Webinar dan Talkshow Epicentrum 2022 menghadirkan empat pembicara yang masing-masing mewakili konsep pentahelix ABCGM (Academician, Business, Community, Government, Media). Sesi pertama, yaitu sesi webinar, menghadirkan Novia Widyaningtyas, S.Hut., M.Sc selaku Plt.Sekretaris Direktorat PPI Kementerian Lingkungan Hidup dan Kehutanan Republik Indonesia dan Beni Suryadi selaku Manager of Power, Fossil Fuel, Alternative Energy and Storage ASEAN Climate Change and Energy. Selanjutnya, sesi talkshow diisi oleh Velyasha Siregar selaku Brand Manager, Brand Activation Division Somethinc dan Irvan Imamsyah selaku Supervising Assignment Editor CNN Indonesia TV.</p>
				<p class="desc_comp">&emsp;&emsp; Dengan mengangkat kolaborasi pentahelix dalam permasalahan iklim, kegiatan Webinar dan Talkshow Epicentrum 2022 diharapkan dapat memecahkan masalah mengenai krisis iklim yang terjadi. Total peserta pada rangkaian kegiatan ini adalah 400 peserta.</p>
				<p class="desc_comp">&emsp;&emsp; Kegiatan Webinar dan Talkshow Epicentrum 2022 “Facing Climate Change in the Post-pandemic Era through Pentahelix Collaboration” tidak dapat berjalan dengan baik tanpa kerja keras dari seluruh panitia dan kerjasama dengan sponsor, yaitu PLN, By.U, Ajaib, Webapps, PT Petrokimia Gresik, dan Somethinc. Epicentrum 2022 juga bekerja sama dengan media partner seperti Detik.com, Hipwee, Pikiran Rakyat, TRANS 7, Radio Citra Mega Swara Bogor, AIESEC in Bandung, AIESEC in Unpad, OpportuNest, dan International Office Unpad serta partnership dengan Kementerian Lingkungan Hidup dan Kehutanan Republik Indonesia, ASEAN Centre for Energy (ACE), dan CNN Indonesia.</p>
			</div>
		</div>
	</div>
</section>


<section id="hero" class="d-flex align-items-center justify-content-center cont">
	<div class="container" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-7 col-lg-8">
				<h1 class="comp_title_li">Narahubung</h1>
			</div>
		</div>
	</div>
</section>

<section class="d-flex align-items-center justify-content-center">
	<div class="container" data-aos="fade-up" data-aos-delay="150">
		<div class="row justify-content-center text-center">
			<div class="col-xl-4 col-sm-6 mb-5">
				<div class="contact_person rounded shadow-sm py-5 px-4">
					<h5 class="mb-0">Farah Nabila Savina</h5>
					<span class="small text-muted text-center">Vice Head of External Relations Epicentrum 2022</span></br></br>
					<span class="small text-uppercase text-muted text-center">081317794477</span>

					<ul class="social mb-0 list-inline mt-3">
						<li class="list-inline-item"><a href="mailto:farah20004@mail.unpad.ac.id" class="social-link"><i class="fa-2x fas fa-envelope"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="column">
				<img src="{{ url('assets/img/pre_event_docum.png')}}" style="width:100%">
				<img src="{{ url('assets/img/pre_event_docum1.png')}}" style="width:100%">
				<img src="{{ url('assets/img/pre_event_docum2.jpg')}}" style="width:100%">
			</div>
			<div class="column">
				<img src="{{ url('assets/img/pre_event_docum3.png')}}" style="width:100%">
				<img src="{{ url('assets/img/pre_event_docum4.png')}}" style="width:100%">
				<img src="{{ url('assets/img/pre_event_docum5.jpg')}}" style="width:100%">
			</div>
		</div>
	</div>
</section>
@endsection