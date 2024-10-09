<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaLista($numero, $tipo){
            if($tipo == "o"){
                echo "<ol>";
                for($i = 1; $i <= $numero; $i++){
                    if($i%2 == 0 || $i%5 == 0){
                        echo "<li>Ciao</li>";
                    }
                }
                echo "</ol>";
            }else{
                echo "<ul>";
                for($i = 1; $i <= $numero; $i++){
                    if($i%2 == 0 || $i%5 == 0){
                        echo "<li>Ciao</li>";
                    }
                    echo "<li>Ciao</li>";
                }
                echo "</ul>";
            }
            return 0;
        }

        stampaLista(25, "o");
    ?>
</body>
</html>