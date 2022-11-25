
var downloadTimer;

$( document ).ready(function() {
  $("#administer").click(function () {
    $(".video-wrapper").show();
    $(this).addClass("disabled");
});


$(".tray-rat").click(function () {
  
  $(this).hide();
  var rat_type   = $(this).attr("ratType");
  var rat_number = $(this).attr("ratNumber");
  console.log(rat_type+"rat_type");
  
  $(".video-wrapper-final").addClass("show-vd");
  $(".calculation-box").show();

  // logic for reload video
  const video = document.getElementById('video2');
  video.pause();
  video.currentTime = 0;
  video.load();

  // logic for refresh counter 
  clearInterval(downloadTimer);
  handleCounter(1);

  // logic for getting data from inputs and storing in table and local storage 


  
});

$('#submit-reading').on('click', function(){

  console.log('coming here');
  
    
  var Experiment1_1_a = 135;
  var Experiment1_2_a = 164;
  var Experiment1_3_a = 150;
  var Experiment1_4_a = 140;
  var Experiment1_5_a = 137;
  var Experiment1_6_a = 158;

  var inputB  = $('#input-b').val();

  var subsResult   = parseInt(Experiment1_1_a) - parseInt(inputB);
  var divideResult = parseInt(parseInt(subsResult)*100)/parseInt(Experiment1_1_a);

  if(subsResult) {

      if(rat_type == 1) {

        document.getElementById("ch_"+rat_number+"_b").innerHTML    = inputB;
        document.getElementById("ch_"+rat_number+"_ab").innerHTML   = (subsResult).toFixed(2);
        document.getElementById("ch_"+rat_number+"_per").innerHTML  = (divideResult).toFixed(2);
      }  
  }
  
  $('#input-b').val('');

  // console.log(inputA+"   "+inputB+" "+subsResult+" "+divideResult);
  
  console.log('last test');
})

function handleCounter(start) {

  var timeleft  = 60;
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
  })
});

document.getElementById('video1').addEventListener('ended',myHandler,false);
    function myHandler(e) {
        $(".video-wrapper").hide();
        $(".rat-wrapper").addClass("move-rat");
        $(".action-wrapper").hide();
        $(".tube-box").addClass("tube-hide");
    }
  