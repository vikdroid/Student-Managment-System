function error_html(error) {
	//generate error in bootstrap style.
	var errorhtml = " \
	<div class='alert alert-danger alert-dismissable'> \
		<a class='close' data-dismiss='alert'>&times;</a> \
		<strong>ERROR!!</strong>";
		errorhtml += error + "</div>";
	return errorhtml;
}

//validation function. for validating form;

function validate(){
	var name=$('#name').val();
	if(name==""){
		$('#error').html("");
		$('#error').html(error_html("Enter your name."));
		return false;
	}

	var email = $('#email').val();
	var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(regex.test(email) == false) {
		$('#error').html("");
		$('#error').html(error_html("Does not seem to be a correct email-id."));
		return false;
	}

	var password = $('#password').val().length;
	if(password < 6){
		$('#error').html("");
		$('#error').html(error_html("Minimum length of password should be 6."));
		return false;
	}

	var batch = $('#batch').val();
	if(batch == ""){
		$('#error').html("");
		$('#error').html(error_html("Enter your Batch. ex-(2010-2014)"));
		return false;
	}
	return true;
}
function validaterole(){


	var roleselection = $('#selectrole').val();
	if(roleselection == "") {
		$('#error').html("");
		$('#error').html(error_html(" Select your role."));
		return false;
	}
	return true;

}