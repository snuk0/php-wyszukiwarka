<?php
$zapytanie = $_GET['s'];
        header('Access-Control-Allow-Origin: *');
        include "polacz.php"; //wzór pliku we wpisie "Pełny panel administracyjny MySQLi"
        if ($sql = $baza->prepare("SELECT * FROM dane WHERE miasto LIKE '$zapytanie'"))
        {
                $sql->execute(); //wykonaj SQL
                $sql->bind_result($id,$miasto,$l_ludnosci);
                while ($sql->fetch())
                  $miasta[] = array(
                     "id" => $id,
                     "miasto" => $miasto,
                     "l_ludnosci" => $l_ludnosci
                   ); //dla każdego nazwiska tworzy 2 pary, nazwiska przekonwertowane do UTF
                $sql->close();
        }
        $baza->close();
        if(!empty($miasta)){
                echo json_encode($miasta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        } else {
                echo 'Wystąpił błąd :( Nie znaleziono podobnych wyników...';
        }
        
?>