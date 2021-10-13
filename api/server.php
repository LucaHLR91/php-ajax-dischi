<?php 
    require __DIR__ . '/../database/database.php';

    // header per tipizzare il tipo di file, echo per stamapre il contenuto a video del file, encode ci restituisce una stringa che va poi interpretata dal js
    header('Content-type: application/json');
    echo json_encode($db);
?>