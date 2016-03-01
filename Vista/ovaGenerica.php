<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <!--JAVASCRIPTS PROPIOS DE LA OVA-->
        <script type="text/javascript" src="Vista/js/ovaNavegacion.js"></script>  
        <script type="text/javascript" src="Vista/js/efectos/dragAndDrop.js"></script>          

        <title></title>      
    </head>
    <body>




        <!--OVA QUIMICA-->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->

        <!--PRIMER NIVEL-->
        <div style="display: none;">
            <div id="div1organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">INFORMACIÓN OVA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica'); clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="1" class="alineacionIzquierda">
                                <label class="subtituloDorado">TÍTULO:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Reactividad química orgánica: algunos conceptos básicos</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Descripción:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"></label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Idioma:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Español</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Autor:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Carlos Alberto Marín Londoño</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Entidad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Universidad de Caldas</label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                <label class="titulo">PROCESOS FORMATIVOS</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Tipo:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"></label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Tipo <br/> Interactividad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"> 
                                    &nbsp;&nbsp;&nbsp;*Activa (para los contenidos interactivos)<br/>
                                    &nbsp;&nbsp;&nbsp;*Expositiva <br/>
                                    &nbsp;&nbsp;&nbsp;*Mixto</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Recurso:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Es de distintos tipos: ejercicio,texto y autoevaluación.</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Nivel <br/> Interactividad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Medio</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Población:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Estudiantes de química orgánica de nivel superior</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Contexto:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Educación superior</label>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--SEGUNDO NIVEL-->
        <div style="display: none;">
            <div id="div2organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">BIENVENIDO</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td>
                                <audio id="audioBienvenida" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track1.mp3">
                                </audio>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <img id="avatarBienvenidaCelula" src="Vista/imagenes/universo/biologia/avatarNube.png" class="avatar"/>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--TERCER NIVEL-->
        <div style="display: none;">
            <div id="div3organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">OBJETIVOS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtituloDorado">
                                    Objetivo general
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    Finalizado el estudio de este objeto virtual de aprendizaje los estudiantes estarán en la capacidad de clasificar los distintos tipos de reacciones orgánicas y entender qué es un mecanismos de reacción.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtituloDorado">
                                    Objetivos específicos
                                </label>
                            </td>
                        </tr>

                        <tr>                            
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    &nbsp;&nbsp;&nbsp;* Adquirir habilidades para la predicción de productos en las reacciones químicas orgánicas. <br/>
                                    &nbsp;&nbsp;&nbsp;* Entender y aplicar los detalles químicos que acompañan  una reacción química orgánica.<br/>
                                </label>                                                                
                            </td>
                        </tr>

<!--                        <tr>
                            <td colspan="3">
                                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10.0.0.0" width="550" height="400">
                                    <param name="movie" value="archivoflash.swf" />
                                    <param name="quality" value="high" />
                                    <embed src="Vista/flash/animacion1.swf" quality="high" type="application/x-shockwave-flash" width="350" height="100" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
                                </object>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div4organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">¿Qué sabes de las reacciones
                                    químicas orgánicas?</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   

                        <tr>
                            <td>
                                <audio id="audio2Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track2.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td class="alineacionCentro" colspan="3">
                                <label class="subtituloDorado">
                                    IDEAS PREVIAS
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="alineacionCentro" colspan="3">
                                <img src="Vista/imagenes/universo/biologia/sabiasque01.png"
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div5organica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEST</span>
                            </td>    
                            <td>
                                <img onclick="verificarTestReactividadOrganica(1);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  




                        <tr>
                            <td colspan="3">
                                <table border="0" width="100%" height="100%" >
                                    <tr>
                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            1.&nbsp;&nbsp;&nbsp;&nbsp;<img src="Vista/imagenes/juegos/cuestionario01/1.png" class="imagenOva"/>
                                        </td>
                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            2.&nbsp;&nbsp;&nbsp;&nbsp;<img src="Vista/imagenes/juegos/cuestionario01/2.png" class="imagenOva"/>
                                        </td>                                       

                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            3.&nbsp;&nbsp;&nbsp;&nbsp;<img src="Vista/imagenes/juegos/cuestionario01/3.png" class="imagenOva"/>
                                        </td>                                       
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta1ReactividadOrganica" value="1">
                                                        <label class="texto">A. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta1ReactividadOrganica" value="2">
                                                        <label class="texto">B. Sustitución.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta1ReactividadOrganica" value="3">
                                                        <label class="texto">C. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta1ReactividadOrganica" value="4">
                                                        <label class="texto">D. Transposición.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta2ReactividadOrganica" value="1">
                                                        <label class="texto">A. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta2ReactividadOrganica" value="2">
                                                        <label class="texto">B. Sustitución.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta2ReactividadOrganica" value="3">
                                                        <label class="texto">C. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta2ReactividadOrganica" value="4">
                                                        <label class="texto">D. Eliminación.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta3ReactividadOrganica" value="1">
                                                        <label class="texto">A. Homólisis.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta3ReactividadOrganica" value="2">
                                                        <label class="texto">B. Coligación.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta3ReactividadOrganica" value="3">
                                                        <label class="texto">C. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta3ReactividadOrganica" value="4">
                                                        <label class="texto">D. Coordinación.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <br/>
                                            <br/>
                                            <br/>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            4.&nbsp;&nbsp;&nbsp;&nbsp;<img src="Vista/imagenes/juegos/cuestionario01/4.png" class="imagenOva"/>
                                        </td>
                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            5.&nbsp;&nbsp;&nbsp;&nbsp;<img src="Vista/imagenes/juegos/cuestionario01/5.png" class="imagenOva"/>
                                        </td>                                       

                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            6.&nbsp;&nbsp;&nbsp;&nbsp;<img src="Vista/imagenes/juegos/cuestionario01/6.png" class="imagenOva"/>
                                        </td>                                       
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta4ReactividadOrganica" value="1">
                                                        <label class="texto">A. Homólisis y coligación.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta4ReactividadOrganica" value="2">
                                                        <label class="texto">B. Coligación y heterólisis.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta4ReactividadOrganica" value="3">
                                                        <label class="texto">C. Heterólisis y coligación.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta4ReactividadOrganica" value="4">
                                                        <label class="texto">D. Coordinación y homólisis.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta5ReactividadOrganica" value="1">
                                                        <label class="texto">A. Homólisis.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta5ReactividadOrganica" value="2">
                                                        <label class="texto">B. Coligación.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta5ReactividadOrganica" value="3">
                                                        <label class="texto">C. Heterólisis.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta5ReactividadOrganica" value="4">
                                                        <label class="texto">D. Coordinación.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta6ReactividadOrganica" value="1">
                                                        <label class="texto">A. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta6ReactividadOrganica" value="2">
                                                        <label class="texto">B. Sustitución.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta6ReactividadOrganica" value="3">
                                                        <label class="texto">C. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta6ReactividadOrganica" value="4">
                                                        <label class="texto">D. Eliminación.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <br/>
                                            <br/>
                                            <br/>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            7.&nbsp;&nbsp;&nbsp;&nbsp;<img src="Vista/imagenes/juegos/cuestionario01/7.png" class="imagenOva"/>
                                        </td>
                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            8.&nbsp;&nbsp;&nbsp;&nbsp;La(s) flecha(s) que representa correctamente un homólisis es(son):
                                        </td>                                       

                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            9.&nbsp;&nbsp;&nbsp;&nbsp; Es correcto afirmar que en una heterólisis
                                        </td>                                       
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta7ReactividadOrganica" value="1">
                                                        <label class="texto">A. Coligación.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta7ReactividadOrganica" value="2">
                                                        <label class="texto">B. Sustitución.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta7ReactividadOrganica" value="3">
                                                        <label class="texto">C. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta7ReactividadOrganica" value="4">
                                                        <label class="texto">D. Eliminación.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta8ReactividadOrganica" value="1">
                                                        A. <img src="Vista/imagenes/juegos/cuestionario01/8.1.png" class="imagenOva"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta8ReactividadOrganica" value="2">
                                                        B. <img src="Vista/imagenes/juegos/cuestionario01/8.2.png" class="imagenOva"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta8ReactividadOrganica" value="3">
                                                        C. <img src="Vista/imagenes/juegos/cuestionario01/8.3.png" class="imagenOva"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta8ReactividadOrganica" value="4">
                                                        D. <img src="Vista/imagenes/juegos/cuestionario01/8.4.png" class="imagenOva"/>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                        <td width="33%" height="33%">
                                            <table class="alineacionJustificafa">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta9ReactividadOrganica" value="1">
                                                        <label class="texto">A. la ruptura de un enlace químico de una molécula neutra genera una
                                                            especie positiva y otra negativa.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta9ReactividadOrganica" value="2">
                                                        <label class="texto">B. la ruptura de un enlace químico de una molécula neutra genera dos
                                                            especies negativas.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta9ReactividadOrganica" value="3">
                                                        <label class="texto">C. la ruptura de un enlace químico de una molécula neutra genera dos
                                                            especies radicalarias.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta9ReactividadOrganica" value="4">
                                                        <label class="texto">D. La formación de un nuevo enlace se genera a partir de una especie
                                                            positiva y otra negativa.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <br/>
                                            <br/>
                                            <br/>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            10.&nbsp;&nbsp;&nbsp;&nbsp; Las reacciones no concertadas
                                        </td>
                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            11.&nbsp;&nbsp;&nbsp;&nbsp;En la siguiente reacción  <br/>
                                            <img src="Vista/imagenes/juegos/cuestionario01/11.png" class="imagenOva"/>
                                        </td>                                       

                                        <td class="alineacionIzquierda" width="33%" height="33%">
                                            12.&nbsp;&nbsp;&nbsp;&nbsp;En la siguiente reacción:<br/>
                                            <img src="Vista/imagenes/juegos/cuestionario01/12.png" class="imagenOva"/>
                                        </td>                                       
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <table class="alineacionJustificafa">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta10ReactividadOrganica" value="1">
                                                        <label class="texto">A. Son aquellas en las que la ruptura y formación de enlaces se produce
                                                            simultaneamente.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta10ReactividadOrganica" value="2">
                                                        <label class="texto">B. Son aquellas en las que la ruptura y formación de enlaces se produce
                                                            en etapas separadas.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta10ReactividadOrganica" value="3">
                                                        <label class="texto">C. Son las mismas reacciones irreversibles donde la reacción ocurre en
                                                            un mismo sentido.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta10ReactividadOrganica" value="4">
                                                        <label class="texto">D. Son las reacciones donde la ataque del nucleofilo y el desprendimiento
                                                            del grupo saliente se da en una misma etapa.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta11ReactividadOrganica" value="1">
                                                        <label class="texto">A. El Reactivo 1 es el nucleófilo el 2 es el electrófilo.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta11ReactividadOrganica" value="2">
                                                        <label class="texto">B. los reactivo 1 y 2 son nucleófilos.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta11ReactividadOrganica" value="3">
                                                        <label class="texto">C. El reactivo 1 es el electrófilo y el 2 el nucleófilos.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta11ReactividadOrganica" value="4">
                                                        <label class="texto">D. los reactivos 1y 2 son electrófilos.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta12ReactividadOrganica" value="1">
                                                        <label class="texto">A. El Reactivo 1 es el nucleófilo el 2 es el electrófilo.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta12ReactividadOrganica" value="2">
                                                        <label class="texto">B. los reactivo 1 y 2 son nucleófilos.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta12ReactividadOrganica" value="3">
                                                        <label class="texto">C. El reactivo 1 es el electrófilo y el 2 el nucleófilos.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta12ReactividadOrganica" value="4">
                                                        <label class="texto">D. los reactivos 1y 2 son electrófilos..</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <br/>
                                            <br/>
                                            <br/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" class="alineacionCentro">
                                            <img src="Vista/imagenes/otros/continuar.png" class="efectoAumento" onclick="verificarTestReactividadOrganica(1);">
                                        </td>
                                    </tr>


                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div6organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">capítulo 1: Tipos de reacciones químicas Orgánicas</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                <audio id="audio3Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track3.mp3">
                                </audio>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/universo/biologia/capitulo01.png"  onclick="abrirSubTema('6-1');" class="seleccionable">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div6-1organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   
                        <tr>
                            <td colspan="3">
                                <video poster controls width="600px" height="400px" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/videos/organica/combustion.mp4" type="video/mp4">
                                </video>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label class="texto">Fuente: www.youtube.com</label><br/>                                
                                <label class="texto">Enlace: <a target="_blank" href="http://www.youtube.com/watch?v=zanAj9BCXNU">Ir a la fuente</a></label> <br/>
                                <label class="textoPequeno">http://www.youtube.com/watch?v=zanAj9BCXNU</label><br/>                                
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                        <tr>
                            <td class="alineacionCentro">
                                <img class="efectoAumento" src="Vista/imagenes/otros/regresar.png" onclick="navegacionMenu('6','organica');" />
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7organica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TIPOS DE REACCIONES QUÍMICAS ORGÁNICAS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                <audio id="audio4Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track4.mp3">
                                </audio>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   



                        <tr>
                            <td colspan="3">
                                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10.0.0.0" width="1000px" height="550px">
                                    <param name="movie" value="archivoflash.swf" />
                                    <param name="quality" value="high" />
                                    <embed src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/flash/animacion1.swf" quality="high" type="application/x-shockwave-flash" width="1000px" height="600px" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
                                </object>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    En química Orgánica el reactivo es la sustancia química con la que un compuesto orgánico reacciona, es a veces dibujado en el lado
                                    izquierdo de la ecuación con los otros reactivos.                                  
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/universo/biologia/img1.png" class="efectoAumento"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div8organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TIPOS DE REACCIONES QUÍMICAS ORGÁNICAS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   
                        <tr>
                            <td>
                                <audio id="audio5Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track5.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  




                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    En otras ocasiones el reactivo es dibujado encima de la flecha de reacción, para centrar la atención en el material orgánico de
                                    partida.Cuando alguno de los productos es un compuesto inorgánico generalmente se omite.                             
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/universo/biologia/img3.png" class="efectoAumento"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TIPOS DE REACCIONES QUÍMICAS ORGÁNICAS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio6Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track6.mp3">
                                </audio>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>      

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Cuando se llevan a cabo dos reacciones secuenciales,los pasos se escriben normalmente numerados por encima o por debajo de la flecha de reacción. Esta convención significa que el primer paso ocurre antes del segundo, y los reactivos se agregan en secuencia, no al mismo tiempo. <br/>
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(1)</label>
                                        <span class="custom info">Gorzynski, S.J. Organic chemistry, third edition, McGraw-Hill, 2011, 197.
                                        </span>
                                    </a>  
                                    Veamos la siguiente figura.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/universo/biologia/img4.png" class="imagenOva"/>
                            </td>
                        </tr>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div10organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TIPOS DE REACCIONES QUÍMICAS ORGÁNICAS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio7Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track7.mp3">
                                </audio>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/universo/biologia/img2.png"/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/biologia/diagrama01.png" class="efectoAumento" onclick="abrirSubTema('9-1');"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>







        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">SE CLASIFICAN POR</span>                            
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <audio id="audio8Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track8.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>      

                        <tr>
                            <td colspan="3">
                                <table>
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama02.png" class="efectoAumento" onclick="abrirSubTema('9-1-1');"/>
                                        </td>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama03.png" class="efectoAumento" onclick="abrirSubTema('9-1-2');"/>
                                        </td>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama04.png" class="efectoAumento" onclick="abrirSubTema('9-1-3');"/>
                                        </td>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama05.png" class="efectoAumento" onclick="abrirSubTema('9-1-4');"/>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirTema('10','organica')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-1organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo"> TIPO DE TRANSFORMACIÓN</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>      

                        <tr>
                            <td colspan="3">
                                <label class="texto">
                                    Las reacciones orgánicas se pueden clasificar de acuerdo a la  transformación del compuesto orgánico como:
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table>
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama06.png" class="efectoAumento" onclick="abrirSubTema('9-1-1-1');"/>
                                        </td>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama07.png" class="efectoAumento" onclick="abrirSubTema('9-1-1-2');"/>
                                        </td>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama08.png" class="efectoAumento" onclick="abrirSubTema('9-1-1-3');"/>
                                        </td>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama09.png" class="efectoAumento" onclick="abrirSubTema('9-1-1-4');"/>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-2organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">LA FORMA EN QUE SE ROMPEN Y FORMAN LOS ENLACES</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio16Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track16.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   


                        <tr>
                            <td colspan="3">
                                <label class="texto">
                                    Recordemos que un enlace sencillo siempre involucra un par de electrones. En las reacciones químicas se pueden forman y rompen enlaces.
                                </label> 
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" width="100%" height="100%" class="alineacionCentro">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" >
                                            <img src="Vista/imagenes/universo/biologia/diagrama10.png" class="efectoAumentoPocaMargen" onclick="abrirSubTema('9-1-2-1');"/>
                                        </td>
                                        <td colspan="1">
                                            <img src="Vista/imagenes/universo/biologia/diagrama11.png" class="efectoAumentoPocaMargen" onclick="abrirSubTema('9-1-2-2');"/>
                                        </td>    
                                    </tr>
                                </table>
                            </td>                       
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-3organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">NÚMERO DE ETAPAS</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio23Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track23.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>      


                        <tr>
                            <td colspan="3">
                                <label class="texto">
                                    Una reacción puede ocurrir en una etapa o en una serie de etapas y se pueden clasificar como:
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" width="100%" height="100%" class="alineacionCentro">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" >
                                            <img src="Vista/imagenes/universo/biologia/diagrama16.png" class="efectoAumentoPocaMargen" onclick="abrirSubTema('9-1-3-1');"/>
                                        </td>
                                        <td colspan="1">
                                            <img src="Vista/imagenes/universo/biologia/diagrama17.png" class="efectoAumentoPocaMargen" onclick="abrirSubTema('9-1-3-2');"/>
                                        </td>    
                                    </tr>
                                </table>
                            </td>                       
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-4organica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">LA NATURALEZA DEL REACTIVO ATACANTE</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio26Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track26.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

<!--                        <tr>
                            <td colspan="3" width="100%" height="100%" class="alineacionCentro">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" >
                                            <img src="Vista/imagenes/universo/biologia/naturaleza01.png" class="imagenOvaSinEfecto"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                       
                        </tr>-->

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Una clasificación importante de las reacciones químicas orgánicas se basa en la naturaleza del reactivo atacante que puede ser un electrófilo o un nucleófilo.                                   
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" width="100%" height="100%" class="alineacionCentro">
                                <table width="100%" height="100%" class="alineacionCentro" border="0">
                                    <tr>
                                        <td colspan="1" class="alineacionJustificafa">
<!--                                            <img src="Vista/imagenes/universo/biologia/diagrama18.png" class="efectoAumentoPocaMargen" onclick="abrirSubTema('9-1-4-1');"/>-->
                                            <!--<img src="Vista/imagenes/universo/biologia/diagrama18.png"/>-->
                                            <label class="texto">                                                
                                                Un electrófilo es una especie capaz de aceptar un par de electrones formando un
                                                enlace con un nucleófilo . Es un reactivo químico atraído hacia zonas ricas en electrones.                                                                                                 
                                            </label>

                                        </td>

                                        <td colspan="1" class="alineacionJustificafa">
                                            <label class="texto">
                                                El nucleófilo (amigo de núcleos) es una especie o reactivo que reacciona cediendo un
                                                par de electrones libres a otra especie (elelectrófilo).
                                            </label>
                                        </td>    
                                    </tr>
                                    <tr>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label class="texto">Reacciones electrofílicas</label><br/>
                                            <img src="Vista/imagenes/universo/biologia/electrofilicas01.png" class="imagenOva"/>
                                        </td>
                                        <td colspan="1">
<!--                                            <img src="Vista/imagenes/universo/biologia/nucleofilo01.png" class="imagenOva"/>-->
                                            <label class="texto">Reacciones nucleofílicas</label><br/>
                                            <img src="Vista/imagenes/universo/biologia/nucleofiloprueba01.png" class="imagenOva"/><br/><br/>
                                            <img src="Vista/imagenes/universo/biologia/nucleofiloprueba02.png" class="imagenOva"/>
                                        </td>      
                                    </tr>
                                </table>
                            </td>                       
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Predecir de qué forma puede reaccionar una especie podría ser difícil. La mayoría de los buenos nucleófilos (pero no todos) también son bases fuertes, y viceversa.
                                    Observando el producto formado podemos decidir si la base conjugada ha actuado como una base o como un nucleófilo. Si el nuevo enlace es con un protón, ha reaccionado como una base; si el nuevo enlace lo forma con el carbono, ha reaccionado como un nucleófilo.
                                </label>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <label class="texto">
                                    Si deseas saber cuales son algunos de los nucleófilos y electrófilos más comunes haz  <a class="textoNegro efectoAumento" onclick="abrirSubTema('9-1-4-3')">clic aquí.</a>
                                </label>                                
                            </td>
                        </tr>

<!--                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/otros/mano.png" class="efectoAumento" onclick="abrirSubTema('9-1-4-3')"/>
                            </td>
                        </tr>-->


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>








        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-1-1organica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones de adición</span>                            
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <audio id="audio9Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track9.mp3">
                                </audio>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    Este tipo de reacciones consisten en la adición de dos especies químicas al enlace múltiple de una molécula de partida que es insaturada.<br/>
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(2)</label>
                                        <span class="custom info">Contreras, S. “Clasificación de las reacciones orgánicas”. VII escuela venezolana para la enseñanza de la química
                                            edición 2005. Universidad de Los Andes Facultad de Ciencias, Departamento de Química (inédito).
                                        </span>
                                    </a>                                     
                                    Además es una reacción en la que se añaden elementos a un material de partida
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/> 
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/adicion01.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>

                        <tr>
                            <td>
                                <br/> 
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <label class="texto">
                                    En una reacción de adición, nuevos grupos X y Y se añaden a un material de partida. <br/>Un enlace π (pi) se rompe y se forman dos nuevos enlaces σ (sigma).
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(1)</label>
                                        <span class="custom info">Gorzynski, S.J. Organic chemistry, third edition, McGraw-Hill, 2011, 197.
                                        </span>
                                    </a>     
                                    <br/>                                    
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/> 
                            </td>
                        </tr>


                        <tr>
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="adicionSecuencia01 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                        
                            <td width="33%">
                                <img onmouseover="mouseoversound.playclip();" class="adicionSecuencia02 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="adicionSecuencia03 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>                           
                        </tr> 

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1')"/>
                                <img src="Vista/imagenes/otros/continuar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1-1b')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-1-1borganica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones de adición</span>                            
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <audio id="audio10Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track10.mp3">
                                </audio>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     



                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">                                    
                                    Este tipo de reacciones son muy comunes en los compuestos alquenos y alquinos, como ocurre en la adición de HBr a un doble enlace o en la adición de H<sub>2</sub>O en el proceso de hidratación, por ejemplo:
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/adicion02.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro texto">
                                Para ver la animación de una reacción de adición visita el  <a target="_blank" href="http://sunburst.usd.edu/~gsereda/AdE.html"> siguiente enlace </a> de Oxford University.
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1')"/>                                
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-1-2organica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacción de sustitución</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio11Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track11.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3">
                                <label class="texto">
                                    La sustitución es una reacción en la que un átomo o un grupo de átomos se sustituyen por otro átomo o grupo de átomos.
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10.0.0.0" width="550px" height="300px">
                                    <param name="movie" value="archivoflash.swf" />
                                    <param name="quality" value="high" />
                                    <embed src="Vista/flash/animacion2.swf" quality="high" type="application/x-shockwave-flash" width="550px" height="300px" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
                                </object>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/sustitucion01.png" class="efectoAumento"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    La reacción de sustitución involucra el rompimiento de un enlace σ y la formación de otro enlace σ con el mismo átomo de carbono. <br/> Las reacciones de sustitución se pueden producir cuando Z es un hidrógeno o un heteroátomo que es más electronegativo que <br/>el carbono. 
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(1)</label>
                                        <span class="custom info">Gorzynski, S.J. Organic chemistry, third edition, McGraw-Hill, 2011, 197.
                                        </span>
                                    </a>     
                                    <br/>                                    
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1')"/>
                                <img src="Vista/imagenes/otros/continuar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1-2b')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-1-2borganica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacción de sustitución</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio12Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track12.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     



                        <tr>
                            <td colspan="3">
                                <label class="texto">                                    
                                    Algunos ejemplos de este tipo de reacciones son las reacciones de sustitución nucleofílica de haluros de alquilo o haluros de acilo y las reacciones de  alcoholes con hidrácidos.  Veamos los  ejemplos de este tipo de reacción.                                    
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/sustitucion02.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>      

                        <tr>
                            <td colspan="3" class="alineacionCentro texto">
                                Para ver la animación de una reacción de sustitución visita el  <a target="_blank" href="http://sunburst.usd.edu/~gsereda/sn2.html"> siguiente enlace </a> de Oxford University.
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1')"/>                                
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-1-3organica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones de eliminación</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio13Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track13.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    La eliminación es una reacción en la que se "pierden" elementos del material de partida y se forma un enlace π.
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(1)</label>
                                        <span class="custom info">Gorzynski, S.J. Organic chemistry, <br/>third edition, McGraw-Hill, 2011, 197.
                                        </span>
                                    </a>     
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/eliminacion01.png" class="efectoAumento"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    En una reacción de eliminación, dos grupos X y Y se eliminan de un material de partida. Dos enlaces sigma rompen, y un enlace π se forma  entre átomos adyacentes. 
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(1)</label>
                                        <span class="custom info">Gorzynski, S.J. Organic chemistry, <br/>third edition, McGraw-Hill, 2011, 197.
                                        </span>
                                    </a>  

                                    Los ejemplos más comunes de eliminación se producen cuando X = H y Y es un heteroátomo más electronegativo que el carbono.
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="eliminacionSecuencia01 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                        
                            <td width="33%">
                                <img onmouseover="mouseoversound.playclip();" class="eliminacionSecuencia02 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="eliminacionSecuencia03 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>                           
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionCentro texto">
                                Para ver la animación de una reacción de eliminación visita el  <a target="_blank" href="http://sunburst.usd.edu/~gsereda/E1.html"> siguiente enlace </a> de Oxford University.
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1')"/>
                                <img src="Vista/imagenes/otros/continuar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1-3b')"/>                                
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-1-3borganica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones de eliminación</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio14Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track14.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3">
                                <label class="texto">                                                                        
                                    La reacción de deshidrohalogenación inducida por bases y La reacción de deshidratación de un alcohol para formar un alqueno  son ejemplos de reacciones de eliminación: 
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/eliminacion02.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1')"/>                                
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-1-4organica" style="overflow: hidden;" class="ventana">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td  colspan="5" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones de transposición</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio15Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track15.mp3">
                                </audio>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="5">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="5" class="alineacionJustificafa">
                                <label class="texto">
                                    Esta clase de reacciones consisten en un reordenamiento de los átomos de una molécula que origina otra con estructura distinta pero con idénticos e igual número de átomos. 
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(2)</label>
                                        <span class="custom info">Contreras, S. “Clasificación de las reacciones orgánicas”. VII escuela venezolana para la enseñanza de la química
                                            edición 2005. Universidad de Los Andes Facultad de Ciencias, Departamento de Química (inédito).
                                        </span>
                                    </a> 
                                    Normalmente las transposiciones proceden cuando se generan especies intermedias como los carbocationes en reacciones de eliminación y sustitución. Un ejemplo de transposición se da cuando un carbocatión secundario menos estable por rearreglo puede convertirse en un carbocatión terciario más estable por migración de un grupo metilo .
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="5">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro" width="100%">
                                            <img src="Vista/imagenes/universo/biologia/transposicion01.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>



                                </table>
                            </td>                     
                        </tr>


                        <tr>
                            <td colspan="5">
                                <label class="texto">
                                    Si deseas ver cuáles son las reacciones características de cada grupo funcional dale un vistazo al <a class="textoNegro" style="cursor: pointer" onclick="abrirSubTema('9-1-1-4-1');">siguiente enlace</a> 
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td width="20%">
                                <img  onmouseover="mouseoversound.playclip();" class="transposicionSecuencia01 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                        
                            <td width="10%">
                                <img width="100px" height="100px" onmouseover="mouseoversound.playclip();" class="transposicionSecuencia02 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                            <td width="20%">
                                <img  onmouseover="mouseoversound.playclip();" class="transposicionSecuencia03 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                            <td width="10%">
                                <img  width="100px" height="100px" onmouseover="mouseoversound.playclip();" class="transposicionSecuencia04 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                            <td width="20%">
                                <img  onmouseover="mouseoversound.playclip();" class="transposicionSecuencia05 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                        </tr> 


<!--                        <tr>
                            <td colspan="5">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/otros/mano.png" class="efectoAumento" onclick="abrirSubTema('9-1-1-4-1')"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="5">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="5">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-1-4-1organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     



                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/transposicion02.png" class="imagenOvaSinEfecto"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>


                        <tr>
                            <td class="alineacionCentro" colspan="3">
                                <a class="tooltip" href="#">
                                    <label class="subtitulo">Tomado y adaptado de </label>
                                    <span class="custom info">Contreras, S. “Clasificación de las reacciones orgánicas”. VII escuela venezolana para la enseñanza de la química edición 2005. Universidad de Los Andes Facultad de Ciencias, Departamento de Química (inédito).
                                    </span>
                                </a> 
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-1-4')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-2-1organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">LA MANERA EN QUE SE ROMPEN ENLACES</span>                            
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <audio id="audio17Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track17.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>      


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Sólo hay dos maneras de romper un enlace: cuando los electrones del enlace entre dos  átomos pueden ser divididos en partes iguales o cuando se dividen <br/>en partes desiguales.
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(1)</label>
                                        <span class="custom info">Gorzynski, S.J. Organic chemistry, <br/>third edition, McGraw-Hill, 2011, 197.
                                        </span>
                                    </a>     
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/rompeenlace01.png" class="imagenOva"/>
                                        </td>                                       
                                    </tr>
                                </table>
                            </td>                     
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama12.png" class="efectoAumento" onclick="abrirSubTema('9-1-2-1-1');"/>
                                        </td>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama13.png" class="efectoAumento" onclick="abrirSubTema('9-1-2-1-2');"/>
                                        </td>      
                                    </tr>
                                </table>
                            </td>                     
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-2')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-2-1-1organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones de homólisis</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio18Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track18.mp3">
                                </audio>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Estas reacciones tienen lugar cuando el enlace covalente se rompe de manera equitativa; cada uno de los fragmentos que surgen de la ruptura se lleva consigo a uno de los electrones que formaban parte del enlace original. Normalmente, este proceso da lugar a especies radicalarias  , que son entidades químicas con un electrón desapareado.
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(2)</label>
                                        <span class="custom info">Contreras, S. “Clasificación de las reacciones orgánicas”. VII escuela venezolana para la enseñanza de la química
                                            edición 2005. Universidad de Los Andes Facultad de Ciencias, Departamento de Química (inédito).
                                        </span>
                                    </a> 
                                    <br/>                                    
                                </label>

                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/biologia/homolisis01.png" class="efectoAumento"/>
                            </td>                                
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/homolisis02.png" class="efectoAumento"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="homolisisSecuencia01 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                        
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="homolisisSecuencia02 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="homolisisSecuencia03 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                        </tr>  


                        <tr>
                            <td colspan="3" class="alineacionCentro texto">
                                Para ver la animación de una homolisis visita el <a target="_blank" href="http://sunburst.usd.edu/~gsereda/SR.html"> siguiente enlace </a> de Oxford University.
                            </td>
                        </tr>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-2-1')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-2-1-2organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones de heterólisis</span>                            
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <audio id="audio19Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track19.mp3">
                                </audio>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    La característica principal en esta reacción implican un rompimiento desigual del enlace, donde una de las especies formadas en este caso la de mayor electronegatividad retiene el par de electrones que permitía la unión de la molécula de partida. La especie que retiene el par electrónico generalmente queda cargada negativamente y la otra especie queda con carga positiva.
                                </label>                                
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" width="100%" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/biologia/heterolisis01.png" class="efectoAumento"/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/heterolisis02.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="heterolisisSecuencia01 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                        
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="heterolisisSecuencia02 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="heterolisisSecuencia03 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                        </tr>     


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-2-1')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-2-2organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">LA MANERA COMO FORMAN ENLACES</span>                            
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <audio id="audio20Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track20.mp3">
                                </audio>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>      


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Así como se clasifican las reacciones orgánicas dependiendo de la forma como se rompen los enlaces también se pueden clasificar de acuerdo a la manera como se forman estos enlaces en:
                                </label>   
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama14.png" class="efectoAumento" onclick="abrirSubTema('9-1-2-2-1');"/>
                                        </td>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/diagrama15.png" class="efectoAumento" onclick="abrirSubTema('9-1-2-2-2');"/>
                                        </td>      
                                    </tr>
                                </table>
                            </td>                     
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-2')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-2-2-1organica" style="overflow: hidden;" class="ventana">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones de coligación</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio21Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track21.mp3">
                                </audio>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3" width="100%" class="alineacionJustificafa">
                                <label class="texto">
                                    Estas reacciones se producen cuando dos radicales libres se unen formando un enlace covalente. 
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(2)</label>
                                        <span class="custom info">Contreras, S. “Clasificación de las reacciones orgánicas”. VII escuela venezolana para la enseñanza de la química
                                            edición 2005. Universidad de Los Andes Facultad de Ciencias, Departamento de Química (inédito).
                                        </span>
                                    </a> Este proceso es el inverso al de homólisis.   <br/>                                    
                                </label>                                
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/coligacion02.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="coligacionSecuencia01 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                        
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="coligacionSecuencia02 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="coligacionSecuencia03 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                        </tr>                   

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-2-2')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-2-2-2organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones de coordinación</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio22Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track22.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <label class="texto">
                                    Reciben este nombre las reacciones en las que se enlazan un átomo o molécula de carga negativa (o una especie con un exceso de densidad electrónica) y un átomo o molécula de carga positiva(o una especie con huecos electrónicos). 
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(2)</label>
                                        <span class="custom info">Contreras, S. “Clasificación de las reacciones orgánicas”. VII escuela venezolana para la enseñanza de la química
                                            edición 2005. Universidad de Los Andes Facultad de Ciencias, Departamento de Química (inédito).
                                        </span>
                                    </a>
                                    Este proceso es el inverso al de heterólisis.
                                    <br/>                                    
                                </label>
                                <img src="Vista/imagenes/universo/biologia/coordinacion01.png" class="efectoAumento"/>
                                <br/>
                                <label class="texto">
                                    desde el átomo o molécula con riqueza  electrónica
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/coordinacion02.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>

                        <tr>
                            <td>
                                <br/> 
                            </td>
                        </tr>

                        <tr>
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="coordinacionSecuencia01 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                        
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="coordinacionSecuencia02 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                            <td width="33%">
                                <img  onmouseover="mouseoversound.playclip();" class="coordinacionSecuencia03 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                        </tr>  


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-2-2')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-3-1organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones no concertadas</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <audio id="audio24Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track24.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Son aquellas en las que la ruptura y formación de enlaces se produce en etapas separadas: En estas reacciones el material de partida se convierte en una especie intermedia más o menos estable, posteriormente se forma el producto.
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/noconcertadas01.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td width="50%">
                                <img  onmouseover="mouseoversound.playclip();" class="noconcertadasSecuencia01 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                                                    
                        </tr> 


                        <tr>
                            <td width="50%">
                                <img onmouseover="mouseoversound.playclip();" class="noconcertadasSecuencia02 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>                            
                        </tr>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-3')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>







        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-3-2organica" style="overflow: hidden;" class="ventana">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td  colspan="5" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones concertadas</span>                            
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <audio id="audio25Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track25.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="5">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="5" >
                                <label class="texto">
                                    Es una reacción de un solo paso en las que la ruptura y formación de enlaces se produce simultáneamente. <br/>Un material de partida se convierte directamente en un producto.
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(2)</label>
                                        <span class="custom info">Contreras, S. “Clasificación de las reacciones orgánicas”. VII escuela venezolana para la enseñanza de la química
                                            edición 2005. Universidad de Los Andes Facultad de Ciencias, Departamento de Química (inédito).
                                        </span>
                                    </a>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="5">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/noconcertadas02.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td width="20%">
                                <img  onmouseover="mouseoversound.playclip();" class="concertadasSecuencia01 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                                                                          
                            <td width="10%" >
                                <img width="50px" height="50px" onmouseover="mouseoversound.playclip();" class="concertadasSecuencia02 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                            </td>  
                            <td width="20%">
                                <img  onmouseover="mouseoversound.playclip();" class="concertadasSecuencia03 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                                                                          
                            <td width="10%">
                                <img width="50px" height="50px" onmouseover="mouseoversound.playclip();" class="concertadasSecuencia04 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                                                                          
                            <td width="20%">
                                <img  onmouseover="mouseoversound.playclip();" class="concertadasSecuencia05 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                            </td>                                                                                                                                                       
                        </tr>




                        <tr>
                            <td class="linea" colspan="5">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="5">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-3')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-4-1organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones electrofílicas</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/electrofilicas01.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-4')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-4-2organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Reacciones nucleofílicas</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/nucleofilo01.png" class="imagenOva"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-4')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9-1-4-3organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">                            
                                <span class="titulo">Ejemplos de nucleófilos y electrófilo</span>                            
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3">
                                <table width="100%" height="100%" class="alineacionCentro">
                                    <tr>
                                        <td colspan="1" class="alineacionCentro">
                                            <img src="Vista/imagenes/universo/biologia/naturaleza02.png" class="imagenOvaSinEfecto"/>
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>                     
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/otros/regresar.png" class="efectoAumento" onclick="abrirSubTema('9-1-4')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--CUARTO NIVEL-->
        <div style="display: none;">
            <div id="div11organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>


                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD #1</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleConjuntosJuegoUno(2);avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td colspan="3">
                                <audio id="audio27Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track27.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Revisando conceptos: De una lista de opciones a tú derecha  arrastra el tipo de reacción que corresponda con la definición correcta  que se encuentra a la izquierda. <br/><br/>
                                    Nota:  La actividad aparecerá como “completa” sólo cuando todo el apareamiento sea totalmente acertado.
                                </label>
                            </td>
                        </tr>


                        <tr>

                            <td colspan="3" width="100%" height="100%">
                                <table border="0" class="fondoJuego01">
                                    <tr>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td width="40%" height="100%">                                            
                                            <table border="1" id="puzzle" class="estiloTabla">
                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="unoConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            adición de dos especies químicas al enlace múltiple
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPieza" id="dosConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            un átomo o un grupo de átomos se sustituyen por otro átomo o grupo de átomos.
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="tresConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            "pierden" elementos del material de partida y se forma un enlace pi
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPieza" id="cuatroConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            reordenamiento de los átomos de una molécula
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="cincoConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            el enlace covalente se rompe de manera equitativa
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPieza" id="seisConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            ruptura del enlace  asimétrica
                                                        </label>
                                                    </td>
                                                </tr>                                                

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="sieteConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            dos radicales libres se unen formando un enlace covalente
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPieza" id="ochoConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            se enlazan un átomo o molécula de carga negativa  con un átomo o molécula de carga positiva 
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="nueveConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            la ruptura y formación de enlaces se produce en etapas separadas
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPieza" id="diezConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            la ruptura y formación de enlaces se produce simultáneamente
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="onceConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            El reactivo atacante es capaz de aceptar electrones
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPieza" id="doceConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            El reactivo atacante dona electrones
                                                        </label>
                                                    </td>
                                                </tr>
                                            </table>                                            
                                        </td>

                                        <td colspan="2" width="40%" height="100%">
                                            <table width="100%" height="100%" border="0">  
                                                <tr>
                                                    <td width="100%" height="100%">
                                                        <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropOrganico(event,1)">                                                

                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza10ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/10.png" alt="pieza10ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/1.png" alt="pieza1ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/7.png" alt="pieza7ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/4.png" alt="pieza4ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza12ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/12.png" alt="pieza12ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/6.png" alt="pieza6ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/3.png" alt="pieza3ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/8.png" alt="pieza8ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/2.png" alt="pieza2ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                                                                                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/5.png" alt="pieza5ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza9ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/9.png" alt="pieza9ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza11ConjuntosJuegoUno" src="Vista/imagenes/juegos/organica/juego01/11.png" alt="pieza11ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">

                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>                            
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>










        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div12organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Mecanismo de reacción en química orgánica</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   

                        <tr>
                            <td>
                                <audio id="audio28Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track28.mp3">
                                </audio>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    El mecanismo de reacción es una descripción detallada, paso a paso, de la forma en la que los reactivos se transforman en los productos.<br/>
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">(2)</label>
                                        <span class="custom info">Contreras, S. “Clasificación de las reacciones orgánicas”. VII escuela venezolana para la enseñanza de la química
                                            edición 2005. Universidad de Los Andes Facultad de Ciencias, Departamento de Química (inédito).
                                        </span>
                                    </a> 
                                    En esta descripción se  ilustra el movimiento de electrones por medio de flechas curvas indicando a su vez la formación o ruptura de enlaces, así mismo la formación de estados de transición , especies intermedias y las respectivas cargas netas de las especies involucradas en todo el proceso.<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div13organica" style="overflow: hidden;" class="ventana">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Mecanismo de reacción en química orgánica</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio29Organica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/audio/organica/Track29.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    En este mecanismo para una sola reacción se muestran tres ecuaciones secuenciales que tratan de explicar los pasos más probables por los cuales se lleva a cabo dicha reacción.
                                </label>
                            </td>
                        </tr>         


                        <tr>                            
                            <td class="alineacionIzquierda" colspan="3">
<!--                                <img src="Vista/imagenes/universo/sabias.png">        -->
                                <a class="tooltip" target="_blank" href="http://www.liceoagb.es/quimiorg/mecanismo.html">
                                    <label class="subtitulo" style="cursor: pointer">¿SABÍAS QUÉ?</label>
                                    <span class="custom info">
                                        Si deseas conocer los mecanismos de las reacciones más importantes en la química orgánica a continuación encontarás un enlace de Oxford University donde podrás explorar de un amplio listado de reacciones químicas orgánicas  animadas (necesitas Flash Player). Haz clic                                        
                                    </span>
                                </a>
                            </td>

                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <div border="0" class="contenedorSecuencia" class="alineacionCentro" width="100%" height="100%">
                                    <table border="0" width="100%" height="100%">

                                        <tr>
                                            <td>
                                                <br/>
                                                <br/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="50%">
                                                <img  onmouseover="mouseoversound.playclip();" class="reaccion imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">                                                
                                            </td>                                                                                                                        
                                            <td>
                                                <img  onmouseover="mouseoversound.playclip();" class="paso1 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                                            </td>  
                                        </tr>

                                        <tr>                                            
                                            <td>
                                                <img  onmouseover="mouseoversound.playclip();" class="paso2 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                                            </td>                                           
                                            <td>
                                                <img  onmouseover="mouseoversound.playclip();" class="paso3 imagenOva" src="Vista/imagenes/secuenciacion/blanco2.png">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <br/>
                                                <br/>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div14organica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Especies Intermedias de reacción</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxOrganica">
                                    <source src="Vista/audio/organica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Son especies que se forman en las reacciones químicas durante las homólisis y heterólisis, normalmente se muestran en los mecanismos de reacción. Son menos estables que los reactivos y que los productos.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/biologia/intermedias01.png" class="imagenOva">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <label class="texto">
                                    Así se pueden formar las especies intermedias
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/biologia/intermedias02.png" class="imagenOva" onclick="verificarTestReactividadOrganica2(1,2);">
                            </td>
                        </tr>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>







        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div15organica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Evaluación #1</span>
                            </td>    
                            <td>
                                <img onclick="verificarTestReactividadOrganica2(1,1);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    A continuación debes  analizar cada reacción que encuentres en el test.
                                    Desde la pregunta 1 a la 7 clasifica cada reacción como sustitución, adición, eliminación, transposición, homólisis, heterólisis, coligación  o coordinación según sea el caso y  desde la 8 a la 12 señala la respuesta que consideres responde acertadamente al enunciado.
                                    Haz clic en la respuesta correcta.
                                </label>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3">
                                <table border="0" width="100%" height="100%">
                                    <tr>
                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%" style="vertical-align: baseline">
                                            <table style="vertical-align: baseline">
                                                <tr>
                                                    <td style="vertical-align: baseline">
                                                        1. A partir la siguiente imagen selecciona la opcion correcta
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error1" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>

                                            <br/>
                                            <img src="Vista/imagenes/juegos/cuestionario01/1.png" class="imagenOva"/>                                            
                                        </td>

                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        2. A partir la siguiente imagen selecciona la opcion correcta
                                                    </td>
                                                    <td>                                                        
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error2" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>

                                            <br/>

                                            <img src="Vista/imagenes/juegos/cuestionario01/2.png" class="imagenOva"/>

                                        </td>                                       

                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        3. A partir la siguiente imagen selecciona la opcion correcta
                                                    </td>

                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error3" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>

                                            <br/>

                                            <img src="Vista/imagenes/juegos/cuestionario01/3.png" class="imagenOva"/>

                                        </td>                                       
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta1ReactividadOrganica2" value="1">
                                                        <label class="texto">A. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta1ReactividadOrganica2" value="2">
                                                        <label class="texto">B. Sustitución.</label>
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok1" class="imagenOk" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta1ReactividadOrganica2" value="3">
                                                        <label class="texto">C. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta1ReactividadOrganica2" value="4">
                                                        <label class="texto">D. Transposición.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta2ReactividadOrganica2" value="1">
                                                        <label class="texto">A. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta2ReactividadOrganica2" value="2">
                                                        <label class="texto">B. Sustitución.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta2ReactividadOrganica2" value="3">
                                                        <label class="texto">C. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta2ReactividadOrganica2" value="4">
                                                        <label class="texto">D. Eliminación.</label> 
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok2" class="imagenOk" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta3ReactividadOrganica2" value="1">
                                                        <label class="texto">A. Homólisis.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta3ReactividadOrganica2" value="2">
                                                        <label class="texto">B. Coligación.</label>
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok3" class="imagenOk" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta3ReactividadOrganica2" value="3">
                                                        <label class="texto">C. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta3ReactividadOrganica2" value="4">
                                                        <label class="texto">D. Coordinación.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <br/>
                                            <br/>
                                            <br/>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        4. A partir la siguiente imagen selecciona la opcion correcta
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error4" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>

                                            <br/>

                                            <img src="Vista/imagenes/juegos/cuestionario01/4.png" class="imagenOva"/>



                                        </td>
                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        5. A partir la siguiente imagen selecciona la opcion correcta
                                                    </td>

                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error5" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>

                                            <br/>

                                            <img src="Vista/imagenes/juegos/cuestionario01/5.png" class="imagenOva"/>

                                        </td>                                       

                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        6. A partir la siguiente imagen selecciona la opcion correcta
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error6" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>

                                            <br/>

                                            <img src="Vista/imagenes/juegos/cuestionario01/6.png" class="imagenOva"/>

                                        </td>                                       
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta4ReactividadOrganica2" value="1">
                                                        <label class="texto">A. Homólisis y coligación.</label> 
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok4" class="imagenOk" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta4ReactividadOrganica2" value="2">
                                                        <label class="texto">B. Coligación y heterólisis.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta4ReactividadOrganica2" value="3">
                                                        <label class="texto">C. Heterólisis y coligación.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta4ReactividadOrganica2" value="4">
                                                        <label class="texto">D. Coordinación y homólisis.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta5ReactividadOrganica2" value="1">
                                                        <label class="texto">A. Homólisis.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta5ReactividadOrganica2" value="2">
                                                        <label class="texto">B. Coligación.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta5ReactividadOrganica2" value="3">
                                                        <label class="texto">C. Heterólisis.</label>
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok5" class="imagenOk" />
                                                    </td>                                                                                                                                                                        
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta5ReactividadOrganica2" value="4">
                                                        <label class="texto">D. Coordinación.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta6ReactividadOrganica2" value="1">
                                                        <label class="texto">A. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta6ReactividadOrganica2" value="2">
                                                        <label class="texto">B. Sustitución.</label>
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok6" class="imagenOk" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta6ReactividadOrganica2" value="3">
                                                        <label class="texto">C. Adición.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta6ReactividadOrganica2" value="4">
                                                        <label class="texto">D. Eliminación.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <br/>
                                            <br/>
                                            <br/>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        7. A partir la siguiente imagen selecciona la opcion correcta
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error7" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>

                                            <br/>

                                            <img src="Vista/imagenes/juegos/cuestionario01/7.png" class="imagenOva"/>

                                        </td>
                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        8.La(s) flecha(s) que representa correctamente un homólisis es(son):
                                                    </td>

                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error8" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>                                       

                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        9. Es correcto afirmar que en una heterólisis
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error9" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>                                       
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta7ReactividadOrganica2" value="1">
                                                        <label class="texto">A. Coligación.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta7ReactividadOrganica2" value="2">
                                                        <label class="texto">B. Sustitución.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta7ReactividadOrganica2" value="3">
                                                        <label class="texto">C. Adición.</label>
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok7" class="imagenOk" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta7ReactividadOrganica2" value="4">
                                                        <label class="texto">D. Eliminación.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta8ReactividadOrganica2" value="1">
                                                        A. <img src="Vista/imagenes/juegos/cuestionario01/8.1.png" class="imagenOva"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta8ReactividadOrganica2" value="2">
                                                        B. <img src="Vista/imagenes/juegos/cuestionario01/8.2.png" class="imagenOva"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta8ReactividadOrganica2" value="3">
                                                        C. <img src="Vista/imagenes/juegos/cuestionario01/8.3.png" class="imagenOva"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta8ReactividadOrganica2" value="4">
                                                        D. <img src="Vista/imagenes/juegos/cuestionario01/8.4.png" class="imagenOva"/> 
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok8" class="imagenOk" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                        <td width="33%" height="33%">
                                            <table class="alineacionJustificafa">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta9ReactividadOrganica2" value="1">
                                                        <label class="texto">A. la ruptura de un enlace químico de una molécula neutra genera una
                                                            especie positiva y otra negativa.</label>
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok9" class="imagenOk" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta9ReactividadOrganica2" value="2">
                                                        <label class="texto">B. la ruptura de un enlace químico de una molécula neutra genera dos
                                                            especies negativas.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta9ReactividadOrganica2" value="3">
                                                        <label class="texto">C. la ruptura de un enlace químico de una molécula neutra genera dos
                                                            especies radicalarias.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta9ReactividadOrganica2" value="4">
                                                        <label class="texto">D. La formación de un nuevo enlace se genera a partir de una especie
                                                            positiva y otra negativa.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <br/>
                                            <br/>
                                            <br/>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td class="alineacionIzquierda alineacionVecticialAlInicio " width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        10. Las reacciones no concertadas
                                                    </td>

                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error10" class="imagenError" />
                                                    </td>    
                                                </tr>
                                            </table>                                                                                                                                    
                                        </td>

                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        11. En la siguiente reacción  
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error11" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>

                                            <br/>

                                            <img src="Vista/imagenes/juegos/cuestionario01/11.png" class="imagenOva"/>

                                        </td>                                       

                                        <td class="alineacionIzquierda alineacionVecticialAlInicio" width="33%" height="33%">

                                            <table>
                                                <tr>
                                                    <td>
                                                        12.En la siguiente reacción:
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/x.png" id="actividad2Error12" class="imagenError" />
                                                    </td>
                                                </tr>
                                            </table>

                                            <br/>

                                            <img src="Vista/imagenes/juegos/cuestionario01/12.png" class="imagenOva"/>

                                        </td>                                       
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <table class="alineacionJustificafa">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta10ReactividadOrganica2" value="1">
                                                        <label class="texto">A. Son aquellas en las que la ruptura y formación de enlaces se produce
                                                            simultaneamente.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta10ReactividadOrganica2" value="2">
                                                        <label class="texto">B. Son aquellas en las que la ruptura y formación de enlaces se produce
                                                            en etapas separadas.</label>
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok10" class="imagenOk" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta10ReactividadOrganica2" value="3">
                                                        <label class="texto">C. Son las mismas reacciones irreversibles donde la reacción ocurre en
                                                            un mismo sentido.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta10ReactividadOrganica2" value="4">
                                                        <label class="texto">D. Son las reacciones donde la ataque del nucleofilo y el desprendimiento
                                                            del grupo saliente se da en una misma etapa.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta11ReactividadOrganica2" value="1">
                                                        <label class="texto">A. El Reactivo 1 es el nucleófilo el 2 es el electrófilo.</label>
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok11" class="imagenOk" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta11ReactividadOrganica2" value="2">
                                                        <label class="texto">B. los reactivo 1 y 2 son nucleófilos.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta11ReactividadOrganica2" value="3">
                                                        <label class="texto">C. El reactivo 1 es el electrófilo y el 2 el nucleófilos.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta11ReactividadOrganica2" value="4">
                                                        <label class="texto">D. los reactivos 1y 2 son electrófilos.</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                        <td width="33%" height="33%">
                                            <table class="alineacionIzquierda">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta12ReactividadOrganica2" value="1">
                                                        <label class="texto">A. El Reactivo 1 es el nucleófilo el 2 es el electrófilo.</label>
                                                    </td>
                                                    <td>
                                                        <img src="Vista/imagenes/otros/ok.png" id="actividad2Ok12" class="imagenOk" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta12ReactividadOrganica2" value="2">
                                                        <label class="texto">B. los reactivo 1 y 2 son nucleófilos.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta12ReactividadOrganica2" value="3">
                                                        <label class="texto">C. El reactivo 1 es el electrófilo y el 2 el nucleófilos.</label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="pregunta12ReactividadOrganica2" value="4">
                                                        <label class="texto">D. los reactivos 1y 2 son electrófilos..</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <br/>
                                            <br/>
                                            <br/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" class="alineacionCentro">
                                            <img src="Vista/imagenes/otros/calificar.png" class="efectoAumento" onclick="verificarTestReactividadOrganica2(1,2);">
                                        </td>
                                    </tr>


                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div16organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">EVALUACIÓN #2</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxOrganica">
                                    <source src="Vista/audio/organica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>       


                        <tr>
                            <td colspan="3">
                                <label class="texto">
                                    Visualiza para cada ecuación el movimiento de electrones empleando las flechas curvas que correspondan y compáralo con la respuesta.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img onclick="" src="Vista/imagenes/juegos/organica/evaluacion02/evaluacion2.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img onclick="verRespuestaEvaluacion2();" src="Vista/imagenes/otros/verrespuesta.png" class="efectoAumento">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img id="respuestaEvaluacion02"  src="Vista/imagenes/secuenciacion/blanco2.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div17organica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">EVALUACIÓN #3</span>
                            </td>    
                            <td>
                                <img onclick="calificarEvaluacionOrganica3();clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxOrganica">
                                    <source src="Vista/audio/organica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>        


                        <tr>
                            <td colspan="3" class="texto alineacionIzquierda">
                                A continuación debes seleccionar todas las respuestas correctas. Observa el esquema y responde.
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" width="100%">
                                <img src="Vista/imagenes/juegos/organica/evaluacion03/evaluacion3-1.png" class="imagenOva">
                                &nbsp;&nbsp;&nbsp;
                                <img src="Vista/imagenes/juegos/organica/evaluacion03/evaluacion3-2.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <label class="texto alineacionIzquierda">
                                    Después de formarse el catión 1,1-dimetilpropilo pueden formarse 2 alquenos
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/juegos/organica/evaluacion03/evaluacion3-3.png" class="imagenOva"> <br/>
                                <label class="texto">alqueno 1, se produce en un 25%</label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/juegos/organica/evaluacion03/evaluacion3-4.png" class="imagenOva"> <br/>
                                <label class="texto">alqueno 2, se produce en un 75%</label>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <label class="texto">De acuerdo con el esquema anterior señala sobre el espacio los enunciados que consideres son verdaderos. Debes tener en cuenta todos los temas vistos.</label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>                           

                        <tr>
                            <td colspan="3" width="100%" class="alineacionIzquierda">
                                <table>
                                    <tr>
                                        <td>
                                            <label class="texto">
                                                1. Es una reacción de eliminación, porque se "pierden" elementos del material de partida y se forma un enlace pi
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg1">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label class="texto">
                                                2. Es una reacción de sustitución porque se sustituye un grupo átomos por otro.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg2">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label class="texto">
                                                3. Es una reacción concertada porque la ruptura y formación de enlaces se produce simultáneamente.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg3">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label class="texto">
                                                4. Es una reacción no concertada porque la ruptura y formación de enlaces se produce en etapas separadas.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg4">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label class="texto">
                                                5. La reacción presenta especies intermedias, en este caso carbocatión secundario.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg5">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">
                                                6. Es una reacción donde tanto el halogenuro de alquilo como el nucleófilo están implicados en el estado de transición.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg6">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">
                                                7. La reacción presenta especies intermedias, en este caso carbocatión terciario.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg7">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">
                                                8. Es una reacción que presenta rupturas homolíticas porque el enlace covalente se rompe de manera equitativa.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg8">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">
                                                9. Es una reacción que presenta rupturas heterolíticas porque la ruptura del enlace es asimétrica.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg9">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">
                                                10. Es una reacción de coligación porque dos radicales libres se unen formando un enlace covalente
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg10">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">
                                                11. Es una reacción de coordinación porque se enlazan un átomo o molécula de carga negativa con un átomo o molécula de carga positiva.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg11">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label class="texto">
                                                12. Para este caso la reacción es nucleofílica porque el reactivo atacante está donando electrones para la formación de un nuevo enlace con el carbono.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg12">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">
                                                13. En este mecanismo se observa una transposición de un hidruro para formar el carbocatión más estable
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg13">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">
                                                14. En este mecanismo no se observan transposiciones debido a que la especie intermedia de la reacción es un carbocatión terciario más estable que un secundario o primario.
                                            </label> 
                                        </td>
                                        <td>
                                            <input type="checkbox" id="orgaEvalu3Preg14">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/otros/calificar.png" onclick="calificarEvaluacionOrganica3();" class="efectoAumento" />
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div18organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">DOCUMENTOS DE AYUDA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionIzquierda" width="100%" height="100%">
                                <table class="fondoDocumentosExternos imagenOvaSinEfecto" border="0">
                                    <tr>
                                        <td heigth="30%"></td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.youtube.com/watch?v=zanAj9BCXNU"><span>1. Video: Reacciones de combustión</span></a> <br/>

                                            &nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.liceoagb.es/quimiorg/mecanismo.html"><span>2. Reactividad y síntesis </span></a> <br/> 

                                            &nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://sunburst.usd.edu/~gsereda/SR.html"><span>3. Homólisis </span></a> <br/>

                                            &nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://sunburst.usd.edu/~gsereda/sn2.html"><span>4. Sustitución </span></a> <br/>

                                            &nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://sunburst.usd.edu/~gsereda/E1.html"><span>5. Eliminación </span></a> <br/>

                                            &nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://sunburst.usd.edu/~gsereda/AdE.html"><span>6. Adición </span></a> <br/>

                                            &nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.mp-docker.demon.co.uk/chains_and_rings/mechanisms/nuc_sub_uni.html"><span>7. Mecanismo de reacción </span></a> <br/>                                                                                   
                                        </td>
                                    </tr>                                  
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div19organica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuReactividadOrganica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">BIBLIOGRAFíA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionIzquierda" width="100%" height="100%">
                                <table class="fondoBibliografia imagenOvaSinEfecto" border="0">
                                    <tr>                                        
                                        <td>
                                            <label class="textoNegro">Gorzynski, S.J. Organic chemistry, third edition, McGraw-Hill, 2011.</label><br/>
                                            <label class="textoNegro">Carey, F.A. Química Orgánica, sexta edición, McGraw-Hill, 2006.</label><br/>
                                            <label class="textoNegro">Carey, F.A. Química Orgánica, tercera edición, McGraw-Hill, 1999.</label><br/>
                                            <label class="textoNegro">Wade, L.G. Química Orgánica.5a ed Prentice-Hall, 2004.</label><br/>
                                            <label class="textoNegro">McMurry, J. Química Orgánica. 5a ed. Internacional Thomson Editores, <br/> &nbsp;&nbsp; México,2001.</label><br/>
                                            <label class="textoNegro">Contreras, S. “Clasificación de las reacciones orgánicas”. VII escuela <br/>                                                 
                                                &nbsp;&nbsp; venezolana para la enseñanza de la química edición 2005. <br/>
                                                &nbsp;&nbsp; Universidad de Los Andes Facultad de Ciencias,Departamento de <br/> 
                                                &nbsp;&nbsp; Química (inédito).
                                            </label><br/>
                                        </td>
                                    </tr>                                  
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <!--        <div style="display: none;">
                    <div id="div?organica" style="overflow: hidden;" class="ventana">
                        <table border="0">
                            <tbody>
         <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
        <?php
        //include("Vista/menusNavegacion/menuReactividadOrganica.php");
        ?>

                            </td>
                        </tr>

                                <tr>
                                    <td>
                                        <img onclick="retroceder('organica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                        <label class="texto">Anterior</label>
                                    </td> 
                                    <td colspan="1">
                                        <span class="titulo">TITULO</span>
                                    </td>    
                                    <td>
                                        <img onclick="avanzar('organica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                        <label class="texto">Siguiente</label>
                                    </td>
                                </tr>    
                                <tr>
                            <td>
                                <audio id="audioxOrganica">
                                    <source src="Vista/audio/organica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>

                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>                                           
                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>-->


<!--    <tr>
        <td>
            <audio id="audio4Organica">
                <source src="Vista/audio/organica/Track1.mp3">
            </audio>
        </td>
    </tr>-->



    </body>
</html>
