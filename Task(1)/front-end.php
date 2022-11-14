<!DOCTYPE html>
<html>

<body>
    <form method="GET">
        <span>How many towers you want to add their heights? </span><br><br>
        <input type="number" name="numbers" value="<?php if(isset($_GET['numbers'])){echo $_GET['numbers'];} ?>">
        <input type="submit" name="submit" value="submit">
    </form>

    <br><hr>
    <div style="text-align: left;"><u>Output:</u></div>

    <?php

    if ($_GET['numbers'] == "" /*$_GET['numbers'] == ""*/){
        echo '<br><span style="color: red;">You did not enter a value. Please try again!</span>';
    }
    elseif($_GET['numbers'] <= 0){
        echo '<br><span style="color: red;">There is no value for this function that allows zero or negative value!</span>';
    }
    elseif($_GET['numbers'] > 0){
        $number_of_towers_input = $_GET['numbers']; 
        ?>
        <form action="./back-end.php" method="POST">
                <br>
                <span>Add your the heights of the towers: </span><br><br>
                <?php for ($i = 0; $i < $number_of_towers_input; $i++) {
                ?>
                    <?php echo ($i + 1).'-'; ?> <input type="number" name="height_input[]"><br><br>

                <?php } ?>
                <br>
                <input type="submit" value="submit">
            <?php } ?>
        </form>

</body>

</html>