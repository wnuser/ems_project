var downloadTimer;
var rat_type;
var rat_number;
var ratType;
var ratNumber;
var testVar = 12121212;
var defaultcounter1 = 40;
var defaultcounter2 = 40;
var defaultcounter3 = 40;


function playVideoFunction()
{
  // logic for reload video 
  const video = document.getElementById('video1');
  video.play();

}

function testfunc()
{
   // logic for reload video 
  const video = document.getElementById('video1');
  video.play();
}

$(".tray-rat").click(function () {
  
    // $(this).hide();
    // $('.first-tray').hide();
    var set  = $(this).attr('set');
    const boxes = document.getElementsByClassName('set-'+set);
    for (const box of boxes) {
      // 👇️ Remove element from DOM
      box.style.display = 'none';

      

      // 👇️ hide element (still takes up space on page)
      // box.style.visibility = 'hidden';
    }

    var rat_type    = $(this).attr("ratType");
    var rat_number  = $(this).attr("ratNumber");

    if(set ==1) {
      defaultcounter1 = 66;
      defaultcounter2 = 60;
      defaultcounter3 = 61;
    }

    if(set  == 2) {
      defaultcounter1 = 62;
      defaultcounter2 = 63;
      defaultcounter3 = 61;
    }

    if(set  == 3) {
      defaultcounter1 = 5;
      defaultcounter2 = 8;
      defaultcounter3 = 6;
    }

    if(set  == 4) {
      defaultcounter1 = 5;
      defaultcounter2 = 8;
      defaultcounter3 = 7;
    }

    // defaultcounter  = $(this).attr("counter");
    // defaultcounter  = parseInt(defaultcounter) + 1;
    
    // console.log(rat_type+"rat_type");
    ratType    = rat_type;

    if(ratType == 1) {
       $('#group').val('a');
    }

    if(ratType == 2) {
      $('#group').val('b');
    }

    console.log(ratType, 'ratType tttt');
    
    ratNumber  = rat_number;
  
    $(".video-wrapper-final").addClass("show-vd");
  
    var videoSrc = 'http://localhost:8000/images/experiment_2/actophotometer.mp4';
    const video  =  document.getElementById('video1');
    video.src = videoSrc;

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

    // alert(1);

    var m1s1  = $('#m1-s1').val();
    var m2s1  = $('#m2-s1').val();
    var m3s1  = $('#m3-s1').val();

    var m1s2  = $('#m1-s2').val();
    var m2s2  = $('#m2-s2').val();
    var m3s2  = $('#m3-s2').val();

    var currentGroup  = $('#group').val();
    // console.log(currentGroup, 'currentGroup+++');

    document.getElementById(""+currentGroup+"-1").innerHTML    = m1s1;
    document.getElementById(""+currentGroup+"-2").innerHTML    = m2s1;
    document.getElementById(""+currentGroup+"-3").innerHTML    = m3s1;
    document.getElementById(""+currentGroup+"-4").innerHTML    = m1s2;
    document.getElementById(""+currentGroup+"-5").innerHTML    = m2s2;
    document.getElementById(""+currentGroup+"-6").innerHTML    = m3s2;

    $('#m1-s1').val('');
    $('#m2-s1').val('');
    $('#m3-s1').val('');
    $('#m1-s2').val('');
    $('#m2-s2').val('');
    $('#m3-s2').val('');

    if(currentGroup == 'b') {
      
      document.getElementById("sol-1").innerHTML    = 92.42;
      document.getElementById("sol-2").innerHTML    = 86.66;
      document.getElementById("sol-3").innerHTML    = 90.16;
      document.getElementById("sol-4").innerHTML    = 91.33;
      document.getElementById("sol-5").innerHTML    = 87.3;
      document.getElementById("sol-6").innerHTML    = 91.33;

    }

    // var Experiment1_1_a = 135;
    // var Experiment1_2_a = 164;
    // var Experiment1_3_a = 150;
    // var Experiment1_4_a = 140;
    // var Experiment1_5_a = 137;
    // var Experiment1_6_a = 158;
  
    // var inputB  = $('#input-b').val();
  
    // if(ratType == 1) {
    //   var subsResult   = parseInt(Experiment1_1_a) - parseInt(inputB);
    // } else {
    //   var subsResult   = parseInt(inputB) - parseInt(Experiment1_1_a);
    // }
  
  
    // var divideResult = parseInt(parseInt(subsResult)*100)/parseInt(Experiment1_1_a);
  
  
    // if(subsResult) {
  
    //   // var ratNumber  = rat_number;
    //   // var ratType    = rat_type;
    //   console.log(ratNumber, 'rat_number',ratType);
      
    //     if(ratType == 1) {
  
    //       document.getElementById("ch_"+ratNumber+"_b").innerHTML    = inputB;
    //       document.getElementById("ch_"+ratNumber+"_ab").innerHTML   = (subsResult).toFixed(2);
    //       document.getElementById("ch_"+ratNumber+"_per").innerHTML  = (divideResult).toFixed(2);
    //     }  
  
    //     if(ratType ==2 ){
  
    //       document.getElementById("ca_"+ratNumber+"_b").innerHTML    = inputB;
    //       document.getElementById("ca_"+ratNumber+"_ab").innerHTML   = (subsResult).toFixed(2);
    //       document.getElementById("ca_"+ratNumber+"_per").innerHTML  = (divideResult).toFixed(2);
          
    //     }
    // }
    
    // $('#input-b').val('');
  
    // // console.log(inputA+"   "+inputB+" "+subsResult+" "+divideResult);
    
    // console.log('last test');
  }
  
  
  function handleCounter(start) {
  
    var timeleft  = defaultcounter1;
    var timeleft2 = defaultcounter2;
    var timeleft3 = defaultcounter3;

    var starttime  = start;
    var starttime2 = start;
    var starttime3 = start;

    console.log(starttime, 'starttime');
    
    downloadTimer = setInterval(function(){
      
      // if(timeleft <= starttime){
      //   document.getElementById("counter-span").innerHTML = "Time Finished";
      // } else {

        if(starttime2 >= 9) {
          document.getElementById("counter1").value = starttime;
        }

        document.getElementById("counter2").value = starttime2;
        document.getElementById("counter3").value = starttime3;

      // }

      if(starttime2 >= 9) {
        if(timeleft >= starttime) {
          starttime  += 1;
  
        }
      }

      if(timeleft2 >= starttime2) {
        starttime2  += 1;

      }
      if(timeleft3 >= starttime3) {
        starttime3  += 1;

      }
      
      // starttime  += 1;
      // starttime2 += 1;
      // starttime3 += 1;

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
  
