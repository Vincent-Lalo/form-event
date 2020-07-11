
var connectives = {
	das: true,
	da: true,
	dos: true,
	do: true,
	de: true,
	e: true
};

function capitalize(str) {
	return str
	.split(" ")
	.map(function(word) {
		return !connectives[word.toLowerCase()]
		? word.charAt(0).toUpperCase() + word.slice(1).toLowerCase()
		: word.toLowerCase();
	})
	.join(" ");
};

$(".capitalize").keyup(function() {
	var cursorStart = this.selectionStart;
	var cursorEnd = this.selectionEnd;
	var capitalizedString = capitalize($(this).val());

	$(this).val(capitalizedString);
	this.setSelectionRange(cursorStart, cursorEnd);
});

function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

$(document).ready(function($){

	$(".empty-lastname").hide();
	$(".error-lastname").hide();

	$(".error-firstname").hide();
	$(".empty-firstname").hide();

	$(".error-email").hide();
	$(".invalid-email").hide();
	$(".empty-email").hide();

	$(".error-phone").hide();
	$(".empty-phone").hide();

	$(".form-valid").hide();


	$('#form-validation').submit(function(e){
		var error = true;
		$(".invalid-email").hide();

		var last_name = $("#last-name").val();
		var first_name = $("#first-name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();

		if(last_name === ""){
			error = false;
			$("#last-name").focus();
			$(".empty-lastname").show();
			$(".error-lastname").show();
		}
		else{
			$(".empty-lastname").hide();
			$(".error-lastname").hide();
		}

		if(first_name === ""){
			error = false;
			$("#first-name").focus();
			$(".error-firstname").show();
			$(".empty-firstname").show();
		}
		else{
			$(".error-firstname").hide();
			$(".empty-firstname").hide();
		}

		if(email === ""){
			error = false;
			$("#email").focus();
			$(".empty-email").show();
			$(".error-email").show();
		}
		else{
			$(".error-email").hide();
			$(".empty-email").hide();
		}

		if(email){
			if(!isEmail(email)){
				error = false;
				$("#email").focus();
				$(".invalid-email").show();
				$(".error-email").show();
			}
			else{
				$(".invalid-email").hide();
				$(".error-email").hide();
			}
		}

		if(phone === ""){
			error = false;
			$("#phone").focus();
			$(".empty-phone").show();
			$(".error-phone").show();
		}
		else{
			$(".error-phone").hide();
			$(".empty-phone").hide();
		}
		if(error){
			$.ajax({
				type:"post",
				url:"script/add-participant.php",
				data: {
					last_name:last_name,
					first_name:first_name,
					email:email,
					phone:phone
				},
				success: function(response){
					$("#last-name").val("");
					$("#first-name").val("");
					$("#email").val("");
					$("#phone").val("");
					$(".form-valid").show();
					$(".form-valid").html(response);
				}
			});
			return false;
		}
		else{
			return false;
		}
	});
});

document.getElementById('phone').addEventListener('input', function (e) {
	e.target.value = e.target.value.replace(/\D/g, '').replace(/(.{2})/g, '$1 ').trim();
});