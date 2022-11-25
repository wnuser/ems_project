
var ratType;
var ratNumber;
var reading1;
var reading2;
var reading3;
var downloadTimer;
var defaultcounter;

$(document).ready(function(){
  // alert('tst');
    $('#nav-instructions').click();

})

// function openexperiment() {
//   $('#nav-instructions').click();

// }


function testfunc()
{
   // logic for reload video 
  const video = document.getElementById('video1');
  video.play();
}

function refreshRats() {

  $('.tray-rat').show();
}

$(".tray-rat").click(function () {
  
  $(this).hide();
  var rat_type   = $(this).attr("ratType");
  var rat_number = $(this).attr("ratNumber");

  ratType   = rat_type;
  ratNumber = rat_number;

  var videoSrc = 'http://localhost:8000/images/experiment_4/hotplate.mp4';
  const video  =  document.getElementById('video1');
  video.src = videoSrc;
  // video.pause();
  video.currentTime = 0;
  video.load();
  video.play();

  drug1  = [0, [62,"Clonic convulsions",4], [55,"Jerky movement & Sturb's tail",5], [72,"Clonic convulsions",3], [75,"Clonic convulsions",5], [67,"Jerky movement & Sturb's tail",3] ];
  drug2  = [0, [0,"No Convulsions",0], [0,"No Convulsions",0], [130,"Clonic convulsions",2.4], [0,"No Convulsions",0], [120,"Clonic convulsions",2] ];

  if(drugType == 'd1') {
      reading1  = drug1[ratNumber][0];
      reading2  = drug1[ratNumber][1];
      reading3  = drug1[ratNumber][2];
  } else {
      reading1  = drug2[ratNumber][0];
      reading2  = drug2[ratNumber][1];
      reading3  = drug2[ratNumber][2];
  }

  if(reading1 > reading3) {
    defaultcounter  = reading1;
  } else {
    defaultcounter = reading3
  }

  clearInterval(downloadTimer);
  handleCounter(1,reading1,reading2,reading3,ratNumber,drugType,defaultcounter);

});


function saveReadings() {

  var data1 = $('#d-1').val();
  var data2 = $('#d-2').val();
  var data3 = $('#d-3').val();

  var drugType  = $('#drug-type').val();

  console.log(data1, data2, data3,ratType, ratNumber,drugType);

  document.getElementById(drugType+"-r-"+ratNumber+"-1").innerHTML = data1;
  document.getElementById(drugType+"-r-"+ratNumber+"-2").innerHTML = data2;
  document.getElementById(drugType+"-r-"+ratNumber+"-3").innerHTML = data3;
  document.getElementById(drugType+"-r-"+ratNumber+"-4").innerHTML = "Recovery";   
}

function handleCounter(start,reading1,reading2,reading3,ratNumber,drugType,defaultcounter) {

  var timeleft  = defaultcounter;
  var starttime = start;

  downloadTimer = setInterval(function(){
     
    if(starttime == reading1) {
      $('#d-1').val(reading1);
      $('#d-2').val(reading2);

    }

    if(starttime >= reading3) {
      $('#d-3').val(reading3);
      $('#status').val("Recovery");
    }

    if(timeleft <= starttime){
      document.getElementById("counter-span").innerHTML = "Time Finished";
    } else {
      document.getElementById("counter-span").innerHTML = starttime;
    }

    starttime += 1;
  }, 1000);

}