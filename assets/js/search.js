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



var specialKeys = new Array();
specialKeys.push(8);  //Backspace
specialKeys.push(9);  //Tab
specialKeys.push(46); //Delete
specialKeys.push(36); //Home
specialKeys.push(35); //End
specialKeys.push(37); //Left
specialKeys.push(39); //Right

function IsAlphaNumeric(e) {
   var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
   var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || keyCode == 32 || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
   document.getElementById("error").style.display = ret ? "none" : "inline";
   return ret;
}
