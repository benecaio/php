<?php
spl_autoload_register(function ($nameClass){
        //Diretórios de classe
        $directorys = array(
            'classe'.DIRECTORY_SEPARATOR,
            'classe'. DIRECTORY_SEPARATOR . 'Base'. DIRECTORY_SEPARATOR
        );
       
        //Para cada diretório:
        foreach($directorys as $directory)
        {
            //Se o arquivo existe

       
            if(file_exists($directory.$nameClass . '.php'))
            {
                require_once($directory.$nameClass . '.php');
                return;
            }           
        }
    });