function validate(){
  var cvv1 = document.getElementById("cvv1").value;
  var cvv2 = document.getElementById("cvv2").value;
  if(cvv1 == cvv2){
    alert("Payment Successfully Done!");
    window.location.href = "paymentplan.html";
  }else{
    alert("Payment Unsuccessful!");
    return false;

  }
}
$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
function onrate(rate){
	if(rate == 1){
		alert("You Have Rated 1 Star!");
	}else if(rate == 2){
		alert("You Have Rated 2 Stars!");
	}else if(rate == 3){
		alert("You Have Rated 3 Stars!");
	}else if(rate == 4){
		alert("You Have Rated 4 Stars!");
	}else if(rate == 5){
		alert("You Have Rated 5 Stars!");
	}
}