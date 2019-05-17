$(function() {
    $('#runSearch').click(function(e) {
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
