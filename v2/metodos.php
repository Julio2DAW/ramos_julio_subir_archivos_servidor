<?php
    /**
     * @file
     * @author Julio Antonio Ramos Gago <jramosgago.guadalupe@alumnado.fundacionloyola.net>
     */
    class Metodos{

        /**
         * @method Función para validar formato de archivos y tamaño permitidos en la subida subirImg()
         */
        function subirArc2(){

            if (isset($_FILES['arc'])) {

                $archivo = $_FILES['arc']['name'];
                
                if (isset($archivo) && $archivo != "") {
                    
                    //Datos necesarios del archivo
                    $tipo = $_FILES['arc']['type'];
                    $tamano = $_FILES['arc']['size'];
                    $temp = $_FILES['arc']['tmp_name'];

                    //Comprobar tamaño y extensión del archivo
                    if (!((strpos($tipo, "png") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "gif")) && ($tamano < 2000))) {

                        //Si las características no son correctas mostrará este mensaje
                        echo    '<div>
                                    <p>Algo no es compatible, comprueba si las características concuerdan con las siguientes</p>
                                    <p>Tamaño: 2mb</p>
                                    <p>Extensiones: png - jpeg - jpg - gif</p>
                                </div>';
                    } else {
                        
                        //Si las características son correctas se sube al servidor
                        if (move_uploaded_file($temp, 'archivos/' . $archivo)) {
                            
                            echo '<div>La imagen se ha subido</div>';
                        }
                    }
                }
            }
        }

        /**
         * @method Función para leer archivos leerArchivos()
         */
        function leerArchivos($ruta){

            $archivo= opendir($ruta);
            echo "<div>";

            while(($archivos = readdir($archivo)) ) {

                echo "<p>".$archivos."</p>";
            }

            echo "</div>";
            closedir($archivo);
        }

        /**
         * @method Función para ver archivos verImg()
         */
        function verImg($ruta){

            $archivo= opendir($ruta);
    
            while(($archivos = readdir($archivo)) ) {
    
                echo "<img src=archivos/$archivos>";
    
            }
    
            closedir($archivo);
        }
    }
?>