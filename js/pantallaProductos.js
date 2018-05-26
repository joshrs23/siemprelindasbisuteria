$(document).ready(function($){
	var ventana_ancho = $(window).width();
  		//
  		if(ventana_ancho < 784){//averiguar tamaño real a cambiar
				$(".pantalla1").removeClass("row");
				$(".pantalla2").removeClass("col-4");console.log("si");
			}
		//funcion
	$(window).resize(function() {
  		var ventana_ancho = $(window).width();
  		if(ventana_ancho > 784){
			$(".pantalla1").addClass("row");
			$(".pantalla2").addClass("col-4");
		}
		else{
			if(ventana_ancho < 784){//averiguar tamaño real a cambiar
				$(".pantalla1").removeClass("row");
				$(".pantalla2").removeClass("col-4");
			}
			else{
				
			}
		}
  		//
  	//acaba funcion
	});
	//
});  
//740