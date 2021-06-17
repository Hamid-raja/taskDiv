<!DOCTYPE html>
<title>First task</title>
<link rel="stylesheet" href="./task.css" />
<body>
    <?php
    $array = array('fi'=>'first','se'=>'second','th'=>'third','fo'=>'fourth','fif'=>'fifth','si'=>'sixth','se'=>'seventh'); 
    // array('first', 'second', 'third','fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'nineth', 'ten','eleven', 'twelve', 'thirteen','fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twenty');
    $cls = array('first','second','third');
    $n=0;
    ?>

    <p> fist method</p>

    @foreach ($array as $arr)
        <div class="<?= $cls[$n]; ?>_div child">{{ $arr }}</div>
        <?php $n++; if($n==3) $n=0;   ?>
    @endforeach
    <br>

    <p>Second method</p>
    <?php
    // var_dump($chunks);
    $c =0 ;
    ?>
     @foreach ($chunks as $arr)
        @foreach ($arr as $key=>$a)
        <div class="<?= $cls[$c]; ?>_div ">{{ $a }}</div>
        <?php $c++; if($c==3) $c=0;   ?>
        @endforeach
    @endforeach
</body>