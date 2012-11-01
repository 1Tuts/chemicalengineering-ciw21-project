
	<div class="footer"></div>
</div>
<script type="text/javascript">
	var left=0;

	function auto_slide(){

		if(left <= -1980){
			document.getElementById('scroll').style.left ='0';
			left = 0;
		}
		else {
			left = left-660;
			document.getElementById('scroll').style.left = left + 'px';
		}

		for(var j=0; j<4 ; j++){
			document.getElementById('circle' + (j+1)).style.backgroundColor='#ddd';	
		}
		document.getElementById('circle' + (-left/660+1)).style.backgroundColor='#111';	


	}
	setInterval(auto_slide,5000);


	function show_pic(i){

		document.getElementById('scroll').style.left = -(i-1)*660 + 'px';
		left = -(i-2)*660;

		for(var j=0; j<4 ; j++){
			document.getElementById('circle' + (j+1)).style.backgroundColor='#ddd';	
		}
		document.getElementById('circle' + i).style.backgroundColor='#111';
	}

	function pageScroll(){
		window.scrollBy(0,-10); // horizontal and vertical scroll increments
    	scrolldelay = setTimeout('pageScroll()',10); // scrolls every 100 milliseconds
	}
	function stopScroll(){
		clearTimeout(scrolldelay);
	}



	$(document).ready(function(){

		  $("div.right").mouseenter(function(){

				 $("div.go-to-right img").animate({marginTop:"-=14px"},200);
		 });

		 $("div.right").mouseleave(function(){

				 $("div.go-to-right img").animate({marginTop:"+=14px"},200);
		 });

	});


	$(document).ready(function(){

		  $("div.left").mouseenter(function(){

				 $("div.go-to-left img").animate({marginTop:"-=14px"},200);
		 });

		 $("div.left").mouseleave(function(){

				 $("div.go-to-left img").animate({marginTop:"+=14px"},200);
		 });

	});

</script>

</body>
</html>