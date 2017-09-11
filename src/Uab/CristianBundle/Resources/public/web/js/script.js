var firstRun=1;

$(document).ready(function(){
    //$("button").click(function(){
       // $("label").css("color", "red");
       //   $("span").css("color", "brown");
        //  $("p").css("color", "green");
        //  $("h1").css("color", "green");
    if (firstRun===1){
		$(".cristianli").toggleClass("selectedLi");
		firstRun++;
	}

$("#demoBtn").click(function myMove() {
    //var elem = document.getElementById("animate");
    var elem = $("#animate");
    elem.animate({
    	height:'100px',
    	width:'100px'
    }, { duration: 100, queue: true });

	elem.animate({
            left: '250px',
            height: '+=150px',
            width: '+=150px'
        }, { duration: 1000, queue: true });

	elem.animate({
	       left: '0px',
	       height: '-=150px',
	       width: '-=150px'
    	}, { duration: 1500, queue: true });

	  var elem = $("#animate");
    elem.animate({
    	height:'0px',
    	width:'0px'
    }, { duration: 100, queue: true });

	  //elem.hide;
    //var pos = 0;
    //var id = setInterval(frame, 1);
    //function frame() {
    //    if (pos == 1000) {
    //        clearInterval(id);
    //        elem2.css("visibility", "hidden");
    //    } else {
     //       pos++;
     //       elem.style.top = pos + 'px';
     //       elem.style.left = pos + 'px';
    //    }
    //}//
    
    });
});