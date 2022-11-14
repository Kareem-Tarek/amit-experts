<?php

$all_towers_heights = $_REQUEST['height_input']; //the array that holds the towers heights
$tallest            = max($all_towers_heights); //getting the maximum heights out of all heights
$tallest_count      = 0; //the count that will be used in a "foreach" loop to count a specific data (heights) for the towers

foreach ($all_towers_heights as $each_tower_height) {

    if ($each_tower_height == $tallest) {
        $tallest_count = $tallest_count + 1;
    } else {
        $tallest_count = $tallest_count + 0;
    }
}
?>

<body style="background-color: #FFEBF3">
<div style="text-align: center;">
    <h1><u>Result</u></h1>
</div>

<table border="1" cellspacing="0" cellpadding="15" style="width: 40%; position: absolute; top: 50%; right: 50%; transform: translate(50%,-220%); /* margin-left: auto; margin-right: auto; margin-top: 100px; */">
    <tr>
        <th style="background-color: lightblue; text-align: left;">Tallest tower height (m.)</th>
        <td style="background-color: lightyellow; text-align: center;"><u><b><?php echo "$tallest"; ?> <?php if($tallest == 1){echo 'metre';} elseif($tallest > 1){echo 'metres';} ?></b></u></td>
    </tr>
    <tr>
        <th style="background-color: lightgreen; text-align: left;">Total towers of the tallest heights</th>
        <th style="background-color: lightyellow; text-align: center;">There <?php if($tallest_count == 1){echo 'is "<span style="color: red;">'.$tallest_count.'</span>" tower';} elseif($tallest_count > 1){echo 'are "<span style="color: red;">'.$tallest_count.'</span>" towers';} ?> of this height</th>
    </tr>
</table>
</body>