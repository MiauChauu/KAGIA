$(document).ready(function(){
  var urlParams = new URLSearchParams(window.location.search);
  var offer = urlParams.get('offer');
  console.log(offer);
  console.log($("#offer_id").val());
	$("#offer_id").val(offer);
	console.log($("#offer_id").val());
	  
  
});