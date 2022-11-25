
var ratType;
var ratNumber;
var reading1;
var reading2;
var reading3;
var downloadTimer;


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

  var drugType  = $('#drug-type').val();

  ratType   = rat_type;
  ratNumber = rat_number;

  var videoSrc = 'http://localhost:8000/images/experiment_4/hotplate.mp4';
  const video  =  document.getElementById('video1');
  video.src = videoSrc;
  // video.pause();
  video.currentTime = 0;
  video.load();
  video.play();


  drug1  = [0, [11,6,120], [16,6,132], [12,4,125], [13,5,120], [9,5,117] ];
  drug2  = [0, [5,2,50], [4,3,52], [3,2,48], [3,2,60], [2,3,55] ];

  if(drugType == 'd1') {
      reading1  = drug1[ratNumber][0];
      reading2  = drug1[ratNumber][1];
      reading3  = drug1[ratNumber][2];
  } else {
      reading1  = drug2[ratNumber][0];
      reading2  = drug2[ratNumber][1];
      reading3  = drug2[ratNumber][2];
  }

  clearInterval(downloadTimer);
  handleCounter(1,reading1,reading2,reading3,ratNumber,drugType);

});


function saveReadings() {

  var drugType  = $('#drug-type').val();

  document.getElementById(drugType+"-r-"+ratNumber+"-1").innerHTML = reading1;
  document.getElementById(drugType+"-r-"+ratNumber+"-2").innerHTML = reading2;
  document.getElementById(drugType+"-r-"+ratNumber+"-3").innerHTML = reading3;
  document.getElementById(drugType+"-r-"+ratNumber+"-4").innerHTML = "Recovery";

  $('#d-1').val('');
  $('#d-2').val('');
  $('#d-3').val('');
  $('#status').val('');

}

function handleCounter(start,reading1,reading2,reading3,ratNumber,drugType) {

  var timeleft  = reading3;
  var starttime = start;

  downloadTimer = setInterval(function(){
     
    if(starttime == reading1) {
      $('#d-1').val(reading1);
    }

    if(starttime  == reading2) {
      $('#d-2').val(reading2);
    }

    if(starttime == reading3) {
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