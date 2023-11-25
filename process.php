<?php

    $message = $_POST["mensagem"];

    $files = scandir("./mensagens");

    $num_files = count($files) - 2; //. e ..

    $filename = "msg-{$num_files}.txt";

    $file = fopen("./mensagens/{$filename}","x");

    fwrite($file, $message);

    fclose($file);

    header("Location: index.php");