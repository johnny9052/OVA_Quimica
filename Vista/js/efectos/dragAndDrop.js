
/**
* Función que se ejecuta al arrastrar el elemento. 
**/
function start(e) {
    e.dataTransfer.effecAllowed = 'move'; // Define el efecto como mover (Es el por defecto)
    e.dataTransfer.setData("Text", e.target.id); // Coje el elemento que se va a mover
    e.target.style.opacity = '0.4'; 
}

/**
* Función que se ejecuta se termina de arrastrar el elemento. 
**/
function end(e){
    e.target.style.opacity = ''; // Restaura la opacidad del elemento			
    e.dataTransfer.clearData("Data");			
}

/**
* Función que se ejecuta cuando un elemento arrastrable entra en el elemento desde del que se llama. 
**/
function enter(e) {
    return true;
}

/**
* Función que se ejecuta cuando un elemento arrastrable esta sobre el elemento desde del que se llama. 
* Devuelve false si el objeto se puede soltar en ese elemento y true en caso contrario.
**/
function over(e) {
    if ((e.target.className == "contenedorPieza") || (e.target.id == "contenedorPiezas")|| (e.target.id == "contenedoresJuego02") || (e.target.id == "contenedoresJuego04") || (e.target.id == "contenedoresJuego05"))
        return false;
    else
        return true;
}

/**
* Muestra un mensaje de advertencia si el navegador no soporta Drag & Drop. (En Windows no lo soportan ni IE ni Safari)
**/
function comprobarnavegador() {
    if( 
        (navigator.userAgent.toLowerCase().indexOf('msie ') > -1) || 
        ((navigator.userAgent.toLowerCase().indexOf('safari') > -1) && (navigator.userAgent.toLowerCase().indexOf('chrome') == -1)))
        {
        alert("Tu navegador no soporta correctamente las funciones Drag & Drop de HTML5. Prueba con otro navegador.");
    }

}



/*******************************************/
/*******************************************/
/**************ACCIONES POR OVA*************/
/*******************************************/
/*******************************************/


/**********************CONJUNTOS JUEGO 01******************************/



/**
* Función que se ejecuta cuando un elemento arrastrable se suelta sobre el elemento desde del que se llama. 
**/
function dropOrganico(e,numeroJuego){
    e.preventDefault(); // Evita que se ejecute la accion por defecto del elemento soltado.
    var elementoArrastrado = e.dataTransfer.getData("Text");
    e.target.appendChild(document.getElementById(elementoArrastrado)); // Coloca el elemento soltado sobre el elemento desde el que se llamo esta funcion
    
    switch(numeroJuego){
        case 1:
            comprobarPuzzleConjuntosJuegoUno(1);
            break;        
    }        
}



/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzleConjuntosJuegoUno(tipo){
    if(tipo==1){
        if((document.getElementById('pieza1ConjuntosJuegoUno').parentNode.id=='unoConjuntosJuegoUno') &&
            (document.getElementById('pieza2ConjuntosJuegoUno').parentNode.id=='dosConjuntosJuegoUno') &&
            (document.getElementById('pieza3ConjuntosJuegoUno').parentNode.id=='tresConjuntosJuegoUno') &&
            (document.getElementById('pieza4ConjuntosJuegoUno').parentNode.id=='cuatroConjuntosJuegoUno') &&
            (document.getElementById('pieza5ConjuntosJuegoUno').parentNode.id=='cincoConjuntosJuegoUno') &&
            (document.getElementById('pieza6ConjuntosJuegoUno').parentNode.id=='seisConjuntosJuegoUno') &&
            (document.getElementById('pieza7ConjuntosJuegoUno').parentNode.id=='sieteConjuntosJuegoUno') &&
            (document.getElementById('pieza8ConjuntosJuegoUno').parentNode.id=='ochoConjuntosJuegoUno') &&
            (document.getElementById('pieza9ConjuntosJuegoUno').parentNode.id=='nueveConjuntosJuegoUno') &&
            (document.getElementById('pieza10ConjuntosJuegoUno').parentNode.id=='diezConjuntosJuegoUno') &&
            (document.getElementById('pieza11ConjuntosJuegoUno').parentNode.id=='onceConjuntosJuegoUno') &&
            (document.getElementById('pieza12ConjuntosJuegoUno').parentNode.id=='doceConjuntosJuegoUno')) 
            
            {
            mensajeGeneral('Felicidades, has terminado la secuencia.');
            correcto.playclip();
        }
    }else{
        if((document.getElementById('pieza1ConjuntosJuegoUno').parentNode.id=='unoConjuntosJuegoUno') &&
            (document.getElementById('pieza2ConjuntosJuegoUno').parentNode.id=='dosConjuntosJuegoUno') &&
            (document.getElementById('pieza3ConjuntosJuegoUno').parentNode.id=='tresConjuntosJuegoUno') &&
            (document.getElementById('pieza4ConjuntosJuegoUno').parentNode.id=='cuatroConjuntosJuegoUno') &&
            (document.getElementById('pieza5ConjuntosJuegoUno').parentNode.id=='cincoConjuntosJuegoUno') &&
            (document.getElementById('pieza6ConjuntosJuegoUno').parentNode.id=='seisConjuntosJuegoUno') &&
            (document.getElementById('pieza7ConjuntosJuegoUno').parentNode.id=='sieteConjuntosJuegoUno') &&
            (document.getElementById('pieza8ConjuntosJuegoUno').parentNode.id=='ochoConjuntosJuegoUno') &&
            (document.getElementById('pieza9ConjuntosJuegoUno').parentNode.id=='nueveConjuntosJuegoUno') &&
            (document.getElementById('pieza10ConjuntosJuegoUno').parentNode.id=='diezConjuntosJuegoUno') &&
            (document.getElementById('pieza11ConjuntosJuegoUno').parentNode.id=='onceConjuntosJuegoUno') &&
            (document.getElementById('pieza12ConjuntosJuegoUno').parentNode.id=='doceConjuntosJuegoUno'))            
            {
            mensajeGeneral('Completaste la actividad satisfactoriamente');
        }else{
            mensajeGeneral('Recuerda que no has completado la actividad');
            error.playclip();
        }
    }
}



