var posicionAvatarBiologia=0; // almacena la posicion del avatar de la ova para su animacion

/***********************************************************/
/***********************************************************/
/***********************************************************/
/**********************ANIMACIONES**************************/
/***********************************************************/
/***********************************************************/


var animacionAvatarBiologia=null; // almacena la animacion del avatar de biologia

/**
 * Inicia la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function startAnimacionInicioBiologia() {  // use a one-off timer
    stopAnimacionInicioBiologia();
    animacionAvatarBiologia= setInterval(function(){
        moverAvatarBiologia();
    },200);
}

/**
 * Detiene la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function stopAnimacionInicioBiologia() {
    clearTimeout(animacionAvatarBiologia);
}



/**
 * Cambia la animacion del avatar de biologia.
 *  
 * @return {String} Nothing.
 */
function moverAvatarBiologia(){    
    
    if(posicionAvatarBiologia>=limiteAvatar){
        posicionAvatarBiologia =0;
    }
    
    switch(posicionAvatarBiologia){
        case 0:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/biologia/avatarBocaCerrada.png";            
            
            break;
        
        case 1:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/biologia/avatarNube.png";
            break;  
        
        case 2:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/biologia/avatarNube.png";            
            break;                             
    }           
    posicionAvatarBiologia++;            
}





/**
 * Muestra con efecto una determinada imagen oculta con extension png, a partir de su clase
 * 
 * @param {String} clase : Clase del elemento oculto
 * @return {String} Nothing.
 * @description para mas informacion visitar el siguiente enlace http://vagabundia.blogspot.com/2010/01/efectos-elementales-con-jquery.html
 */
function verEtapasMitosis(clase){       
    $('.'+clase).attr('src', 'Vista/imagenes/secuenciacion/organica/'+clase+'.png');    
    $('.'+clase).fadeIn();
//$('.'+clase).css('display', 'inline');    
}





/******************************************************/
/******************************************************/
/**************PREGUNTAS SELECCION*********************/
/******************************************************/
/******************************************************/



/**
 * Determina si la pregunta contestada es correcta o no
 * 
 * @param {int} test : Numero de la pregunta
 * @return {String} Mensaje de si es correcta la respuesta o no.
 */
function verificarTestReactividadOrganica(test){
    if($("input[name='pregunta1ReactividadOrganica']:checked").val()){          
        if($("input[name='pregunta2ReactividadOrganica']:checked").val()){
            if($("input[name='pregunta3ReactividadOrganica']:checked").val()){
                if($("input[name='pregunta4ReactividadOrganica']:checked").val()){
                    if($("input[name='pregunta5ReactividadOrganica']:checked").val()){
                        if($("input[name='pregunta6ReactividadOrganica']:checked").val()){
                            if($("input[name='pregunta7ReactividadOrganica']:checked").val()){
                                if($("input[name='pregunta8ReactividadOrganica']:checked").val()){
                                    if($("input[name='pregunta9ReactividadOrganica']:checked").val()){
                                        if($("input[name='pregunta10ReactividadOrganica']:checked").val()){
                                            if($("input[name='pregunta11ReactividadOrganica']:checked").val()){
                                                if($("input[name='pregunta12ReactividadOrganica']:checked").val()){
                                                    calificarTestReactividadOrganica();
                                                }else{
                                                    mensajeError("No has contestado la pregunta 12");
                                                    error.playclip();
                                                }
                                            }else{
                                                mensajeError("No has contestado la pregunta 11");
                                                error.playclip();
                                            }    
                                        }else{
                                            mensajeError("No has contestado la pregunta 10");
                                            error.playclip();                                            
                                        }    
                                    }else{
                                        mensajeError("No has contestado la pregunta 09");
                                        error.playclip();
                                    }    
                                }else{
                                    mensajeError("No has contestado la pregunta 08");
                                    error.playclip();
                                }    
                            }else{
                                mensajeError("No has contestado la pregunta 07");
                                error.playclip();
                            }    
                        }else{
                            mensajeError("No has contestado la pregunta 06");
                            error.playclip();
                        }    
                    }else{
                        mensajeError("No has contestado la pregunta 05");
                        error.playclip();
                    }    
                }else{
                    mensajeError("No has contestado la pregunta 04");
                    error.playclip();
                    
                }    
            }else{
                mensajeError("No has contestado la pregunta 03");
                error.playclip();
            }    
        }else{
            mensajeError("No has contestado la pregunta 02");
            error.playclip();
        }
    
    }else{
        mensajeError("No has contestado la pregunta 01");
        error.playclip();
    }
}


function calificarTestReactividadOrganica(){
    
    var puntuacion = parseInt(0);
    
    if($("input[name='pregunta1ReactividadOrganica']:checked").val()==2){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta2ReactividadOrganica']:checked").val()==4){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta3ReactividadOrganica']:checked").val()==2){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta4ReactividadOrganica']:checked").val()==1){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta5ReactividadOrganica']:checked").val()==3){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta6ReactividadOrganica']:checked").val()==2){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta7ReactividadOrganica']:checked").val()==3){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta8ReactividadOrganica']:checked").val()==4){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta9ReactividadOrganica']:checked").val()==1){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta10ReactividadOrganica']:checked").val()==2){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta11ReactividadOrganica']:checked").val()==1){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    if($("input[name='pregunta12ReactividadOrganica']:checked").val()==1){//respuesta correcta la B                                        
        puntuacion++; 
    }
    
    
    apprise("Contestaste correctamente "+puntuacion+ " preguntas", {
        'animate':true
    }, function(r) {

        if(r) { 
            avanzar('organica');
        } else { 
            avanzar('organica');
			
        }
    });
                   
}


function calificarTestReactividadOrganica2(tipo){
    
    var puntuacion = parseInt(0);
    
    if($("input[name='pregunta1ReactividadOrganica2']:checked").val()==2){//respuesta correcta la B     
        puntuacion++; 
    }else{        
        document.getElementById('actividad2Error1').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok1').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta2ReactividadOrganica2']:checked").val()==4){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error2').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok2').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta3ReactividadOrganica2']:checked").val()==2){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error3').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok3').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta4ReactividadOrganica2']:checked").val()==1){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error4').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok4').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta5ReactividadOrganica2']:checked").val()==3){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error5').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok5').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta6ReactividadOrganica2']:checked").val()==2){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error6').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok6').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta7ReactividadOrganica2']:checked").val()==3){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error7').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok7').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta8ReactividadOrganica2']:checked").val()==4){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error8').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok8').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta9ReactividadOrganica2']:checked").val()==1){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error9').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok9').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta10ReactividadOrganica2']:checked").val()==2){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error10').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok10').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta11ReactividadOrganica2']:checked").val()==1){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error11').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok11').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    if($("input[name='pregunta12ReactividadOrganica2']:checked").val()==1){//respuesta correcta la B                                        
        puntuacion++; 
    }else{
        document.getElementById('actividad2Error12').style.display='block';//indica que la pregunta esta mala
        document.getElementById('actividad2Ok12').style.display='block';//muestra cual deberia ser la respuesta correcta                                                                                                                                                            
        error.playclip();        
    }
    
    mensajeGeneral("Contestaste correctamente "+puntuacion+ " preguntas");  
    
    
    
    if(tipo==1){
        correcto.playclip();
        avanzar('organica');
    }        
}







/**
 * Determina si la pregunta contestada es correcta o no
 * 
 * @param {int} test : Numero de la pregunta
 * @param {int} tipo : Tipo
 * @return {String} Mensaje de si es correcta la respuesta o no.
 */
function verificarTestReactividadOrganica2(test,tipo){        
    ocultarBotones(2);
    if($("input[name='pregunta1ReactividadOrganica2']:checked").val()){          
        if($("input[name='pregunta2ReactividadOrganica2']:checked").val()){
            if($("input[name='pregunta3ReactividadOrganica2']:checked").val()){
                if($("input[name='pregunta4ReactividadOrganica2']:checked").val()){
                    if($("input[name='pregunta5ReactividadOrganica2']:checked").val()){
                        if($("input[name='pregunta6ReactividadOrganica2']:checked").val()){
                            if($("input[name='pregunta7ReactividadOrganica2']:checked").val()){
                                if($("input[name='pregunta8ReactividadOrganica2']:checked").val()){
                                    if($("input[name='pregunta9ReactividadOrganica2']:checked").val()){
                                        if($("input[name='pregunta10ReactividadOrganica2']:checked").val()){
                                            if($("input[name='pregunta11ReactividadOrganica2']:checked").val()){
                                                if($("input[name='pregunta12ReactividadOrganica2']:checked").val()){
                                                    calificarTestReactividadOrganica2(tipo);
                                                }else{
                                                    mensajeError("No has contestado la pregunta 12");
                                                    error.playclip();
                                                }
                                            }else{
                                                mensajeError("No has contestado la pregunta 11");
                                                error.playclip();
                                            }    
                                        }else{
                                            mensajeError("No has contestado la pregunta 10");
                                            error.playclip();                                            
                                        }    
                                    }else{
                                        mensajeError("No has contestado la pregunta 09");
                                        error.playclip();
                                    }    
                                }else{
                                    mensajeError("No has contestado la pregunta 08");
                                    error.playclip();
                                }    
                            }else{
                                mensajeError("No has contestado la pregunta 07");
                                error.playclip();
                            }    
                        }else{
                            mensajeError("No has contestado la pregunta 06");
                            error.playclip();
                        }    
                    }else{
                        mensajeError("No has contestado la pregunta 05");
                        error.playclip();
                    }    
                }else{
                    mensajeError("No has contestado la pregunta 04");
                    error.playclip();
                    
                }    
            }else{
                mensajeError("No has contestado la pregunta 03");
                error.playclip();
            }    
        }else{
            mensajeError("No has contestado la pregunta 02");
            error.playclip();
        }
    
    }else{
        mensajeError("No has contestado la pregunta 01");
        error.playclip();
    }
}




function ocultarBotones(actividad){
    switch(actividad){
        case 2:
            document.getElementById('actividad2Error1').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok1').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error2').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok2').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error3').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok3').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error4').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok4').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error5').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok5').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error6').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok6').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error7').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok7').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error8').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok8').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error9').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok9').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error10').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok10').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error11').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok11').style.display='none';//muestra cual deberia ser la respuesta correcta
            document.getElementById('actividad2Error12').style.display='none';//indica que la pregunta esta mala
            document.getElementById('actividad2Ok12').style.display='none';//muestra cual deberia ser la respuesta correcta
            break;
    }
}



function navegacionMenu(pagina,tema){        
    posicionSecuencia= parseInt(pagina);
    secuenciaOva(tema);    
} 


/**
 * Abre un fancybox en especifico del subtema de conectores
 * 
 * 
 * @return {String} Nothing.
 */

function abrirTema(id,tema){    
    posicionSecuencia= parseInt(id);
    secuenciaOva(tema);   
} 


function abrirSubTema(id){       
    $.fancybox({
        'showCloseButton': false,
        'transitionIn': 'fade',
        'hideOnOverlayClick':false, //bloquear click externo
        'scrolling': 'no',
        'href': '#div'+id+'organica',
        'onComplete':function () {  
            reproducirAudio(calcularIdCancion(id));  
            iniciarSecuenciaSubTema(id);
        },
        'onClosed': function () {            
            detenerAudio(calcularIdCancion(id));
        }
    });
}



function iniciarSecuenciaSubTema(id){
    switch(id){
        case '9-1-2-2-1':
            $('.coligacionSecuencia01').css('display', 'none');
            $('.coligacionSecuencia02').css('display', 'none');
            $('.coligacionSecuencia03').css('display', 'none');                                        
                                                                    
            setTimeout(verEtapasMitosis,1000,'coligacionSecuencia01');
            setTimeout(verEtapasMitosis,3000,'coligacionSecuencia02');
            setTimeout(verEtapasMitosis,5000,'coligacionSecuencia03');            
            break;
            
            
        case '9-1-2-1-2':
            $('.heterolisisSecuencia01').css('display', 'none');
            $('.heterolisisSecuencia02').css('display', 'none');
            $('.heterolisisSecuencia03').css('display', 'none');                                        
                                                                    
            setTimeout(verEtapasMitosis,1000,'heterolisisSecuencia01');
            setTimeout(verEtapasMitosis,3000,'heterolisisSecuencia02');
            setTimeout(verEtapasMitosis,5000,'heterolisisSecuencia03');            
            break;
            
        case '9-1-2-1-1':
            $('.homolisisSecuencia01').css('display', 'none');
            $('.homolisisSecuencia02').css('display', 'none');
            $('.homolisisSecuencia03').css('display', 'none');                                        
                                                                    
            setTimeout(verEtapasMitosis,1000,'homolisisSecuencia01');
            setTimeout(verEtapasMitosis,3000,'homolisisSecuencia02');
            setTimeout(verEtapasMitosis,5000,'homolisisSecuencia03');            
            break;
            
        case '9-1-2-2-2':
            $('.coordinacionSecuencia01').css('display', 'none');
            $('.coordinacionSecuencia02').css('display', 'none');
            $('.coordinacionSecuencia03').css('display', 'none');                                        
                                                                    
            setTimeout(verEtapasMitosis,1000,'coordinacionSecuencia01');
            setTimeout(verEtapasMitosis,3000,'coordinacionSecuencia02');
            setTimeout(verEtapasMitosis,5000,'coordinacionSecuencia03');            
            break;
            
            
        case '9-1-1-4':
            $('.transposicionSecuencia01').css('display', 'none');
            $('.transposicionSecuencia02').css('display', 'none');
            $('.transposicionSecuencia03').css('display', 'none');                                        
            $('.transposicionSecuencia04').css('display', 'none');
            $('.transposicionSecuencia05').css('display', 'none');                                        
                                                                    
            setTimeout(verEtapasMitosis,1000,'transposicionSecuencia01');
            setTimeout(verEtapasMitosis,3000,'transposicionSecuencia02');
            setTimeout(verEtapasMitosis,5000,'transposicionSecuencia03');            
            setTimeout(verEtapasMitosis,7000,'transposicionSecuencia04');
            setTimeout(verEtapasMitosis,9000,'transposicionSecuencia05');            
            break;
            
            
        case '9-1-1-1':
            $('.adicionSecuencia01').css('display', 'none');
            $('.adicionSecuencia02').css('display', 'none');
            $('.adicionSecuencia03').css('display', 'none');                                        
                                                                    
            setTimeout(verEtapasMitosis,1000,'adicionSecuencia01');
            setTimeout(verEtapasMitosis,3000,'adicionSecuencia02');
            setTimeout(verEtapasMitosis,5000,'adicionSecuencia03');            
            break;
            
            
            
        case '9-1-1-3':
            $('.eliminacionSecuencia01').css('display', 'none');
            $('.eliminacionSecuencia02').css('display', 'none');
            $('.eliminacionSecuencia03').css('display', 'none');                                        
                                                                    
            setTimeout(verEtapasMitosis,1000,'eliminacionSecuencia01');
            setTimeout(verEtapasMitosis,3000,'eliminacionSecuencia02');
            setTimeout(verEtapasMitosis,5000,'eliminacionSecuencia03');            
            break;
            
            
        case '9-1-3-1':
            $('.noconcertadasSecuencia01').css('display', 'none');
            $('.noconcertadasSecuencia02').css('display', 'none');                                                 
                                                                    
            setTimeout(verEtapasMitosis,1000,'noconcertadasSecuencia01');
            setTimeout(verEtapasMitosis,3000,'noconcertadasSecuencia02');                      
            break;
            
            
        case '9-1-3-2':
            $('.concertadasSecuencia01').css('display', 'none');
            $('.concertadasSecuencia02').css('display', 'none');                                                 
            $('.concertadasSecuencia03').css('display', 'none');
            $('.concertadasSecuencia04').css('display', 'none');
            $('.concertadasSecuencia05').css('display', 'none');
                                                                                
            setTimeout(verEtapasMitosis,1000,'concertadasSecuencia01');
            setTimeout(verEtapasMitosis,3000,'concertadasSecuencia02');
            setTimeout(verEtapasMitosis,5000,'concertadasSecuencia03');
            setTimeout(verEtapasMitosis,7000,'concertadasSecuencia04');
            setTimeout(verEtapasMitosis,9000,'concertadasSecuencia05');
            break;
            
            
            
                                               
            
    }
}



  



function calcularIdCancion(idVentana){
    switch(idVentana){
        case '9-1':
            return 'audio'+8+'Organica';
            break;
        
        case '9-1-1-1':
            return 'audio'+9+'Organica';
            break;
            
        case '9-1-1-1b':
            return 'audio'+10+'Organica';
            break;
            
        case '9-1-1-2':
            return 'audio'+11+'Organica';
            break;
            
        case '9-1-1-2b':
            return 'audio'+12+'Organica';
            break;
            
        case '9-1-1-3':
            return 'audio'+13+'Organica';
            break;                                                                                             
            
        case '9-1-1-3b':
            return 'audio'+14+'Organica';
            break;
            
        case '9-1-1-4':
            return 'audio'+15+'Organica';
            break;
            
        case '9-1-2':
            return 'audio'+16+'Organica';
            break;
            
        
        case '9-1-2-1':
            return 'audio'+17+'Organica';
            break;
            
        case '9-1-2-1-1':
            return 'audio'+18+'Organica';
            break;                                                                                        
        
        case '9-1-2-1-2':
            return 'audio'+19+'Organica';
            break;   
            
        case '9-1-2-2':
            return 'audio'+20+'Organica';
            break;     
            
        case '9-1-2-2-1':
            return 'audio'+21+'Organica';
            break;       
            
        case '9-1-2-2-2':
            return 'audio'+22+'Organica';
            break;   
            
        case '9-1-3':
            return 'audio'+23+'Organica';
            break;                                                       
            
        case '9-1-3-1':
            return 'audio'+24+'Organica';
            break;      
        
        case '9-1-3-2':
            return 'audio'+25+'Organica';
            break;                         
            
        case '9-1-4':
            return 'audio'+26+'Organica';
            break;                         
    }
}



function reproducirAudio(id){    
    try{
        document.getElementById(id).load();
        document.getElementById(id).play();    
    }catch(elError){
        
    }
}


function detenerAudio(id){    
    document.getElementById(id).pause();    
}



function verRespuestaEvaluacion2(){        
    $('#respuestaEvaluacion02').attr('src', 'Vista/imagenes/juegos/organica/evaluacion02/evaluacion2Respuesta.png');    
    $('#respuestaEvaluacion02').fadeIn();
}




function calificarEvaluacionOrganica3(){

    var bueno=parseInt(0);
    var malo=parseInt(0);

    if($('#orgaEvalu3Preg1').is(':checked')){
        bueno++;
    }
    
    if($('#orgaEvalu3Preg2').is(':checked')){
        malo++;
    }
    
    if($('#orgaEvalu3Preg3').is(':checked')){
        malo++;
    }
    
    if($('#orgaEvalu3Preg4').is(':checked')){
        bueno++;
    }
    
    if($('#orgaEvalu3Preg5').is(':checked')){
        malo++;
    }
    
    if($('#orgaEvalu3Preg6').is(':checked')){
        malo++;
    }
    
    if($('#orgaEvalu3Preg7').is(':checked')){
        bueno++;
    }
    
    if($('#orgaEvalu3Preg8').is(':checked')){
        malo++;
    }
    
    if($('#orgaEvalu3Preg9').is(':checked')){
        bueno++;
    }
    
    if($('#orgaEvalu3Preg10').is(':checked')){
        malo++;
    }
    
    if($('#orgaEvalu3Preg11').is(':checked')){
        bueno++;
    }
    
    if($('#orgaEvalu3Preg12').is(':checked')){
        malo++;
    }
    
    if($('#orgaEvalu3Preg13').is(':checked')){
        malo++;
    }
    
    if($('#orgaEvalu3Preg14').is(':checked')){
        bueno++;
    }
            
    mensajeGeneral("Obtuviste "+bueno+" pregunta(s) buenas y "+malo+ " pregunta(s) malas");
    avanzar('organica');
}