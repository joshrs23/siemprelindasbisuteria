$(document).ready(function($){
	var ventana_ancho = $(window).width();
  		//texto
  		if(ventana_ancho < 1533 && ventana_ancho > 1413){
			$("#texto3").html('<br><br> EXCELENTES<br> ACABADOS');
		}
		else{
			if(ventana_ancho < 1413 && ventana_ancho > 899){
				$("#texto3").html('<br> EXCELENTES<br> ACABADOS');
			}
			else{
				
			}
		}
		
		//titulos
	
		if(ventana_ancho < 1136 && ventana_ancho > 899){
			$("#texto1").html('<h4 id="texto1" class="textoIndex"><br> PASION POR EL ARTE DE LA JOYERIA </h4>');
			$("#texto2").html('<h4 id="texto2" class="textoIndex"><br> DISEÑOS EXCLUSIVOS </h4>');
			$("#texto3").html('<h4 id="texto3" class="textoIndex"><br> EXCELENTES<br> ACABADOS </h4>');
			$("#texto4").html('<h4 id="texto4" class="textoIndex"><br> MATERIALES DE LA MEJOR<br> CALIDAD </h4>');
		}
		else{
			if(ventana_ancho < 899 ){
				$("#texto1").html('<h5 id="texto1" class="textoIndex"><br> PASION POR EL ARTE DE LA JOYERIA </h5>');
				$("#texto2").html('<h5 id="texto2" class="textoIndex"><br> DISEÑOS EXCLUSIVOS </h5>');
				$("#texto3").html('<h5 id="texto3" class="textoIndex"><br> EXCELENTES<br> ACABADOS </h5>');
				$("#texto4").html('<h5 id="texto4" class="textoIndex"><br> MATERIALES DE LA MEJOR<br> CALIDAD </h5>');
			}
			else{
				
			}
		}
		
		//division nueva pagina
		if(ventana_ancho < 740 ){//lado3
				$("#lado31").removeClass("row");
				$("#lado32").removeClass("col-7");
				$("#lado33").removeClass("col-5");
				$("#lado32").addClass("col");
				$("#lado33").addClass("col");
				//pagina completa	
				$("#ladoA").removeClass("col-7");
				$("#ladoB").removeClass("col-5");
				$("#ladoA").addClass("col-6");
				$("#ladoB").addClass("col-6");
			}			
		//redes sociales
		if(ventana_ancho > 974){
			$("#redes2").addClass("Noaparece");
			$("#carouselExampleIndicators").addClass("carouselExampleIndicators1");
		}
		else{
			$("#redes2").removeClass("Noaparece");
			$("#carouselExampleIndicators").removeClass("carouselExampleIndicators1");
		}
		//funcion
	$(window).resize(function() {
  		var ventana_ancho = $(window).width();
  		//texto
  		if(ventana_ancho > 1533){
			$("#texto3").html('<br><br><br> EXCELENTES<br> ACABADOS');
		}
		else{
			if(ventana_ancho < 1533 && ventana_ancho > 1413){
				$("#texto3").html('<br><br> EXCELENTES<br> ACABADOS');
			}
			else{
				if(ventana_ancho < 1413 && ventana_ancho > 899){
					$("#texto3").html('<br> EXCELENTES<br> ACABADOS');
				}
				else{
					
				}
			}
		}
		//titulos
		if(ventana_ancho > 1136){
			$("#texto1").html('<h2 id="texto1" class="textoIndex"><br> PASION POR EL ARTE DE LA JOYERIA </h2>');
			$("#texto2").html('<h2 id="texto2" class="textoIndex"><br> DISEÑOS EXCLUSIVOS </h2>');
			$("#texto3").html('<h2 id="texto3" class="textoIndex"><br> EXCELENTES<br> ACABADOS </h2>');
			$("#texto4").html('<h2 id="texto4" class="textoIndex"><br> MATERIALES DE LA MEJOR<br> CALIDAD </h2>');
		}
		else{
			if(ventana_ancho < 1136 && ventana_ancho > 899){
				$("#texto1").html('<h4 id="texto1" class="textoIndex"><br> PASION POR EL ARTE DE LA JOYERIA </h4>');
				$("#texto2").html('<h4 id="texto2" class="textoIndex"><br> DISEÑOS EXCLUSIVOS </h4>');
				$("#texto3").html('<h4 id="texto3" class="textoIndex"><br> EXCELENTES<br> ACABADOS </h4>');
				$("#texto4").html('<h4 id="texto4" class="textoIndex"><br> MATERIALES DE LA MEJOR<br> CALIDAD </h4>');
			}
			else{
				if(ventana_ancho < 899 ){
					$("#texto1").html('<h5 id="texto1" class="textoIndex"><br> PASION POR EL ARTE DE LA JOYERIA </h5>');
					$("#texto2").html('<h5 id="texto2" class="textoIndex"><br> DISEÑOS EXCLUSIVOS </h5>');
					$("#texto3").html('<h5 id="texto3" class="textoIndex"><br> EXCELENTES<br> ACABADOS </h5>');
					$("#texto4").html('<h5 id="texto4" class="textoIndex"><br> MATERIALES DE LA MEJOR<br> CALIDAD </h5>');
				}
				else{
					
				}
			}
		}
		//division nueva pagina
		if(ventana_ancho > 740 ){//lado3
			if (!$("#lado31").hasClass('row')){
				$("#lado32").removeClass("col");
				$("#lado33").removeClass("col");
				$("#lado31").addClass("row");
				$("#lado32").addClass("col-7");
				$("#lado33").addClass("col-5");	
				//pagina completa
				$("#ladoA").removeClass("col-6");
				$("#ladoB").removeClass("col-6");
				$("#ladoA").addClass("col-7");
				$("#ladoB").addClass("col-5");
			}
		}
		else{
			if(ventana_ancho < 740 ){//lado3
				$("#lado31").removeClass("row");
				$("#lado32").removeClass("col-7");
				$("#lado33").removeClass("col-5");
				$("#lado32").addClass("col");
				$("#lado33").addClass("col");
				//pagina completa	
				$("#ladoA").removeClass("col-7");
				$("#ladoB").removeClass("col-5");
				$("#ladoA").addClass("col-6");
				$("#ladoB").addClass("col-6");
			}			
		}
		//redes sociales
		if(ventana_ancho > 974){
			$("#redes2").addClass("Noaparece");
			$("#carouselExampleIndicators").addClass("carouselExampleIndicators1");
		}
		else{
			$("#redes2").removeClass("Noaparece");
			$("#carouselExampleIndicators").removeClass("carouselExampleIndicators1");
		}
	});
});  
//740