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
					<h3 class="h3 pb-4">To study the anticonvulsant effect of drugs (Phenytoin, Diazepam) by Maximal Electro Shock Seizure (MES) and Pentylene-tetrazol Induced Seizure (PTZ) in mice.</h3>
					
					<div class="d-flex link-div" >
					     <a id="link1" href="{{ route('experiment', ['id'=> 5]) }}">Procedure-1: (MES Method)</a>
						 <a id="link2" href="{{ route('experiment', ['id'=> 6] ) }}" onclick="openexperiment()">Procedure-2: (PTZ Method)</a>
					</div>					
					
					<div class="ems-box">
						<div class="ems-box-img">
							<img src="{{ asset('images/eletric_cunsuvlator.jpeg') }}" alt="" class="img-fluid"/>
						</div>
						<div class="ems-box-text">
							<p class="text-white">
							Different types of epilepsies, i.e., grand mal, petit mal or psychomotor type, can be studied in laboratory animals. The maximal electro-shock (MES)-induced convulsions in animals represent grand mal type of epilepsy. Similarly, chemo-convulsions due to pentylenetetrazol which produce clonic-type of convulsions resemble petit mal type of convulsions in man. These are the two procedures used to study convulsions, and to test anticonvulsant drugs in laboratory animals.
In MES-convulsions electroshock is applied through the corneal electrodes. Through optic stimulation cortical excitation is produced. The MES-convulsions are divided into five phases such as (a) tonic flexion, (b) tonic extensor, (c) clonic convulsions, (d) stupor, and (e) recovery or death. A substance is known to possess anticonvulsant property if it reduces or abolishes the extensor phase of MES convul- sions. This procedure may be used to produce convulsions both in rats and mice.
It is advised that the students should have complete background of the pharmacology of antiepileptic drugs before performing this experiment.

							</p>

							
						</div>
					</div>
					<div class="mt-5" style="color:black!important;">
						   <h4>Operation :- </h4>
						   (a) Weigh the animal (mice/rat) & number them. <br>
						   (b) Adjustment of electro Convulsiometer (MES-Maximum electroshocks) <br>
						   (c) Switch ON the instrument. <br>
						   (d) Adjust the knob A, B & multiplier for required current. <br>
						   (e) Adjust the timer knob for required time. <br>
						   (f) Adjust the corneal electrodes or ear electrodes to the stimulus output. <br>
						   (g) Standard value <br>

						   <table class="table table-responsive table-bordered" style="width:30%">
                               <thead>
								   <th>ANIMALS</th>
								   <th>CURRENT</th>
								   <th>TIME</th>
							   </thead>
							   <tbody>
								   <tr>
									   <td>Mice</td>
									   <td>50 milli Amp.</td>
									   <td>0.2 sec</td>
								   </tr>
								   <tr>
									   <td>Rat</td>
									   <td>50 milli Amp.</td>
									   <td>0.2 sec</td>
								   </tr>
							   </tbody>
						   </table>
						   <!-- <br> -->
						   (h)Press the shock knob for producing convulsions and then record the Change in time of convulsions in second of various stages of convulsions.

					       <h4 class="mt-4">Principle :- </h4>
							<p class="">
							Epilepsy is the disorder of central nervous system. It is defined as chronic convulsive disorder characterized by sudden loss or impairment of consciousness, usually but not always with characteristic body movements and sometimes with hyper autonomic activity.
							</p> <p class="">  Epilepsy is caused by “Occasional, sudden excessive rapid local discharges grey matter”  it is through that functional impairment in inhibitory Gama amino butyric acid mechanism is responsible for epilepsy.
							Epilepsy can be classified in two major groups.
                            </p>
						
						    <p class="">  
							  <strong> 1.Tonic clonic seizures/grand mal /Major epilepsy: </strong> This is characterized by sudden loss of consciousness and major convulsions consisting of tonic spasm of the whole body followed by clonic jerking of body.
							</p>
							<p class="">
							  <strong> 2.Petil mal epilepsy…/Absences: </strong> It is characterised by episodes of impairment of Consciousness, associated with bilateral clonic motor activity such as eye lid blinking. The various antiepileptic drugs which are employed clinically are a) Phenytoin (b) Phenobarbitone (c) Diazepam (d) Ethosuximide (e) Trimethadione
							</p>
							<p class="">
							These antiepileptics are employed… <br>
								1. To treat grand mal epilepsy <br>
								2. To treat Petil mal epilepsy <br>
								3. To treat post traumatic epilepsy. <br>
								Electrical shock given through the electrodes applied on the ear pinna results into a burst of excitatory neurotransmitters from the brain. This activates the brain activity during grand-mal epilepsy. Prior treatment of animals with the drugs reduces the exited activity of brain.

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
						<h2>Procedure-2: (PTZ Method)</h2>
						@include('layouts.logout')

					</div>
					<div class="ems-box-white instruction-list">
						<ul class="list-unstyled">
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Select twelve healthy mice weighing in between 25-35 gm.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Divide them in two groups.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Group 1 (M1) is used to study effect of phenyltetrazole (CNS stimulent) produces jerky type of clonic convulsions in rodants. While group- 2 (M2) is used to studying the proactive effect of diazepam.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Injected phenyltetrazole(PTZ) to control animal i.e. Group 1 (M1)following point must be observed…</li>
							   <br> (a) Straub’s tail
							   <br> (b) Jerky convulsion
							   <br> (c) Severity of convulsions.
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Inject diazepam to second group- 2 (M2). After 30 min. inject phenyltetrazole again. Note the above points again.</li>
							<li><i class="bi bi-hand-thumbs-up pr-4"></i>Tabulate your results.</li>
							
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
										<select name="" class="form-control" onchange="refreshRats()" id="drug-type">
											<option value="d1">PTZ</option>
											<option value="d2">Diazepam (2mg/kg I.P.)+ PTZ(80mg/Kg I.P.)</option>
										</select>
									</div>
								</div>
							</div>
                            
							<div class="boxes">
								<!-- <h3>Vehicle Treated</h3> -->
								<div class="box-grp">
									<div class="tray-box">
										<img src="{{ asset('images/tray.png') }}" class="img-fluid"/>
										<ul>
											<li><img id="rat1" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="1" class="tray-rat" /></li>
											<li><img id="rat2" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="2" class="tray-rat" /></li>
											<li><img id="rat3" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat" ratType="1" ratNumber="3" class="tray-rat" /></li>
											<li><img id="rat4" src="{{ asset('images/rats/rat-1.png') }}" class="img-fluid tray-rat ml-4" ratType="1" ratNumber="4" class="tray-rat" /></li>
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
									<source src="{{ asset('images/experiment_4/introduction_video.mp4') }}" id="video2" type="video/mp4">
								</video>
							</div>
							<div class="video-text">
								<p class="m-0">Counter = <span id="counter-span"></span> </p>
							</div>
							<div class="table-responsive" style="width:100%">
								<table class="table table-bordered text-center m-0">
									<thead>
										<tr>
											<th colspan="3">Time (sec) of different Phases of Seizure</th>
											<!-- <th rowspan="2">Saving</th> -->
										</tr>
										<tr>
										    <th>Onset of time (Sec.)</th>
											<th>Clonic Convulsion (Sec.)</th>
											<th>Recovery/Death(Min.)</th>
											<!-- <th></th> -->
										</tr>
									</thead>
									<tbody>
									   
										<tr>
										   <td> <input type="text" id="d-1" style="height:40px; width:50px" class="form-control"> </td>
										   <td> <input type="text" id="d-2" style="height:40px; width:50px" class="form-control"> </td>
										   <td class="d-flex"> <input type="text" id="d-3" style="height:40px; width:50px" class="form-control"> 
										   
										   <button class="btn btn-sm btn-primary ml-2" onclick="saveReadings()" >Submit</button>

										   </td>
										   <!-- <td> 
										      <div class="d-flex">
											  </div>
										   </td> -->
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
						
						<h3>Ovservation of PTZ</h3>

						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th></th>
									<th></th>
									<th rowspan="2">Treatment</th>

									<th colspan="3"></th>
									<!-- <th rowspan="2" colspan="1">Recovery/Death</th> -->
								</tr>
								<tr>
									<th>S.N.</th>
									<th>Body Weight (Gm.)</th>
									<!-- <th></th> -->

									<th>Onset of time (Sec.)</th>
									<th>Clonic Convulsion (Sec.)</th>
									<th>Recovery / Death (Min.)</th>
									<!-- <th></th> -->
								</tr>
							</thead>
							<tbody>
							
							
							<tr>
								<td>1.</td>
								<td>25</td>
								<td rowspan="5">PTZ</td>
								<td id="d1-r-1-1"></td>
								<td id="d1-r-1-2"></td>
								<td id="d1-r-1-3"></td>
								<!-- <td id="d1-r-1-4"></td> -->
							</tr>
							<tr>
								<td>2.</td>
								<td>26</td>
								<!-- <td></td> -->
								<td id="d1-r-2-1"></td>
								<td id="d1-r-2-2"></td>
								<td id="d1-r-2-3"></td>
								<!-- <td id="d1-r-2-4"></td> -->
							</tr>
							<tr>
								<td>3.</td>
								<td>27</td>
								<!-- <td></td>								 -->
								<td id="d1-r-3-1"></td>
								<td id="d1-r-3-2"></td>
								<td id="d1-r-3-3"></td>
								<!-- <td id="d1-r-3-4"></td> -->
							</tr>
							<tr>
								<td>4.</td>
								<td>25</td>
								<!-- <td></td> -->
								<td id="d1-r-4-1"></td>
								<td id="d1-r-4-2"></td>
								<td id="d1-r-4-3"></td>
								<!-- <td id="d1-r-4-4"></td> -->
							</tr>
							<tr>
								<td>5.</td>
								<td>28</td>
								<!-- <td></td> -->
								<td id="d1-r-5-1"></td>
								<td id="d1-r-5-2"></td>
								<td id="d1-r-5-3"></td>
								<!-- <td id="d1-r-5-4"></td> -->
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Average</td>
								<td id="d1-r-5-1"></td>
								<td id="d1-r-5-2"></td>
								<td id="d1-r-5-3"></td>
								<!-- <td id="d1-r-5-4"></td> -->
							</tr>
							
							</tbody>
						</table>
						<!-- <div class="text-right pt-5">
							
							<a href="#" class="btn btn-custom mr-2" id="back2">Back to Experiment</a>
							<a href="#" class="btn btn-custom custom-2">Conclusion</a>
						</div> -->
					</div>

					<div class="table pt-5 pb-4 ml-4 mr-5">
						
						<h3>Ovservation of Diazepam (2mg/kg I.P.)+ PTZ(80mg/Kg I.P.)</h3>
						
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th></th>
									<th></th>
									<th rowspan="2">Treatment</th>

									<th colspan="3">Time (Sec) of different Phases of Seizure</th>
									<!-- <th rowspan="2" colspan="1">Recovery/Death</th> -->
								</tr>
								<tr>
									<th>S.N.</th>
									<th>Body Weight (Gm.)</th>
									<!-- <th></th> -->

									<th>Tonic Extension(Sec.)</th>
									<th>Clonic Convulsion (Sec.)</th>
									<th>Depression / Stupor</th>
									<!-- <th></th> -->
								</tr>
							</thead>
							<tbody>
							
							
							<tr>
								<td>1.</td>
								<td>28</td>
								<td rowspan="5">Diazepam (2mg/kg I.P.)+ PTZ(80mg/Kg I.P.)</td>
								<td id="d2-r-1-1"></td>
								<td id="d2-r-1-2"></td>
								<td id="d2-r-1-3"></td>
								
							</tr>
							<tr>
								<td>2.</td>
								<td>30</td>
								<!-- <td></td> -->
								<td id="d2-r-2-1"></td>
								<td id="d2-r-2-2"></td>
								<td id="d2-r-2-3"></td>
							</tr>
							<tr>
								<td>3.</td>
								<td>27</td>
								<!-- <td></td>								 -->
								<td id="d2-r-3-1"></td>
								<td id="d2-r-3-2"></td>
								<td id="d2-r-3-3"></td>
							</tr>
							<tr>
								<td>4.</td>
								<td>26</td>
								<!-- <td></td> -->
								<td id="d2-r-4-1"></td>
								<td id="d2-r-4-2"></td>
								<td id="d2-r-4-3"></td>
							</tr>
							<tr>
								<td>5.</td>
								<td>28</td>
								<!-- <td></td> -->
								<td id="d2-r-5-1"></td>
								<td id="d2-r-5-2"></td>
								<td id="d2-r-5-3"></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Average</td>
								<td id="d2-r-5-1"></td>
								<td id="d2-r-5-2"></td>
								<td id="d2-r-5-3"></td>
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
	<script src="{{ asset('front/anticonvulsant_method2.js') }}"></script>
@endsection
