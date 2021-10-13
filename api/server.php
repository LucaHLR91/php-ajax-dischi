<?php 
    //RACCOLGO I DATI DA INVIARE
    require __DIR__ . '/../database/database.php';

    // SETTO LA RISPOSTA CON PROTOCOLLO JSON
    header('Content-type: application/json');
    
    //INVIO LA RISPOSTA
    echo json_encode($db);
?>