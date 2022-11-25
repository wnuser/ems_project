function test() {
	alert('test alert');
}

var downloadTimer;
var rat_type;
var rat_number;
var ratType;
var ratNumber;
var testVar = 12121212;
var defaultcounter = 4;

$( document ).ready(function() {
	$("#administer").click(function () {
		$(".video-wrapper").show();
		$(this).addClass("disabled");
	});
});

function testfunc()
{
   // logic for reload video 
  const video = document.getElementById('video1');
  video.play();
}


$(".tray-rat").click(function () {
  
  $(this).hide();
  var rat_type   = $(this).attr("ratType");
  var rat_number = $(this).attr("ratNumber");
  defaultcounter = $(this).attr("counter");
  defaultcounter  = parseInt(defaultcounter) + 1;
  console.log(rat_type+"rat_type");

  ratType    = rat_type;
  ratNumber  = rat_number;

  $(".video-wrapper-final").addClass("show-vd");

  const video = document.getElementById('video1');
  // video.pause();
  video.currentTime = 0;
  video.load();
  video.play();

  $(".calculation-box").show();

  // logic for refresh counter 
  clearInterval(downloadTimer);
  handleCounter(1);

  // logic for getting data from inputs and storing in table and local storage 

});


function saveReading() {

  var Experiment1_1_a = 135;
  var Experiment1_2_a = 164;
  var Experiment1_3_a = 150;
  var Experiment1_4_a = 140;
  var Experiment1_5_a = 137;
  var Experiment1_6_a = 158;

  var inputB  = $('#input-b').val();

  if(ratType == 1) {
    var subsResult   = parseInt(Experiment1_1_a) - parseInt(inputB);
  } else {
    var subsResult   = parseInt(inputB) - parseInt(Experiment1_1_a);
  }


  var divideResult = parseInt(parseInt(subsResult)*100)/parseInt(Experiment1_1_a);


  if(subsResult) {

    // var ratNumber  = rat_number;
    // var ratType    = rat_type;
    console.log(ratNumber, 'rat_number',ratType);
    
      if(ratType == 1) {

        document.getElementById("ch_"+ratNumber+"_b").innerHTML    = inputB;
        document.getElementById("ch_"+ratNumber+"_ab").innerHTML   = (subsResult).toFixed(2);
        document.getElementById("ch_"+ratNumber+"_per").innerHTML  = (divideResult).toFixed(2);
      }  

      if(ratType ==2 ){

        document.getElementById("ca_"+ratNumber+"_b").innerHTML    = inputB;
        document.getElementById("ca_"+ratNumber+"_ab").innerHTML   = (subsResult).toFixed(2);
        document.getElementById("ca_"+ratNumber+"_per").innerHTML  = (divideResult).toFixed(2);
        
      }
  }
  
  $('#input-b').val('');

  // console.log(inputA+"   "+inputB+" "+subsResult+" "+divideResult);
  
  console.log('last test');
}


function handleCounter(start) {

  var timeleft  = defaultcounter;
  var starttime = start;
  downloadTimer = setInterval(function(){

    if(timeleft <= starttime){
      document.getElementById("counter-span").innerHTML = "Time Finished";
    } else {
      document.getElementById("counter-span").innerHTML = starttime;
    }
    starttime += 1;
  }, 1000);

}

  $('#back2').click(function(e){
    e.preventDefault();
    $('#nav-profile').tab('show');
  });

// });

document.getElementById('video1').addEventListener('ended',myHandler,false);
    function myHandler(e) {
        $(".video-wrapper").hide();
        $(".rat-wrapper").addClass("move-rat");
        $(".action-wrapper").hide();
        $(".tube-box").addClass("tube-hide");
    }
  

