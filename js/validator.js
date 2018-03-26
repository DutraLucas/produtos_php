$(function() {
	$("#username_error_message").hide();
	$("#preco_error_message").hide();

	var error_username = false;
	var error_preco = false;

	$("#form_username").focusout(function() {

		check_username();

	});

	$("#form_preco").focusout(function() {

		check_preco();

	});

	function check_username() {

		var username_length = $("#form_username").val().length;

		if(username_length < 5) {
			$("#username_error_message").html("Necessario ter mais de 5 caracteres");
			$("#username_error_message").show();
			error_username = true;
		} else {
			$("#username_error_message").hide();

		}

	}

	function check_preco() {

		var password_length = $("#form_preco").val().length;

		if(password_length < 1) {
			$("#preco_error_message").html("Este campo não pode ficar vazio");
			$("#preco_error_message").show();
			error_preco = true;
		} else {
			$("#preco_error_message").hide();
		}

	}

	$("#r_form").submit(function() {

		error_username = false;

		check_username();

		if(error_username == false) {
			return true;
		} else {
			return false;
		}

	});

});
