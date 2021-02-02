<?php
    include ('header.inc.php');
    $food=array('pasta'=>300, 'pizza'=>1000, 'salad'=>150, 'vegetables'=>50);
    print_r($food);
    echo '<br>'.$food['pizza'].'<br>';

    $food1=array('Health'=>array('salad', 'vegetables', 'pasta'), 'Unhealthy'=>array('pizza', 'ice cream'));
    print_r($food1);

    echo '<br>'.$food1['Unhealthy'][1].'<br>';
    foreach($food as $item)  {
        echo $item.'&nbsp;';
    }

    foreach($food1 as $el=>$arr){
        echo '<br><strong>'.$el.'</strong><br>';
        foreach($arr as $item){
            echo $item.'<br>';
        }
    }

    echo "<br> $var";
?>