$(document).ready(function($){
	var ventana_ancho = $(window).width();
  		//
  		if(ventana_ancho < 1114 && ventana_ancho >784){//averiguar tamaño real a cambiar
				$("#logoContacto").removeClass("col-6");
				$("#logoContacto").addClass("col-12");
				$("#formContacto").removeClass("col-12");
				$("#formContacto").addClass("col-6");
				$("#datosContacto").removeClass("col-12");
				$("#datosContacto").addClass("col-6");
				$("#exampleFormControlTextarea1").attr('rows',4);
			}
			else{
				if(ventana_ancho < 784 ){//averiguar tamaño real a cambiar
					$("#logoContacto").removeClass("col-6");
					$("#logoContacto").addClass("col-12");
					$("#formContacto").removeClass("col-6");
					$("#formContacto").addClass("col-12");
					$("#datosContacto").removeClass("col-6");
					$("#datosContacto").addClass("col-12");
					$("#exampleFormControlTextarea1").attr('rows',4);
				}
				else{
					
				}
			}
		//funcion
	$(window).resize(function() {
  		var ventana_ancho = $(window).width();
  		//logo
  		if(ventana_ancho > 1114){
			$("#logoContacto").addClass("col-6");
			$("#logoContacto").removeClass("col-12");
			$("#exampleFormControlTextarea1").attr('rows',8);
		}
		else{
			if(ventana_ancho < 1114 ){//averiguar tamaño real a cambiar
				$("#logoContacto").removeClass("col-6");
				$("#logoContacto").addClass("col-12");
				$("#exampleFormControlTextarea1").attr('rows',4);
			}
			
		}
		//formulario y fotos allado
		if(ventana_ancho >784){//averiguar tamaño real a cambiar
				$("#formContacto").removeClass("col-12");
				$("#formContacto").addClass("col-6");
				$("#datosContacto").removeClass("col-12");
				$("#datosContacto").addClass("col-6");
			}
			else{
				if(ventana_ancho < 784 ){//averiguar tamaño real a cambiar
					$("#formContacto").removeClass("col-6");
					$("#formContacto").addClass("col-12");
					$("#datosContacto").removeClass("col-6");
					$("#datosContacto").addClass("col-12");
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