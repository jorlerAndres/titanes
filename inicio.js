/*inicio */

mensajeUpfield=document.getElementById('mensaje_upfield')


imagenesFechas=document.getElementById('imagenes_fechas')

tituloTacticos=document.getElementById('titulo_tacticos')

textTacticos=document.getElementById('text_tacticos')

window.addEventListener('scroll',function(){

    let posicionMensaje=mensajeUpfield.getBoundingClientRect().top;
    /* let posicionFechas=imagenesFechas.getBoundingClientRect().top; */

    let tamano=window.innerHeight;
    if(posicionMensaje < tamano) {
         mensajeUpfield.classList.add('movement_from_bottom');
         setTimeout(function(){
             imagenesFechas.classList.add('movement_from_bottom')
             imagenesFechas.classList.remove('imagenes-display');
            }, 1000); 
        console.log('posicionMensaje');
    }

    let posicionTacticos=tituloTacticos.getBoundingClientRect().top;
    if(posicionTacticos < tamano) {
        tituloTacticos.classList.add('movement_from_bottom');
        setTimeout(function(){
            textTacticos.classList.add('movement_from_bottom')
            textTacticos.style.opacity="1";
           }, 1000); 
       console.log('posicionMensaje');
   }

    
})