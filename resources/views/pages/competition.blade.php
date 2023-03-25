@extends('layout.temp_comp') 
@section('title','Epicentrum - Competition') 
@section('content') 
<!-- ======= Hero Section ======= -->
<section id="hero" class="oc">
<div class="container-fluid">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title">Our Competition</h1>
		</div>
    </div>
</div>
</section>

<section class="card_our_competition">
<div class="card-de" data-aos="fade-up" data-aos-delay="150">
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('remind') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/Remind.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">Research Mindedness</h3></br>
  </div>
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('ideation') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/ide.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">Ideation</h3></br>
  </div>
</div>
</section>
<section class="card_our_competition">
<div class="card-de" data-aos="fade-up" data-aos-delay="150">
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('tav') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/Commoviecator.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">Commoviecator</h3></br>
  </div>
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('mediation') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/Mediation.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">Mediation</h3></br>
  </div>
</div>
</section>
<section class="card_our_competition">
<div class="card-de" data-aos="fade-up" data-aos-delay="150">
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('liblicious') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/lib.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">Liblicious</h3></br>
  </div>
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('parjur') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/Parjur.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">Parade Jurnalistik</h3></br>
  </div>
</div>
</section>
<section class="card_our_competition center" class="card-de" data-aos="fade-up" data-aos-delay="150">
<div class="card bg-tran" style="width: 34rem; border:none;">
    <a href="{{ route('pprf') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/PPRF.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">PR Fair</h3></br>
  </div>
</section>


<section id="hero" class="d-flex align-items-center justify-content-center cont">
			<div class="container pr-ex-center" data-aos="fade-up">
				<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
					<div class="col-xl-6 col-lg-8">
						<h1 class="comp_title_li">Contact Us</h1>
					</div>
					<div>
						<div class="row mt-5">
							<div class="col-lg-4">
								<form action="{{ route('contact.send') }}" method="post" role="form">
									{{ csrf_field() }}
									<div>
										<div class="address">
											<h3>Enter Your Name</h3>
											<input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
										</div>
										<div class="email">
											<h3>Enter Your Email*</h3>
											<input type="email" name="email" class="form-control" id="name" value="{{ old('email') }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>

											@if($errors->has('email'))
                                			    <div class="text-danger">
                                			        {{ $errors->first('email')}}
                                			    </div>
                                			@endif
										</div>
										<div class="phone">
											<h3>Enter Your Subject</h3>
											<input type="text" name="subject" class="form-control" id="name" value="{{ old('subject') }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
										</div>
									</div>
								</div>
								<div class="col-lg-8 mt-5 mt-lg-0">
									<div class="phone">
										<h3>Enter Your Message</h3>
										<textarea class="form-control" name="message" rows="7" data-rule="required" data-msg="Please write something for us">{{ old('message') }}</textarea>
									</div>
									<button style="margin-top:10px;" type="submit" class="btn subm">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				</section>
@endsection