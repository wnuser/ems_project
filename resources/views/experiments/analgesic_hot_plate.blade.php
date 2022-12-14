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
				<button class="nav-link btn-custom" id="nav-experiment" data-toggle="tab" data-target="#nav-experiment-txt" type="button" onclick="testfunc()"><i class="bi bi-chat"></i> Experiment</button>
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
					<h3 class="h3 pb-4">Study of analgesic activity with the help of “hot plate apparatus”</h3>
					<div class="ems-box">
						<div class="ems-box-img">
							<img src="{{ asset('images/experiment_4/actophotometer.jpg') }}" alt="" class="img-fluid"/>
						</div>
						<div class="ems-box-text">
							<p class="text-white">

							In this method heat is used as a source of pain. Animals are individually placed on a hot plate maintained at constant temperature (55±2°C) and the reaction of animals, such as paw licking or jump response is taken as the end point. Analgesics increase the reaction-time. The method was first described by Eddy and Leimbach (1953).                            </p>
							
							<!-- <p class="text-white">  The hot plate test is used in basic pain research and in testing the effectiveness of analgesics by observing the reaction to pain caused by heat. It was proposed by Eddy and Leimbach in 1953. They used a behavioral model of nociception where behaviors such as jumping and hind paw-licking are elicited following a noxious thermal stimulus. Licking is a rapid response to painful thermal stimuli that is a direct indicator of nociceptive threshold. Jumping represents a more elaborated response, with a latency and encompasses an emotional component of escaping. -->
							
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
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Clean the jar and plate.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Set the hot plate and allow it to stabilize for 0 to 15 minutes at temp. 55-560C.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Weigh and number the mice</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Take the basal reaction time by observing hind paw licking or jump response(whichever appeals first) in animals when placed on the hot plate maintained at constant temperature(55ºc). Normally animals show such response in 6-8sec. A cut off period of 15sec is observed to avoid damage to paws.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Administer drug/vehicle solution to animals orally & place the animals at the middle of the plate one by one and note down the time required for jumping/licking whatever is first.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Start recording the time by stamping the foot pad & release the foot pad when the animal shows first sign.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Select the cut off time as per the protocol.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Take out the animal.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Inject morphine to animals and note the reaction time of animals on the hot plate at 15,30, 60 and 120 min after the drug administration. </li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Clean the jar and plate again.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Switch off the equipment.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Calculate % increase in reaction time(as index of analgesia). Calculate the result by following formula.</li>
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

                            <div class="row">
							    <div class="col-md-6">
									<div class="form-group">
										<label for="">Choose Type of animal</label>
										<select name="" id="animal-type" onchange="refreshRats()" class="form-control">
											<option value="Rats">Rats</option>
											<option value="Mice">Mice</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Choose Drug</label>
										<select name="" class="form-control" onchange="refreshRats()" id="duration">
											<option value="1">After 30 min</option>
											<option value="2">After 60 min</option>
										</select>
									</div>
								</div>
								<p class="ml-4"><strong> Morphine / Aspirin / Diclofinac </strong></p>
							</div>
                            


							<div class="boxes">
								<h3>Vehicle Treated</h3>
								<div class="box-grp">
									<div class="tray-box">
										<img src="{{ asset('images/tray.png') }}" class="img-fluid"/>
										<ul>
											<li><img id="rat1" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="1" class="tray-rat" /></li>
											<li><img id="rat2" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="2" class="tray-rat" /></li>
											<li><img id="rat3" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="3" class="tray-rat" /></li>
											<li><img id="rat4" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat ml-4" ratType="1" ratNumber="4" class="tray-rat" /></li>
											<!-- <li><img id="rat5" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat ml-3" ratType="1" ratNumber="5" class="tray-rat" /></li> -->
											<!-- <li><img id="rat6" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="6" class="tray-rat"/></li> -->

										</ul>
									</div>
									<div class="tube-box">
										<img src="{{ asset('images/tube.png') }}" class="img-fluid" />
										<p>Vehicle</p>
									</div>
								</div>
							</div>

							<!-- <div class="boxes mt-4">
								<h3>Drug Treated</h3>
								<div class="box-grp">
									<div class="tray-box">
										<img src="{{ asset('images/tray.png') }}" class="img-fluid"/>
										<ul>
											<li><img id="rat1" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="1" class="tray-rat" /></li>
											<li><img id="rat2" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="2" class="tray-rat" /></li>
											<li><img id="rat3" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="3" class="tray-rat" /></li>
											<li><img id="rat4" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="4" class="tray-rat" /></li>
											<li><img id="rat5" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="5" class="tray-rat" /></li>
											<li><img id="rat6" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="6" class="tray-rat" /></li>
										</ul>
									</div>
									<div class="tube-box">
										<img src="{{ asset('images/tube.png') }}" class="img-fluid" />
										<p>Vehicle</p>
									</div>
								</div>
							</div> -->

						</div>
						<div class="col-md-6 video-box-bg">
							<div class="video-box">
								<video id="video1" width="250" height="250" controls="" muted="">
									<source src="{{ asset('images/experiment_4/introduction_video.mp4') }}" id="video2" type="video/mp4">
								</video>
							</div>
							<div class="video-text">
								<p class="m-0">Counter = <span id="counter-span"></span> </p>
							</div>
							<div class="table-responsive">
								<table class="table table-bordered text-center m-0">
									<thead>
										<tr>
											<th>Group Selected</th>
											<th>Paw licking</th>
											<th>Jump response</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Vehicle Treated	</td>	
											<td>
												<input id="paw" readonly style="width:100%" type="text" class="form-control">
											</td>
											<td>
												<input id="jump" readonly style="width:100%" type="text" class="form-control">
											</td>
											<td>
												<button class="ml-3 btn btn-sm btn-primary" onclick="saveReading()" id="submit-reading">Submit</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
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

				    <div class="table pt-5 pb-4 ml-4 mr-5">
						
						<h3>Ovservation</h3>
						<table class="table table-bordered text-center table-responsive">
							<thead>
								<tr>
									<th rowspan="2">Sr. No </th>
									<th rowspan="2">Animal Weight(gm)</th>
									<th rowspan="2">Dose Morphine sulphate (5mg/kg)</th>
									<th colspan="2">Basal reaction time (sec) Ta</th>
									<th colspan="2">Reaction time after 30 min</th>
									<th colspan="2">Reaction time after 60 min</th>

								</tr>
								<tr>
									<!-- <th></th>	
									<th></th>
									<th></th> -->
									<th>Paw licking</th>
									<th>Jump response</th>
									<th>Paw licking</th>
									<th>Jump response</th>
									<th>Paw licking</th>
									<th>Jump response</th>
								
								</tr>
							</thead>
							<tbody>
							
							
							<tr>
								<td>1.</td>	
								<td>172</td>
								<td>0.86</td>	
								<td>2</td>
								<td>5</td>	
								<td id="p-1-30"></td>
								<td id="j-1-30"></td>
								<td id="p-1-60"></td>
								<td id="j-1-60"></td>	
								
							</tr>
							
							<tr>
								<td>2.</td>	
								<td>175</td>
								<td>0.87</td>	
								<td>5</td>
								<td>4</td>	
								<td id="p-2-30"></td>
								<td id="j-2-30"></td>
								<td id="p-2-60"></td>
								<td id="j-2-60"></td>	
								
							</tr>

							<tr>
								<td>3.</td>	
								<td>180</td>
								<td>0.9</td>	
								<td>4</td>
								<td>3</td>	
								<td id="p-3-30"></td>
								<td id="j-3-30"></td>
								<td id="p-3-60"></td>
								<td id="j-3-60"></td>		
									
							</tr>

							<tr>
								<td>4.</td>	
								<td>168</td>
								<td>0.84</td>	
								<td>4</td>
								<td>6</td>	
								<td id="p-4-30"></td>
								<td id="j-4-30"></td>
								<td id="p-4-60"></td>
								<td id="j-4-60"></td>	
							</tr>


							<tr>
								<td></td>	
								<td>Average</td>
								<td> - </td>	
								<td>3.75</td>
								<td>4.5</td>	
								<td id="p-1-30">7.25</td>
								<td id="j-1-30">9.75</td>
								<td id="p-1-60">6.75</td>
								<td id="j-1-60">10.5</td>	
								
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
	<script src="{{ asset('front/analgesic.js') }}"></script>
@endsection
