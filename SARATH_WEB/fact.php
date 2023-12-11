<?php
if($_POST)
{
    $fact=1;
    $num=$_POST['number'];
    echo "Factorial of $num is <br><br>";
    for($i=1;$i<=$num;$i++)
    {
        $fact=$fact*$i;

    }
    echo $fact;

}
?>