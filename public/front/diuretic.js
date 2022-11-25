
var ratNumber;

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

    ratNumber  = rat_number;
    const video = document.getElementById('video1');
    // video.pause();
    video.currentTime = 0;
    video.load();
    video.play();

    var reading     = $('#input-b').val();
    var animalType  = $('#animal-type').val();
    var drugType    = $('#drug-type').val();

    const data = [[0], [0,0.5, 1.5, 3,4,5], [0,1, 2, 3,4,5], [0,1.5, 2.75, 4, 5.25, 6.5], [0, 3,5,6,7,8]];
    

    setTimeout(function() {
        //your code to be executed after 1 second
       $('#input-b').val(data[drugType][ratNumber]);
       
    }, 21000);

  });

  function refreshRats() {

      $('.tray-rat').show();
  }

  function saveReading()
  {
      var reading     = $('#input-b').val();
      var animalType  = $('#animal-type').val();
      var drugType    = $('#drug-type').val();

      const data = [[0], [0,0.5, 1.5, 3,4,5], [0,1, 2, 3,4,5], [0,1.5, 2.75, 4, 5.25, 6.5], [0, 3,5,6,7,8]];

      $('#input-b').val('');

      document.getElementById(drugType+"-d-"+ratNumber).innerHTML = data[drugType][ratNumber];
  }