		function see(){
		$.ajax({
			url: "modells/votos.php",
			method: "POST",
			success: function(data){
				$("#ver_publicaciones").html(data);
			}
		});
		}
	//setInterval(function(){see();},100);
	see();