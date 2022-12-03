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
				<button class="nav-link btn-custom" id="nav-experiment" data-toggle="tab" data-target="#nav-experiment-txt" type="button"><i class="bi bi-chat"></i> Experiment</button>
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
						<h2>Introduction</h2>
						@include('layouts.logout')
					</div>
					<h3 class="h3 pb-4">Study of diuretic activity using metabolic cage</h3>
					<div class="ems-box">
						<div class="ems-box-img">
							<img src="{{ asset('images/metabolic_cage.jpeg') }}" alt="" class="img-fluid"/>
						</div>
						<div class="ems-box-text">
							<p class="text-white">
							Diuretics are the drugs which increases the formation & flow of urine. Diuresis or increased production of urine is produced by these drugs by acting on renal or kidney nephron. They act by inhibiting some ion channel transporters like Na+-K+-2Cl- co-transport, Na+-Cl- symport, etc. Mainly used for the treatment of Oedema and Hypertension. 
							</p>
							<p class="text-white"> Normal urine output in rats is very small (1-2 ml/day). Hence to get the measurable quantity the animals are first hydrated by adding glucose in drinking water. The urine output is increased after administration of diuretics like Acetazolamide, hydrochlorthiziade and frusemide. Increase in volume of urine is measured with the help of measuring cylinder and compared with the normal urine output.
							</p>
							<p class="text-white"> Metabolic cages are specially designed apparatus for rodents urine collection with minimum stress to the animals. These provide a perfect separation of urine and feces by a provision in funnel or separation cone.
							</p>
							
						</div>
					</div>
					<div class="req-box" >
						<h5 style="">Requirement: </h5>

						<p class="">
						Metabolic cages, adult male albino wistar rats, Swiss mice, measuring cylinder. <br>
				        <strong> Drugs and solutions: </strong>	Normal saline (2mg/kg orl) <br>
							Acetazolamide (4 mg/kg/oral) <br>
							hydrochlorthiziade (1mg/kg/oral) <br>
							Frusemide(5mg/kg/oral) 

						</p>
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
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Albino rats (200-250g) are fasted (deprived of food and water) overnight and saline (25ml/kg) is administered orally with the help of oral feeding cannula. </li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Those animals are divided into four groups containing three rats in each as follows:</li>
							<li class="ml-2">(i) Ist group (Vehicle Control)- only normal saline </li>
							<li class="ml-2">(ii) Ist group (Vehicle Control)- only normal saline </li>
							<li class="ml-2">(iii) Ist group (Vehicle Control)- only normal saline </li>
							<li class="ml-2">(iv) Ist group (Vehicle Control)- only normal saline </li>

							<li><i class="bi bi-hand-thumbs-up pr-4"></i> After administration of drugs animals are placed in the four different metabolic cages. Urine is collected in a measuring cylinder.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i> Time, when the first drop of urine is collected in a cylinder for each group is noted and the volume is recorded at intervals of 30 min for 4 hrs. The difference in the volume collected at different time interval and total volume can be compared with various diuretics.</li>
							<!-- <li><i class="bi bi-hand-thumbs-up pr-4"></i> Compare the urine output between vehicle treated and drug treated group.</li> -->
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
											<!-- <option value="Mice">Mice</option> -->
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Choose Drug</label>
										<select name="" class="form-control" onchange="refreshRats()" id="drug-type">
											<option value="1">Only Normal Saline</option>
											<option value="2">Saline + Acetazolamide</option>
											<option value="3">Saline + Hydrochlorthiziade</option>
											<option value="4">Saline +Frusemide</option>
										</select>
									</div>
								</div>
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
											<li><img id="rat4" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat ml-3" ratType="1" ratNumber="4" class="tray-rat" /></li>
											<li><img id="rat5" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat ml-3" ratType="1" ratNumber="5" class="tray-rat" /></li>
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
									<source src="{{ asset('images/experiment_3/oral.mp4') }}" id="video2" type="video/mp4">
								</video>
							</div>
							<div class="video-text">
								<!-- <p class="m-0">Counter = <span id="counter-span"></span> </p> -->
							</div>
							<div class="table-responsive">
								<table class="table table-bordered text-center m-0">
									<thead>
										<tr>
											<th>Group Selected</th>
											<th>Urinary output (ml)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Vehicle</td>	
											<td class="d-flex"><input id="input-b" readonly style="width:50%" type="text" class="form-control">
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
						
						<h3>Ovservation: Average Urine output in <span id="animal"></span> </h3>
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th>S. No.</th>
									<th>Treatment group</th>
									<th>After 30 min.</th>
									<th>After 60 min.</th>
									<th>After 120 min.</th>
									<th>After 180 min.</th>
									<th>After 240 min.</th>
								</tr>
							</thead>
							<tbody>
							
							<tr>
								<td>1.</td>	
								<td>Only Normal Saline</td>
								<td id="1-d-1"></td>	
								<td id="1-d-2"></td>
								<td id="1-d-3"></td>
								<td id="1-d-4"></td>	
								<td id="1-d-5"></td>
							</tr>

							<tr>
								<td>2.</td>	
								<td>Saline + Acetazolamide</td>
								<td id="2-d-1"></td>	
								<td id="2-d-2"></td>
								<td id="2-d-3"></td>
								<td id="2-d-4"></td>	
								<td id="2-d-5"></td>
							</tr>

							<tr>
								<td>3.</td>	
								<td>Saline + Hydrochlorthiziade</td>
								<td id="3-d-1"></td>	
								<td id="3-d-2"></td>
								<td id="3-d-3"></td>
								<td id="3-d-4"></td>	
								<td id="3-d-5"></td>
							</tr>

							<tr>
								<td>4.</td>	
								<td>Saline +Frusemide</td>
								<td id="4-d-1"></td>	
								<td id="4-d-2"></td>
								<td id="4-d-3"></td>
								<td id="4-d-4"></td>	
								<td id="4-d-5"></td>
							</tr>
							
							</tbody>
						</table>
						<!-- <div class="text-right pt-5">
							
							<a href="#" class="btn btn-custom mr-2" id="back2">Back to Experiment</a>
							<a href="#" class="btn btn-custom custom-2">Conclusion</a>
						</div> -->
					</div>


				</div>
<!-- 				
				<div class="pt-3 d-flex">
					<a href="#" class="btn btn-primary glb-btn">Previous Step: Instructions</a>
				</div> -->
			</div>

		</div>
	</div>
</section>


@endsection

@section('custom_js')
	<script src="{{ asset('front/diuretic.js') }}"></script>
@endsection
