<?php
$arquivo=3;

if($arquivo >=3){
    
    for($i=0;$i<=10;$i++){
        echo $i;
    }
}
else{
    $dados=['nome',
            'sobrenome'];
    foreach($dados as $result){
        echo $result . "</br>";
    }
}
?>