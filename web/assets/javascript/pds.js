$("#btn_submit").click( function() {
	// validate the form
	// check if all questions are answered
	var aQuestions = new Array( "b1", "b2", "b3", "b4", "b5", 
								"c1", "c2", "c3", "c4", "c5", "c6", "c7", 
								"d1", "d2", "d3", "d4", "d5"
								);
								
	var bSuccess = true;
	var sFirstErrorField = "";
								
	for(i = 0; i < aQuestions.length; i++) {
		// determine the current field!
		var currentField = "pds_" + aQuestions[i];
		
		// clear all styles!
		$("input[name='" + currentField + "']").closest(".form-group").removeClass("has-error");
		$("input[name='" + currentField + "']").closest(".form-group").removeClass("has-success");
		
		// is the specific radio is selected?
		if($("input[name='" + currentField + "']").is(":checked")) {
			// console.log(currentField + "is checked");
			// everything is fine with this field!
			$("input[name='" + currentField + "']").closest(".form-group").addClass("has-success");
		}
		else {
			// this field is not entered!
			$("input[name='" + currentField + "']").closest(".form-group").addClass("has-error");
			bSuccess = false;
			if(sFirstErrorField == "") { sFirstErrorField = currentField; }
		}
	}
	
	if(bSuccess == false)
	{
		// scroll to the first error field!
		$('html, body').animate({
			scrollTop: $("input[name='" + sFirstErrorField + "']").closest(".form-group").offset().top
		}, 1000);
	}
	
	return bSuccess;
});


