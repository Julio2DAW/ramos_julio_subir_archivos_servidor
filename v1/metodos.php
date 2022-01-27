<?php

    class Metodos{

        /**
         * @method Función para subir archivos al servidor
         */
        function subirImg(){

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


        function 
    }
?>