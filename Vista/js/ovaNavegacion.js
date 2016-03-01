var posicionSecuencia= parseInt(1);//maneja la posicion de la secuancia de la ova
var limiteOva; // almacena cuantos niveles de navegacion tiene la ova
var script=document.createElement('script');
var head=document.getElementsByTagName('head').item(0);

$(document).ready(function() {        
   
    });
    
    

/**
* Carga el script respectivo de la ova
* 
* @param {String} tema : El tema de la ova que se va a buscar
* @return {String} Nothing.
*/
function cargarScript(tema){
        
    switch(tema){
        case "organica":
            script.src = 'Vista/js/ovas/reactividadOrganica.js';
            script.type = 'text/javascript';
            script.defer = true;
            script.id = 'scriptID'; // Esto es para poder borrar el objeto despues for removal
            // Ahora se inserta el objeto creado en el elemento HEAD del html                        
            head.appendChild(script);    
            break;
    }
    calcularLimite(tema);
}


/**
* Restablece la posicion del nivel de navegacion de una ova, ademas quita el script de dicha ova
* 
* 
* @return {String} Nothing.
*/
function cerrar(){        
    //posicionSecuencia=parseInt(1);
    var old = document.getElementById('scriptID');
    if (old) head.removeChild(old);
}




/**
* Calcula cuantas paginas hay de la ova
* 
* @param {String} tema : El tema de la ova que se va a buscar
* @return {String} Nothing.
*/
function calcularLimite(tema){
    var cont=1;
    
    try{
        while(cont<100){
            myvar = document.getElementById('div'+cont+tema).value;
            cont++;
        }
    }catch(elError){
        limiteOva = --cont;
        //alert(limiteOva);
        secuenciaOva(tema);
    }
}




/**
 * Define cual es la siguiente pagina a la cual debemos avanzar
 * 
 * @param {String} tema : el numero de la imagen que debe mostrar.
 * @return {String} Nothing.
 */
function avanzar(tema){    
    if(posicionSecuencia<limiteOva){
        posicionSecuencia++;
    }else{
        apprise('Hasta la proxima!!!', {
            'animate':true
        });
        $.fancybox.close();
        posicionSecuencia= parseInt(1);
    }    
    secuenciaOva(tema);
}

/**
 * Define cual es la anterior pagina a la cual debemos avanzar
 * 
 * @param {String} tema : el numero de la imagen que debe mostrar.
 * @return {String} Nothing.
 */
function retroceder(tema){
    if(posicionSecuencia>1){
        posicionSecuencia--;
        secuenciaOva(tema);
    }else{
        $.fancybox.close();
    }    
    
}


/**
 * Abre una determinada pagina de una ova, segun el tema y la pagina en la que se encuentre.
 * 
 * @param {String} tema : El tema de la OVA que se ha seleccionado.
 * @return {String} Nothing.
 */
function secuenciaOva(tema){            
    
    switch(tema){
                      
        case "organica":
            
            switch(posicionSecuencia){
                case 1:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {  
                            
                        },
                        'onClosed': function () {                             
                            cerrar();
                        }
                        
                    });
                    break;
                    
                    
                case 2:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {            
                            startAnimacionInicioBiologia();
                            reproducirAudio('audioBienvenida');
                        },
                        'onClosed': function () {  
                            stopAnimacionInicioBiologia();
                            detenerAudio('audioBienvenida');
                            cerrar();                             
                        }                        
                    });
                    break;
                    
                case 3:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {                                        
                        },
                        'onClosed': function () {                             
                            cerrar();
                        }
                        
                    });
                    break;
                    
                          
                case 4:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {  
                            reproducirAudio('audio2Organica');
                        },
                        'onClosed': function () {                             
                            detenerAudio('audio2Organica');
                            cerrar();
                        }
                        
                    });
                    break;
                    
                    
                case 5:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {                                        
                        },
                        'onClosed': function () {                             
                            cerrar();
                        }
                        
                    });
                    break;
                    
                    
                    
                case 6:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () { 
                            reproducirAudio('audio3Organica');
                        },
                        'onClosed': function () {  
                            detenerAudio('audio3Organica');
                            cerrar();
                        }
                        
                    });
                    break;
                    
                    
                case 7:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {                                        
                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function () {  
                            detenerAudio('audio4Organica');
                            cerrar();
                        }
                        
                    });
                    break;
                    
                    
                case 8:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {   
                            reproducirAudio('audio5Organica');
                        },
                        'onClosed': function () {   
                            detenerAudio('audio5Organica');
                            cerrar();
                        }
                        
                    });
                    break;
                    
                    
                                
                case 9:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {                                        
                            reproducirAudio('audio6Organica');
                        },
                        'onClosed': function () {  
                            detenerAudio('audio6Organica');
                            cerrar();
                        }                        
                    });
                    break;         
                               
                                                                                                                          
                case 10:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {                                        
                            reproducirAudio('audio7Organica');
                        },
                        'onClosed': function () {             
                            detenerAudio('audio8Organica');
                            cerrar();
                        }                        
                    });
                    break;         
                    
                    
                case 11:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {                                        
                            reproducirAudio('audio27Organica');
                        },
                        'onClosed': function () {             
                            detenerAudio('audio27Organica');
                            cerrar();
                        }                        
                    });
                    break;         
                                
                                
                                
                 
                                
                                
                case 12:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {   
                            
                            reproducirAudio('audio28Organica');                                                        
                                        
                        },
                        'onClosed': function () {   
                            detenerAudio('audio28Organica');
                            cerrar();
                        }                        
                    });
                    break;   
                    
                    
                case 13:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',                        
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {   
                            
                            reproducirAudio('audio29Organica');
                            
                            $('.reaccion').css('display', 'none');
                            $('.paso1').css('display', 'none');
                            $('.paso2').css('display', 'none');
                            $('.paso3').css('display', 'none');                            
                                                                    
                            setTimeout(verEtapasMitosis,1000,'reaccion');
                            setTimeout(verEtapasMitosis,3000,'paso1');
                            setTimeout(verEtapasMitosis,5000,'paso2');
                            setTimeout(verEtapasMitosis,7000,'paso3');                            
                                        
                        },
                        'onClosed': function () {   
                            detenerAudio('audio29Organica');
                            cerrar();
                        }                        
                    });
                    break;  
                    
                    
                    
                case 14:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {                             
                        },
                        'onClosed': function () {                             
                            cerrar();
                        }                        
                    });
                    break; 
                
                case 15:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () { 
                            ocultarBotones(2);
                        },
                        'onClosed': function () {                             
                            cerrar();
                        }                        
                    });
                    break;   
                    
                    
                case 16:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {
                            $('#respuestaEvaluacion02').css('display', 'none');
                        },
                        'onClosed': function () {                             
                            cerrar();
                        }                        
                    });
                    break;   
                    
                    
                case 17:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {
                            
                        },
                        'onClosed': function () {                             
                            cerrar();
                        }                        
                    });
                    break;   
                             
                             
                             
                case 18:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {
                            
                        },
                        'onClosed': function () {                             
                            cerrar();
                        }                        
                    });
                    break;   
                    
                    
                    
                case 19:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia+tema,
                        'onComplete':function () {
                            
                        },
                        'onClosed': function () {                             
                            cerrar();
                        }                        
                    });
                    break;   
                             
                
                    
                    
            }
    }
}







