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
				<button class="nav-link btn-custom" id="nav-instructions" data-toggle="tab" data-target="#nav-instructions-txt"  type="button" ><i class="bi bi-bar-chart"></i> Instructions</button>
				<button class="nav-link btn-custom" onclick="testfunc()" id="nav-experiment" data-toggle="tab" data-target="#nav-experiment-txt" type="button"><i class="bi bi-chat"></i> Experiment</button>
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
						<h2>Princple</h2>
						@include('layouts.logout')
						
					</div>
					<h3 class="h3 pb-4">Effect of drug on Locomotor Activity of Mice using Actophotometer</h3>
					<div class="ems-box">
						<div class="ems-box-img">
							<img src="{{ asset('images/actophotometer.jpg') }}" alt="" class="img-fluid"/>
						</div>
						<div class="ems-box-text">
							<p class="text-white">
							Most of the central nervous system acting drugs influence the locomotor activities in man and animals. The CNS depressant drugs such as barbiturates and alcohol reduce the motor activity while the stimulants such as caffeine and amphetamines increase the activity. In other words, the locomotor activity can be an index of wakefulness (alertness) of mental activity. The locomotor activity (horizontal activity) can be easily measured using an actophotometer which operates on photoelectric cells which are connected in circuit with a counter. When the beam of light falling on the photocell is cut off by the animal, a count is recorded . An actophotometer could have either circular or square arena in which the animal moves, Both rats and mice may be used for testing in this equipment.
							
							</p>
						</div>
					</div>
				</div>
				
				<!-- <div class="pt-3 d-flex">
					<a href="#" class="btn btn-primary glb-btn ml-auto"  data-toggle="tab" data-target="#nav-instructions-txt"  type="button">Next Step: Instructions</a>
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
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Animals are divided into two groups (6 animals in each).</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Administer one group with the drug to be tested and other with vehicle by oral route.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Put one animal at a time in the Actophotometer.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Start the instrument.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Count the locomotor activity for 10 minutes.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Repeat the procedure at the interval of 30 minutes.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Record the observations.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> The mice in test group are injected Diazepam (1 Mg /kg Oral) and locomotor activity is measures twice as stated above.</li>
						</ul>
					</div>
				</div>
				<!-- <div class="pt-3 d-flex">
					<a href="#" class="btn btn-primary glb-btn" data-toggle="tab" data-target="#nav-introduction-txt">Previous Step: Introduction</a>
					<a href="#" class="btn btn-primary glb-btn ml-auto" data-toggle="tab" data-target="#nav-experiment-txt">Next Step: Experiment</a>
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
											<li><img id="rat1" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="1" counter="69" class="tray-rat" /></li>
											<li><img id="rat2" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="2" counter="84" class="tray-rat" /></li>
											<li><img id="rat3" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="3" counter="75" class="tray-rat" /></li>
											<li><img id="rat4" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="4" counter="71" class="tray-rat" /></li>
											<li><img id="rat5" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="5" counter="68" class="tray-rat" /></li>
											<li><img id="rat6" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="6" counter="68" class="tray-rat"/></li>

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
											<li><img id="rat1" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="1" counter="200" class="tray-rat" /></li>
											<li><img id="rat2" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="2" counter="210" class="tray-rat" /></li>
											<li><img id="rat3" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="3" counter="205" class="tray-rat" /></li>
											<li><img id="rat4" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="4" counter="198" class="tray-rat" /></li>
											<li><img id="rat5" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="5" counter="199" class="tray-rat" /></li>
											<li><img id="rat6" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="2" ratNumber="6" counter="158" class="tray-rat" /></li>
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
									<source src="{{ asset('images/oral.mp4') }}" id="video2" type="video/mp4">
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
											<th>Locomotor Index</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Vehicle</td>	
											<td class="d-flex"><input id="input-b" style="width:50%" type="text" class="form-control">
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
					<button class="btn btn-primary glb-btn" data-toggle="tab" data-target="#nav-instructions-txt">Previous Step: Instructions</button>
					<a href="#" class="btn btn-primary glb-btn ml-auto" data-toggle="tab" data-target="#nav-observations-txt">Next Step: Observations</a>
				</div> -->
			</div>

			<div class="tab-pane fade" id="nav-observations-txt" role="tabpanel" aria-labelledby="nav-observations">
				<div class="main-tab-txt">

				    <div class="table pt-5 pb-4">
						
						<h3>Chlopromazing: 3 mg/kg</h3>
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th rowspan="2">Sr. No</th>
									<th rowspan="2">BW (g)</th>
									<th rowspan="2" >Dose to be administered (mg) </th>
									<th scope="col" colspan="2">Locomotor activity score</th>
									<th scope="col" colspan="1">Difference</th>
									<th scope="col" rowspan="2" >% Decrease in locomotor activity</th>
								</tr>
								<tr>
									<th>Basel(A)</th>
									<th>Treatment(B)</th>
									<th>A-B</th>
								</tr>
							</thead>
							<tbody>
							
							<tr>
								<td>1</td>	
								<td>25</td>
								<td>0.075</td>
								<td id="ch_1_a">135</td>
								<td id="ch_1_b"></td>
								<td id="ch_1_ab"></td>
								<td id="ch_1_per"></td>
							</tr>

							<tr>
								<td>2</td>	
								<td>30</td>
								<td>0.09</td>
								<td id="ch_2_a">164</td>
								<td id="ch_2_b"></td>
								<td id="ch_2_ab"></td>
								<td id="ch_2_per"></td>
							</tr>

							<tr>
								<td>3</td>	
								<td>32</td>
								<td>0.096</td>
								<td id="ch_3_a">150</td>
								<td id="ch_3_b"></td>
								<td id="ch_3_ab"></td>
								<td id="ch_3_per"></td>
							</tr>

							<tr>
								<td>4</td>	
								<td>35</td>
								<td>0.105</td>
								<td id="ch_4_a">140</td>
								<td id="ch_4_b"></td>
								<td id="ch_4_ab"></td>
								<td id="ch_4_per"></td>
							</tr>

							<tr>
								<td>5</td>	
								<td>34</td>
								<td>0.103</td>
								<td id="ch_5_a">137</td>
								<td id="ch_5_b"></td>
								<td id="ch_5_ab"></td>
								<td id="ch_5_per"></td>
							</tr>

							<tr>
								<td>6</td>	
								<td>33</td>
								<td>0.099</td>
								<td id="ch_6_a">158</td>
								<td id="ch_6_b"></td>
								<td id="ch_6_ab"></td>
								<td id="ch_6_per"></td>
							</tr>

							<tr>
								<td></td>	
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							
							
							</tbody>
						</table>
						<!-- <div class="text-right pt-5">
							
							<a href="#" class="btn btn-custom mr-2" id="back2">Back to Experiment</a>
							<a href="#" class="btn btn-custom custom-2">Conclusion</a>
						</div> -->
					</div>

					<div class="table pt-5 pb-4">
						<h3>Caffeine: 3 mg/kg</h3>
						<table class="table table-bordered text-center">
							<thead>
							<tr>
								<th rowspan="2">Sr. No</th>
								<th rowspan="2">BW (g)</th>
								<th rowspan="2" >Dose to be administered (mg) </th>
								<th scope="col" colspan="2">Locomotor activity score</th>
								<th scope="col" colspan="1">Difference</th>
								<th scope="col" rowspan="2" >% Decrease in locomotor activity</th>
							</tr>
							<tr>
								<th>Basel(A)</th>
								<th>Treatment(B)</th>
								<th>B-A</th>
							</tr>
							</thead>
							<tbody>
							
							<tr>
								<td>1</td>	
								<td>25</td>
								<td>0.075</td>
								<td>135</td>
								<td id="ca_1_b"></td>
								<td id="ca_1_ab"></td>
								<td id="ca_1_per"></td>
							</tr>

							<tr>
								<td>2</td>	
								<td>30</td>
								<td>0.09</td>
								<td>164</td>
								<td id="ca_2_b"></td>
								<td id="ca_2_ab"></td>
								<td id="ca_2_per"></td>
							</tr>

							<tr>
								<td>3</td>	
								<td>32</td>
								<td>0.096</td>
								<td>150</td>
								<td id="ca_3_b"></td>
								<td id="ca_3_ab"></td>
								<td id="ca_3_per"></td>
							</tr>


							<tr>
								<td>4</td>	
								<td>35</td>
								<td>0.105</td>
								<td>140</td>
								<td id="ca_4_b"></td>
								<td id="ca_4_ab"></td>
								<td id="ca_4_per"></td>
							</tr>

							<tr>
								<td>5</td>	
								<td>34</td>
								<td>0.103</td>
								<td>137</td>
								<td id="ca_5_b"></td>
								<td id="ca_5_ab"></td>
								<td id="ca_5_per"></td>
							</tr>

							<tr>
								<td>6</td>	
								<td>33</td>
								<td>0.099</td>
								<td>158</td>
								<td id="ca_6_b"></td>
								<td id="ca_6_ab"></td>
								<td id="ca_6_per"></td>
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

	<script src="{{ asset('front/custom.js') }}"></script>
@endsection
