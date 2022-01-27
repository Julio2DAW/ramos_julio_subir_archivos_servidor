<?php
    /**
     * @file
     * @author Julio Antonio Ramos Gago <jramosgago.guadalupe@alumnado.fundacionloyola.net>
     */
    class Metodos{

        /**
         * @method Función para subir archivos al servidor subirImg()
         */
        function subirArc(){

            //Comprobar si existe el archivo
            if (isset($_FILES['arc'])) {

                $subida = "archivos/";
                $archivo_subido = $subida.$_FILES['arc']['name'];

                //Subimos los archivos al servidor
                    //Si falla se le comunicará al usuario que la operación erronea
                    //Si no falla se le comunicará operación finalizada
                if (move_uploaded_file($_FILES['arc']['tmp_name'], $archivo_subido)) {
                   
                    echo "<p>Subida del archivo finalizada</p>";
                } else {

                    echo "<p>Subida del archivo erronea</p>";
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