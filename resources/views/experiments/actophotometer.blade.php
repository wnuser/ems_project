@extends('layouts.app')

@section('content')
<div class="container">
<section class="experiment-1">
	<div class="container-custom">
		<div class="inner-wrap-main">
			<p class="head-para text-center">-- Effect of drug on Locomotor Activity of Mice using Actophotometer --</p>
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
				  <button class="nav-link active btn-custom" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Introduction</button>
				  <button class="nav-link btn-custom" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Experiment</button>
				  <button class="nav-link btn-custom" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Observation</button>
				</div>
			  </nav>
			  <div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> 
					<div class="intro text-center py-3">
						<h2>Equipment</h2>
						<img src="images/actophotometer.jpg" alt="" class="img-fluid mb-5"/>
						<p class="bordered-para">Actophotometer has a central chamber with arrangement of light sources and photocells at the base of two opposite walls.The light of each source is focused on a photocell. Any Interruption in the path of light activates the photocells and this is counted as a measure of horizontal locomotor activity of the mice kept in the chamber.</p>
					</div>

				</div>
				<div class="tab-pane fade experiments-col-tabs" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

					<div class="experiments-col py-4">
						<div class="row">
							<div class="col-12 text-right">
								<a href="#instructions" data-toggle="modal" class="btn btn-custom custom-2 instructions-anchor">Instruction</a>
							</div>
							<div class="col-lg-4 pt-large">
								<span class="head-para">Vehicle Treated</span>
								<img src="images/tray.jpg" alt="" class="img-fluid"/>
							</div>
							<div class="col-lg-4">
								<div class="rat-wrapper">
									<img src="images/rats/rat-1.png" alt="" id="rat1" ratType="1" ratNumber="1" class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat2" class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat3" class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat4" class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat5" class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat6" class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat7" class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat8" ratType="1" ratNumber="3" class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat9"  class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat10" class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat11" ratType="1" ratNumber="2" class="tray-rat"/>
									<img src="images/rats/rat-1.png" alt="" id="rat12" class="tray-rat"/>
									<img src="images/actophotometer.jpg" alt="" class="after-moving-rat"/>
								</div>
								<div class="video-wrapper">
									<video id="video1" width="300" height="240" controls="" muted="" autoplay>
										<source src="images/oral.mp4" type="video/mp4">
					  				</video>
								</div>

							    <!--- video section  -->
								<div class="video-wrapper-final">
									<video id="video2" width="300" height="240" controls="" muted="" autoplay>
										<source src="images/actophotometer.mp4" type="video/mp4">
					  				</video>
								</div>

								<div class="action-wrapper text-center py-4">
									<a href="javascript:void(0)" class="btn btn-custom" id="administer">Administer</a>
								</div>
								<div class="d-flex justfy-content-between tube-box">
									<div class="w-50">
										<img src="images/tube.png" alt=""/>
										<span class="head-para">Vehicle</span>
									</div>
									<div class="w-50 text-right">
										<img src="images/tube.png" alt="" class="ml-auto"/>
										<span class="head-para">Vehicle</span>
									</div>
								</div>
								<div class="calculation-box py-3">
									<div class="meter text-center pb-3">
										<span>Counter = </span><span id="counter-span"></span>
									</div>
									<div class="table-cal">
										<table class="table table-bordered text-center">
											<thead>
											  <tr>
												<th scope="col" >Group Selected</th>
												<th scope="col" >Locomotor Index</th>
												<th scope="col" >No. of Rearings</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>Vehicle Treated	</td>
												<td><input type="number" name="" id="input-a"></td>
												<td><input type="number" name="" id="input-b"></td>
											  </tr>
											</tbody>
										  </table>
									</div>
								</div>
							</div>
							<div class="col-lg-4 pt-large">
								<span class="head-para">Drug Treated</span>
								<img src="images/tray.jpg" alt="" class="img-fluid"/>
							</div>
						</div>
					</div>

				</div>
				<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
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
								<td id="ch_1_a"></td>
								<td id="ch_1_b"></td>
								<td id="ch_1_ab"></td>
								<td id="ch_1_per"></td>
							</tr>

							<tr>
								<td>2</td>	
								<td>30</td>
								<td>0.09</td>
								<td id="ch_2_a"></td>
								<td id="ch_2_b"></td>
								<td id="ch_2_ab"></td>
								<td id="ch_2_per"></td>
							</tr>

							<tr>
								<td>3</td>	
								<td>32</td>
								<td>0.096</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>


							<tr>
								<td>4</td>	
								<td>35</td>
								<td>0.105</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr>
								<td>5</td>	
								<td>34</td>
								<td>0.103</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr>
								<td>6</td>	
								<td>33</td>
								<td>0.099</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
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
								<th>A-B</th>
							</tr>
							</thead>
							<tbody>
							
							<tr>
								<td>1</td>	
								<td>25</td>
								<td>0.075</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr>
								<td>2</td>	
								<td>30</td>
								<td>0.09</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr>
								<td>3</td>	
								<td>32</td>
								<td>0.096</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>


							<tr>
								<td>4</td>	
								<td>35</td>
								<td>0.105</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr>
								<td>5</td>	
								<td>34</td>
								<td>0.103</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr>
								<td>6</td>	
								<td>33</td>
								<td>0.099</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							
							
							</tbody>
						</table>
						<div class="text-right pt-5">
							
							<a href="#" class="btn btn-custom mr-2" id="back2">Back to Experiment</a>
							<a href="#" class="btn btn-custom custom-2">Conclusion</a>
						</div>
					</div>
				</div>
			  </div>
		</div>
	</div>
	


  
  <!-- Modal -->
  <div class="modal fade" id="instructions" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	  <div class="modal-content">
		<div class="modal-header bg-purple">
		  <h3 class="modal-title" id="exampleModalCenterTitle">Instructions</h3>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <ol>
			<li>Animals are divided into two groups (6 animals in each).</li>
			<li>Administer one group with the drug to be tested and other with vehicle by oral route.</li>
			<li>Put one animal at a time in the Actophotometer</li>
			<li>Start the instrument</li>
			<li>Count the locomotor activity for 10 minutes.</li>
			<li>Repeat the procedure at the interval of 30 minutes.</li>
			<li>Record the observations.</li>
			<li>The mice in test group are injected Diazepam (1 Mg /kg Oral) and locomotor activity is measures twice as stated above.</li>
		  </ol>
		</div>
		<div class="modal-footer justfy-content-center bg-danger text-white">
		  <p>Health Education Bureau</p>
		</div>
	  </div>
	</div>
  </div>
</section>
</div>
@endsection
