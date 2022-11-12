<?php 

if (session_status()==1){
    session_start();
    echo "el estado de la sesion es 1: ". session_status();
    session_destroy();
    echo "<br> el estado de la sesion es 2: ". session_status();
}else {
    
}


?>