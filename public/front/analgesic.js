var ratType;
var ratNumber;
var defaultcounter;
var reading1;
var reading2;
var d;
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
  var duration   = $('#duration').val();


  ratType = rat_type;
  ratNumber = rat_number;

    var videoSrc = 'http://localhost:8000/images/experiment_4/hotplate.mp4';
    const video  =  document.getElementById('video1');
    video.src = videoSrc;

    // video.pause();
    video.currentTime = 0;
    video.load();
    video.play();

    var duration  = $('#duration').val();

    var object30 = {'p' : [0,5,8,7,9,7.25], 'j' : [0,9,8,10,12,9.75] };
    var object60 = {'p' : [0,5,8,6,8,6.75], 'j' : [0,11,10,9,12,10.5]};

    if(duration == 1) {
      reading1 = object30.p[ratNumber];
      reading2 = object30.j[ratNumber];
    } else {
      reading1 = object60.p[ratNumber];
      reading2 = object60.j[ratNumber];
    }

    if(reading1 > reading2) {
      defaultcounter  = reading1;
    } else {
      defaultcounter  = reading2;
    }

    if(duration == 1) {
      d= 30;
    } else {
      d = 60;
    }

    clearInterval(downloadTimer);
    handleCounter(1,reading1,reading2,ratNumber,d);
});

function saveReading()
{

    var paw       = $('#paw').val();
    var jump      = $('#jump').val();
    var duration  = $('#duration').val();

    $('#paw').val('');
    $('#jump').val('');

    document.getElementById("p-"+ratNumber+"-"+d).innerHTML = reading1;
    document.getElementById("j-"+ratNumber+"-"+d).innerHTML = reading2;

}

function handleCounter(start,reading1,reading2,ratNumber,d) {

  var timeleft  = defaultcounter;
  var starttime = start;

  downloadTimer = setInterval(function(){

    if(starttime == reading1) {
      $('#paw').val(reading1);
    }

    if(starttime  == reading2) {
      $('#jump').val(reading2);

    }

    if(timeleft <= starttime){
      document.getElementById("counter-span").innerHTML = "Time Finished";
    } else {
      document.getElementById("counter-span").innerHTML = starttime;
    }
    starttime += 1;
  }, 1000);

}