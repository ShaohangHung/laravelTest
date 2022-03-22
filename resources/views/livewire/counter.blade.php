<div style="text-align: center">
    <?php
    $numA = 10;
    $numB = 20;
    echo "numA = $numA\n";
    echo 'numA = $numA';
    if($numA > $numB){
        echo "numA = $numA, numB = $numB, numA > numB";
    }else{
        echo "numA = $numA, numB = $numB, numA < numB";
    }
    ?>
    <h1> {{ $count }} </h1>
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
</div>