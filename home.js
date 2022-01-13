document.addEventListener("DOMContentLoaded",function(){

})

primer=document.getElementById('primer')

primer.addEventListener('click', function(){


    contenedor_dato=document.getElementById('contenedor_participante');
    
     contenedor_dato.style.transition="all 0.6s"
    setTimeout(function(){contenedor_dato.classList.add('movement')}, 100); 

   

})

function abrirModal(){
    
  var modal=new bootstrap.Modal(document.getElementById('exampleModal'))
  modal.show();
  registroInformacionText=document.getElementById('registro_informacion_text');
  console.log(registroInformacionText);
  setTimeout(function(){registroInformacionText.classList.add('movement_from_top')}, 100); 
  
}

