$(document).ready(function() {

        event.preventDefault();
       
        
        alert(catalogo);
        $.post("server/buscar.php", {catalogo: catalogo}, function(respuesta) {

                 var tabla = $("#todo").find('div');
                 tabla.empty();
                 var output="";
                 prueba = JSON.parse(respuesta);
               
                  var cont = 0;
                  for (var j in prueba) {
                    
                    if(cont<3)
                    {
                      if(cont==0)
                      {
                        output+="<div class='p1 col-md-12 col-lg-12'>";
                      }
                      output+="<div class='p1 col-md-4 col-lg-4'><hr id='hr1'><h1>";
                        
                    }
                    else
                    {
                      if(cont==3)
                      {
                        output+="</div><div class='col-md-12 col-lg-12'>";
                      }
                      output+="<div class='col-md-4 col-lg-4'><hr id='hr1'><h1>";
                    }
                    output+=prueba[j].tipo+"</h1><img src=img/catalogo/"+prueba[j].imagen+" class='img-responsive' alt='Responsive image'><p class='parrafo3'>"+prueba[j].referencia+"<br>"+prueba[j].descripcion+"</p></div>";
                    cont =cont+1;
                    if(cont==6)
                    {
                      output+="</div>";
                      cont=0;
                    }
                  }
                
                tabla.append(output);

              });          
           
          

});