
$(document).ready(function(){

		$(".id_selecion").click(function(){
			var id = this.id;
			console.log(id);
			
			$.ajax({
				url: "../modells/megustas.php",
				method: "POST",
				data:{id:id},
				dataType: 'json',
				/*beforeSend:function(){
						$("#"+id).val("....");
				},*/
                success:  function (data) {
                		var like = data['likes'];
                		var text = data['text'];

                        $("#likes_"+id).val(like);
                        $("#"+id).val(text);
                }	
			});
		});


});

	function onpopup(){
		setTimeout("location.href ='https://www.facebook.com/VocesTVe/'",3000);
		document.getElementById('popup').style.top = "0%";
	}

	function cambiar_status(id){
		console.log(id);
		$.ajax({
				url: "../modells/cambio_status.php",
				method: "POST",
				data:{id:id},
				/*beforeSend:function(){
						$("#"+id).val("....");
				},*/
                success:  function (data) {
                	if (data) {console.log("good");}else{console.log("bad")}
                	
                }	
			});
	}



	/*function offpopup(){
		document.getElementById('popup').style.display = "none";
	}*/
	