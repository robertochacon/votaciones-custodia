
$(document).ready(function(){

		//guardando los temas en tiempo real con ajax
		//$(document).on("click",".id_selecion",function(e){
		//	e.preventDefault();
		$(".id_selecion").click(function(){

			//id del voto selecionado
			var id = this.id;
			console.log(id);
			// var categoria = document.getElementById('categoria').value;
			
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

	/*function offpopup(){
		document.getElementById('popup').style.display = "none";
	}*/
	