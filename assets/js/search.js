$(function() {
    $('#runSearch').click(function(e) {
    document.getElementById("#summary").innerHTML	= "";
		e.preventDefault();
		var dataPost	= { "qry": document.getElementById("qryValue").value}
		var urlAjax		= "/search/"+document.getElementById("qryType").value;
		$.ajax({
			cache:false,
			type: "POST",
			url: urlAjax,
			contentType: "application/json",
			data: JSON.stringify(dataPost) ,
			error: function(data) {console.log(data); },
			complete: function (res) {
				//var response = JSON.stringify(res.responseText);
				//document.getElementById("#summary").innerHTML	= response;
				//alert(jQuery.parseJSON(response));
				document.getElementById("#summary").innerHTML	= res.responseText;
			},
			dataType: 'json',
			beforeSend: function (xhr) {
				xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
			},
			headers: {
				'Access-Control-Allow-Origin': '*'
			}
		});
	});
});


$('qryValue').bind('keypress', function(e) {// Kami.2013.12.24.10:57 Allow only letters, numbers, and @ , . - _
var allowedCode = [8, 13, 32, 44, 45, 46, 95];
var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode :
	  ((e.which) ? e.which : 0));
 if (charCode > 31 && (charCode < 64 || charCode > 90) &&
	(charCode < 97 || charCode > 122) &&
	(charCode < 48 || charCode > 57) &&
	(allowedCode.indexOf(charCode) == -1)) {
	e.preventDefault();
	$('.alert-box.onerror').html('<h3>ALLOW CHARACTERS: a..z A..Z 0..9 - _ . , @</h3>').fadeIn();
	return false;
 }
});
