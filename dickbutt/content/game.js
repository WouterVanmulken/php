$(document).ready(function() {
    animateDiv();
    spectrum();

});
var move = 1;

function test() {
    if(move==1){
      move=0;
      stopStopwatch();
    }else{
      move=1;
      reset();
      startStopwatch();
      animateDiv();
    }
    console.log("clicked");
}
function start(){
  if(move==0){
    move=1;
    reset();
    startStopwatch();
    animateDiv();
  }
}
function stop(){
    move=0;
    stopStopwatch();
}
function setEasy(){
    $('#img').width(200).height(200);
    reset();
    stop();
    start();
}
function setMedium(){
    $('#img').width(100).height(100);
    reset();
    stop();
    start();
}
function setHard(){
    $('#img').width(50).height(50);
    reset();
    stop();
    start();
}

function makeNewPosition() {

    // Get viewport dimensions (remove the dimension of the div)
    var h = $(window).height() - 100;
    var w = $(window).width()  - 100;

    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);

    return [nh, nw];

}

function animateDiv() {
    console.log(move);
    if (move) {
        var newq = makeNewPosition();
        $('.a').animate({
            top: newq[0],
            left: newq[1]
        }, function() {
            animateDiv();
        });
    }

}

//=============================================counter=============================================================

var	clsStopwatch = function() {
		// Private vars
		var	startAt	= 0;	// Time of last start / resume. (0 if not running)
		var	lapTime	= 0;	// Time on the clock when last stopped in milliseconds

		var	now	= function() {
				return (new Date()).getTime();
			};

		// Public methods
		// Start or resume
		this.start = function() {
				startAt	= startAt ? startAt : now();
			};

		// Stop or pause
		this.stop = function() {
				// If running, update elapsed time otherwise keep it
				lapTime	= startAt ? lapTime + now() - startAt : lapTime;
				startAt	= 0; // Paused
			};

		// Reset
		this.reset = function() {
				lapTime = startAt = 0;
			};

		// Duration
		this.time = function() {
				return lapTime + (startAt ? now() - startAt : 0);
			};
	};

var x = new clsStopwatch();
var $time;
var clocktimer;

function pad(num, size) {
	var s = "0000" + num;
	return s.substr(s.length - size);
}

function formatTime(time) {
	var h = m = s = ms = 0;
	var newTime = '';

	h = Math.floor( time / (60 * 60 * 1000) );
	time = time % (60 * 60 * 1000);
	m = Math.floor( time / (60 * 1000) );
	time = time % (60 * 1000);
	s = Math.floor( time / 1000 );
	ms = time % 1000;

	newTime = pad(h, 2) + ':' + pad(m, 2) + ':' + pad(s, 2) + ':' + pad(ms, 3);
	return newTime;
}

function show() {
	$time = document.getElementById('time');
	update();
}

function update() {
	$time.innerHTML = formatTime(x.time());
}

function startStopwatch() {
  console.log("start");
	clocktimer = setInterval("update()", 1);
	x.start();
}

function stopStopwatch() {
	x.stop();
	clearInterval(clocktimer);
}

function reset() {
	stopStopwatch();
	x.reset();
	update();
}




// $(document).ready(function() {


function spectrum(){
  var hue = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
  $('#div').animate( { backgroundColor: hue }, 1000);
  spectrum();
}

// });
