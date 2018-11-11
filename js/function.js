function snimi()
{
	var title =$('#title').val();
	var description =$('#description').val();
	var email =$('#email').val();
	var _token = $('#crf_token').val();
	$('#spiner').show();
	$.ajax({
		   type:'POST',
		 url:'provera',
		 data: { title : title , description:description,email:email, _token:_token},
  		 success: function (data) 
		 {
		 	$('#spiner').hide();
		 	
		 	// var data = JSON.parse(ret);
			if(data.flag== true)
			{
				alert(data.msg);
		    }
		    else
		    {
		    	//alert(data.msg);
		    	alert("Data enter success");
		    	//window.location.href = '/oglasavanje';
		    }
		 }       

	});
}


