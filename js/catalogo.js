$(document).ready(function() {

        event.preventDefault();
        $.post("server/buscar1.php", {tipo: tipo}, function(respuesta) {

                 var tabla = $("#todo").find('div');
                 var cantidad=0;
                 tabla.empty();
                 var output="";
                 prueba = JSON.parse(respuesta);
                 //inicio paginacion
                 cantidad=prueba.length/48;
                 output="<nav aria-label='Page navigation example'><ul class='pagination justify-content-end'>";

                 if(posicion=="1"){
                  output= output+"<li class='page-item disabled'><a class='page-link' href='#' tabindex='-1'>Previous</a></li>";
                 }
                 else{
                  output= output+"<li class='page-item'><a class='page-link' href='productos.php?tipo="+tipo+"&posicion="+(parseInt(posicion)-1)+"' tabindex='productos.php?tipo="+tipo+"&posicion="+(parseInt(posicion)-1)+"'>Previous</a></li>";//mod
                 }

                 var i;

                 for(i = 0; i < cantidad; i++){
                    output= output+"<li class='page-item'><a class='page-link' href='productos.php?tipo="+tipo+"&posicion="+(i+1)+"'>"+(i+1)+"</a></li>";
                 }

                 if(posicion==Math.floor(cantidad+1)){
                    output= output+"<li class='page-item  disabled'><a class='page-link' href='-1'>Next</a></li>";
                 }
                 else
                 {
                   output= output+"<li class='page-item '><a class='page-link' href='productos.php?tipo="+tipo+"&posicion="+(parseInt(posicion)+1)+"'>Next</a></li>";//mod
                 }
                cantidad=prueba.length;
                output= output+"</ul></nav>";
                $.post("server/buscar3.php", {tipo: tipo,posicion:posicion,cantidad:cantidad}, function(respuesta2) {
                    //final paginacion
                    //inicio catalogo
                    
                      prueba2 = JSON.parse(respuesta2);
                      var cont = 0;
                      var validador=0;
                      var ventana_ancho = $(window).width();
                      for (var j in prueba2) {
                        
                        if(cont<3)
                        { if(ventana_ancho > 784){
                            if(cont==0)
                            {
                              output+="<div class='pantalla1 p1 row'>";
                            }
                            output+="<div class='pantalla2 p1 col-4'><hr id='hr1'><h1>";
                          }
                          else{
                                if(cont==0)
                                {
                                  output+="<div class='pantalla1 p1'>";
                                }
                                output+="<div class='pantalla2 p1'><hr id='hr1'><h1>";
                               }
                        }
                        else
                        { if(ventana_ancho > 784){
                                if(cont==3)
                                {
                                  output+="</div><div class='pantalla1 p1 row'>";
                                }
                                output+="<div class='pantalla2 p1 col-4'><hr id='hr1'><h1>";
                              }
                              else{
                                 if(cont==3)
                                {
                                  output+="</div><div class='pantalla1 p1'>";
                                }
                                output+="<div class='pantalla2 p1'><hr id='hr1'><h1>";
                              }
                        }
                        output+=prueba2[j].tipo+"</h1><img src=img/catalogo/"+prueba2[j].imagen+" class='img-fluid' alt='Responsive image'><p class='parrafo3'>"+prueba2[j].descripcion+"<br>"+prueba2[j].referencia+"<br>"+prueba2[j].precio+"</p></div>";
                        cont =cont+1;
                        if(cont==6)
                        {
                          output+="</div>";
                          cont=0;
                        }
                      }
                    //final catalogo
                    tabla.append(output);
                  }); 
                

              });          
           
          

});