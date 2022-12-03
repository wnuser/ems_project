@extends('layouts.app')

@section('content')

<section class="main-bg">
	<div class="inner-wrap-main">
		<div class="ems-left">
			<div class="ems-logo">
			@include('layouts.logo')
			</div>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<button class="nav-link btn-custom active" id="nav-introduction" data-toggle="tab" data-target="#nav-introduction-txt" type="button"><i class="bi bi-grid"></i> Introduction</button>
				<button class="nav-link btn-custom" id="nav-instructions" data-toggle="tab" data-target="#nav-instructions-txt" type="button"><i class="bi bi-bar-chart"></i> Instructions</button>
				<button class="nav-link btn-custom" onclick="playVideoFunction()" id="nav-experiment" data-toggle="tab" data-target="#nav-experiment-txt" type="button"><i class="bi bi-chat"></i> Experiment</button>
				<button class="nav-link btn-custom" id="nav-observations" data-toggle="tab" data-target="#nav-observations-txt" type="button"><i class="bi bi-gear"></i> Observations</button>
			</div>
			<div class="ems-left-bottom">
				<div class="ems-btm-bg">
					<h3>Support 24/7</h3>
					<h4>Contacts us anytime</h4>
					<a href="#" class="btn btn-primary mt-3">start</a>
					<img src="{{ asset('images/mask-group.png') }}" />
				</div>
			</div>
		</div>
		<div class="tab-content ems-right" id="nav-tabContent">

			<div class="tab-pane fade show active" id="nav-introduction-txt" role="tabpanel" aria-labelledby="nav-introduction">
				<div class="main-tab-txt">
					<div class="main-title d-flex align-items-center pb-3">
						<h2>Principle</h2>
						@include('layouts.logout')
					</div>
					<h3 class="h3 pb-4">EFFECT OF CNS SUPPRESSANT AND SKELATEL MUSCLE RELAXANT DRUG ON MICE USING ROTAROD APPARATUS</h3>
					<div class="ems-box">
						<div class="ems-box-img">
							<img src="{{ asset('images/rotarod.jpg') }}" alt="" class="img-fluid"/>
						</div>
						<div class="ems-box-text">
							<p class="text-white">
                            One of the important pharmacological actions of antianxiety agents of benzodiazepine class of drugs is muscle relaxing property. The skeletal muscle relaxation together with taming or calming effect these agents reduce anxiety and tension. The loss of muscle-grip is an indication of muscle relaxation. This effect can be easily studied in animals using inclined plane or rotating rods .The difference in the fall off time from the rotating rod between the control and diazepam-treated animal is taken as an index of muscle relaxation. The angle of the slope of the inclined plane, or the rate of rotation of the rod should be adjusted such that a normal mouse can stay on the plane or on the rod for an appreciable period (3-5 min) of time.

							</p>
						</div>
					</div>
				</div>
				
				<!-- <div class="pt-3 d-flex">
					<a href="#" class="btn btn-primary glb-btn ml-auto">Next Step: Observations</a>
				</div> -->
			</div>

			<div class="tab-pane fade" id="nav-instructions-txt" role="tabpanel" aria-labelledby="nav-instructions">
				<div class="main-tab-txt">
					<div class="main-title d-flex align-items-center pb-3">
						<h2>Instructions</h2>
						@include('layouts.logout')
					</div>
					<div class="ems-box-white instruction-list">
						<ul class="list-unstyled">
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Animals are divided into two groups (5 animals in each).</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Administer one group with the drug to be tested and other with vehicle by intraperitoneal route.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Click “LOAD” button.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Click “START” button. Adjust the speed of instrument (25 rotations/60 sec).</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> When the animal fall off respective time will be displayed on the timer.</li>
						</ul>
					</div>
				</div>
				<!-- <div class="pt-3 d-flex">
					<a href="#" class="btn btn-primary glb-btn">Previous Step: Instructions</a>
					<a href="#" class="btn btn-primary glb-btn ml-auto">Next Step: Observations</a>
				</div> -->
			</div>

			<div class="tab-pane fade" id="nav-experiment-txt" role="tabpanel" aria-labelledby="nav-experiment">
				<div class="main-tab-txt">
					<div class="main-title d-flex align-items-center pb-3">
						<h2>Experiment</h2>
						@include('layouts.logout')
					</div>
					
					<div class="row align-items-end">
						<div class="col-md-6">
							<div class="boxes">
								<h3>Vehicle Treated</h3>
								<div class="box-grp">
									<div class="tray-box">
										<img src="{{ asset('images/tray.png') }}" class="img-fluid"/>
										<ul>
											<li><img id="rat1" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-1" set="1" ratType="1" ratNumber="1"  /></li>
											<li><img id="rat2" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-1" set="1" ratType="1" ratNumber="2"  /></li>
											<li><img id="rat3" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-1" set="1" ratType="1" ratNumber="3"  /></li>
											<li><img id="rat1" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-2" set="2" ratType="1" ratNumber="4"  /></li>
											<li><img id="rat2" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-2" set="2" ratType="1" ratNumber="5"  /></li>
											<li><img id="rat3" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-2" set="2" ratType="1" ratNumber="6"  /></li>
										</ul>
									</div>
									<div class="tube-box">
										<img src="{{ asset('images/tube.png') }}" class="img-fluid" />
										<p>Vehicle</p>
									</div>
								</div>
							</div>
							<div class="boxes mt-4">
								<h3>Drug Treated</h3>
								<div class="box-grp">
									<div class="tray-box">
										<img src="{{ asset('images/tray.png') }}" class="img-fluid"/>
										<ul>
											<li><img id="rat1" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-3" set="3" ratType="2" ratNumber="1" class="tray-rat" /></li>
											<li><img id="rat2" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-3" set="3" ratType="2" ratNumber="2" class="tray-rat" /></li>
											<li><img id="rat3" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-3" set="3" ratType="2" ratNumber="3" class="tray-rat" /></li>
											<li><img id="rat1" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-4" set="4" ratType="2" ratNumber="1" class="tray-rat" /></li>
											<li><img id="rat2" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-4" set="4" ratType="2" ratNumber="2" class="tray-rat" /></li>
											<li><img id="rat3" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat set-4" set="4" ratType="2" ratNumber="3" class="tray-rat" /></li>
										</ul>
									</div>
									<div class="tube-box">
										<img src="{{ asset('images/tube.png') }}" class="img-fluid" />
										<p>Vehicle</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 video-box-bg">
							<div class="video-box">
								<video id="video1" width="250" height="250" controls="" muted="">
									<source src="{{ asset('images/experiment_2/oral.mp4') }}" id="video2" type="video/mp4">
								</video>
							</div>
							<div class="video-text d-flex" style="margin-left:200px;">
							    <center>
									<input type="text" style="height:22px; width:22px;" id="counter1">
									<input type="text" style="height:22px; width:22px;" id="counter2">
									<input type="text" style="height:22px; width:22px;" id="counter3">
								</center>
							</div>
							<!-- <div class="video-text">
								<p class="m-0">Counter = <span id="counter-span"></span> </p>
							</div> -->
							<div class="table-responsive" style="margin:0px!important;">
								<table class="table table-bordered text-center m-0">
									<thead>
										<tr>
											<th>Group Selected</th>
											<th>Reading</th>
											<th>Mouse No.1</th>
											<th>Mouse No.2</th>
											<th>Mouse No.3</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="2">Vehicle Treated</td>	
											<!-- <td class="d-flex"><input id="input-b" style="width:50%" type="text" class="form-control">
										        <button class="ml-3 btn btn-sm btn-primary" onclick="saveReading()" id="submit-reading">Submit</button>
										    </td> -->
											<td>fall off time(Sec)</td>
											<td> <input type="text" style="height:30px; width:30px;" id="m1-s1"> </td>
											<td> <input type="text" style="height:30px; width:30px;" id="m2-s1"> </td>
											<td> <input type="text" style="height:30px; width:30px;" id="m3-s1"> </td>
										</tr>
										<tr>
											<td>fall off time(Sec)</td>
											<td> <input type="text" style="height:30px; width:30px;" id="m1-s2"> </td>
											<td> <input type="text" style="height:30px; width:30px;" id="m2-s2"> </td>
											<td> <input type="text" style="height:30px; width:30px;" id="m3-s2"> </td>

										</tr>
									</tbody>
								</table>
							</div>

							<input type="hidden" name="" id="group">

							<button class="btn btn-primary" onclick="saveReading()">Save readings</button>
							
						</div>
					</div>
				</div>
				
				<!-- <div class="pt-3 d-flex">
					<a href="#" class="btn btn-primary glb-btn">Previous Step: Instructions</a>
					<a href="#" class="btn btn-primary glb-btn ml-auto">Next Step: Observations</a>
				</div> -->
			</div>

			<div class="tab-pane fade" id="nav-observations-txt" role="tabpanel" aria-labelledby="nav-observations">
				<div class="main-tab-txt">

				    <div class="table pt-5 pb-4">
						
						<h3>Ovservation</h3>
						<table class="table table-bordered text-center">
							<thead>
								<tr>
								<th>Sr. No</th>
								<th>BW (g)</th>
								<th>Dose to be administered(mg)</th>
								<th colspan="2">Fall time(Sec)</th>
								<th>% decrease in Fall time A-B/Ax100</th>
								</tr>
							</thead>
							<tbody>
							
							<tr>
							  <td></td>
							  <td></td>
							  <td></td>
							  <td>Basel (A)</td>
							  <td>Treatment (B)</td>
							  <td></td>

							</tr>

							<tr>
							  <td>1</td>
							  <td>25</td>
							  <td>0.1</td>
							  <td id="a-1"></td>
							  <td id="b-1"></td>
							  <td id="sol-1"></td>

							</tr>

							<tr>
							  <td>2</td>
							  <td>30</td>
							  <td>0.12</td>
							  <td id="a-2"></td>
							  <td id="b-2"></td>
							  <td id="sol-2"></td>

							</tr>

							<tr>
							  <td>3</td>
							  <td>32</td>
							  <td>0.128</td>
							  <td id="a-3"></td>
							  <td id="b-3"></td>
							  <td id="sol-3"></td>

							</tr>
							<tr>
							  <td>4</td>
							  <td>35</td>
							  <td>0.14</td>
							  <td id="a-4"></td>
							  <td id="b-4"></td>
							  <td id="sol-4"></td>

							</tr>
							<tr>
							  <td>5</td>
							  <td>33</td>
							  <td>0.132</td>
							  <td id="a-5"></td>
							  <td id="b-5"></td>
							  <td id="sol-5"></td>

							</tr>
							<tr>
							  <td>6</td>
							  <td>35</td>
							  <td>0.14</td>
							  <td id="a-6"></td>
							  <td id="b-6"></td>
							  <td id="sol-6"></td>

							</tr>

						
						

							


							
							
							</tbody>
						</table>
						<!-- <div class="text-right pt-5">
							
							<a href="#" class="btn btn-custom mr-2" id="back2">Back to Experiment</a>
							<a href="#" class="btn btn-custom custom-2">Conclusion</a>
						</div> -->
					</div>


				</div>
				
				<!-- <div class="pt-3 d-flex">
					<a href="#" class="btn btn-primary glb-btn">Previous Step: Instructions</a>
				</div> -->
			</div>

		</div>
	</div>
</section>


@endsection

@section('custom_js')
	<script src="{{ asset('front/rotarod.js') }}"></script>
@endsection
