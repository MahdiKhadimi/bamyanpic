$(document).ready(function() {
	
	$("a#print").click(function() {
		window.print();
	});
	
	
	window.setTimeout(function() {
		$(".alert").slideUp(500);
	}, 5000);
	
	
	$("a.delete").click(function(event) {
		var result = window.confirm("Are you sure you want to delete?");
		if(!result) {
			event.preventDefault();
		}
	});	  
   

	let intervalTime  = $('#examTime').text();
	function showTimer (){

		let examTime  = $('#examTime').text();
	    examTime--
		if(examTime==0){
			$('#examResultSubmit').click();
		}else{
			$('#examTime').text(examTime)

		}
	
	}

	setInterval(showTimer,intervalTime*1000);
   
});



// This function use to validate checkboxes 
function switchCheck(id){
	let examId = id.split('.');
	 examId = examId[0];
	
	 document.getElementById(examId+"."+1).checked=false;
	 document.getElementById(examId+"."+2).checked=false;
	 document.getElementById(examId+"."+3).checked=false;
	 document.getElementById(examId+"."+4).checked=false;

	 document.getElementById(id).checked=true;
}







//all ajax code here





