@extends('layouts.app')

@section('content')


<section class="main-bg">
	<div class="inner-wrap-main">
		<div class="ems-left">

			<div class="ems-logo">
                @include('layouts.logo')			
			</div>
			
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<button class="nav-link btn-custom active" id="nav-home" data-toggle="tab" data-target="#nav-home-txt" type="button"><i class="bi bi-grid"></i> Home</button>
				<button class="nav-link btn-custom" id="nav-help" data-toggle="tab" data-target="#nav-help-txt" type="button"><i class="bi bi-bar-chart"></i> Help</button>
				<button class="nav-link btn-custom" id="nav-disclaimer" data-toggle="tab" data-target="#nav-disclaimer-txt" type="button"><i class="bi bi-chat"></i> Disclaimer</button>
			</div>
			<div class="ems-left-bottom mt-5">
				<div class="ems-btm-bg">
					<h3>Support 24/7</h3>
					<h4>Contacts us anytime</h4>
					<a href="#" class="btn btn-primary mt-3">start</a>
					<img src="{{ asset('images/mask-group.png') }}" />
				</div>
			</div>
		</div>
		<div class="tab-content ems-right" id="nav-tabContent">

			<div class="tab-pane fade show active" id="nav-home-txt" role="tabpanel" aria-labelledby="nav-home">
				<div class="main-title d-flex align-items-center pb-3">
					<h2>Experiments</h2>
					@include('layouts.logout')


					<!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> -->
				</div>
				<div class="home-list">
					<ul class="list-unstyled">

                    @php $count = 1; @endphp
                    @foreach($data as $value)
                        <li> <span class="num-txt"> {{ $count++ }} .</span>{{ $value['name'] }} <a href="{{ route('experiment', ['id'=> $value['id'] ])  }}" class="ml-auto"><i class="bi bi-play-fill"></i></a> </li>
                    @endforeach


					</ul>
				</div>
			</div>

			<div class="tab-pane fade" id="nav-help-txt" role="tabpanel" aria-labelledby="nav-help">
				<div class="main-tab-txt">
					<div class="main-title d-flex align-items-center pb-3">
						<h2>Instructions</h2>
						<a href="#" class="btn btn-primary ml-auto"><i class="bi bi-person"></i></a>
					</div>
					<div class="ems-box">
						<ul class="list-unstyled">
							<li class="text-white py-1">Animals are divided into two groups (6 animals in each).</li>
							<li class="text-white py-1">Administer one group with the drug to be tested and other with vehicle by oral route.</li>
							<li class="text-white py-1">Put one animal at a time in the Actophotometer.</li>
							<li class="text-white py-1">Start the instrument.</li>
							<li class="text-white py-1">Count the locomotor activity for 10 minutes.</li>
							<li class="text-white py-1">Repeat the procedure at the interval of 30 minutes.</li>
							<li class="text-white py-1">Record the observations.</li>
							<li class="text-white py-1">The mice in test group are injected Diazepam (1 Mg /kg Oral) and locomotor activity is measures twice as stated above.</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="nav-disclaimer-txt" role="tabpanel" aria-labelledby="nav-disclaimer">
				<div class="main-tab-txt">
					<div class="main-title d-flex align-items-center  pb-3">
						<h2>Observations</h2>
						<a href="#" class="btn btn-primary ml-auto"><i class="bi bi-person"></i></a>
					</div>
					<div class="ems-box">
						<p class="text-white m-0">Actophotometer has a central chamber with arrangement of light sources and photocells at the base of two opposite walls.The light of each source is focused on a photocell. Any Interruption in the path of light activates the photocells and this is counted as a measure of horizontal locomotor activity of the mice kept in the chamber.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>





@endsection
