document.addEventListener("DOMContentLoaded",function(){

})

primer=document.getElementById('primer')

primer.addEventListener('click', function(){


    contenedor_dato=document.getElementById('contenedor_participante');
    
     contenedor_dato.style.transition="all 0.6s"
    setTimeout(function(){contenedor_dato.classList.add('movement')}, 100); 

    console.log("www");

})