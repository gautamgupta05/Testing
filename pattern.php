<h3>Pattern 1</h3>
<?php
for ($i = 0; $i <= 5; $i++) {
    for ($j = 5 - $i; $j >= 1; $j--) {
        echo "* ";
    }
    echo "<br>";
}

?>

<h3>Pattern 2</h3>
<?php
for ($i = 0; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

?>

<h3>Pattern 3</h3>
<?php
for ($i = 0; $i <= 5; $i++) {
    for ($k = 5; $k >= $i; $k--) {
        echo "  ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    for ($k = 5; $k >= $i; $k--) {
        echo "  ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}
?>

<h3>Pattern 4</h3>
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo ' * ';
    }
    echo '<br>';
}
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo ' * ';
    }
    echo '<br>';
}
?>

<h3>Pattern 5</h3>
<?php  
for ($i=1; $i<=5; $i++)  
{  
 for ($j=1; $j<=5; $j++)  
  {  
   echo '* ';  
  }  
   echo "<br>";  
}  
?>  

<h3>Pattern 6</h3>
<?php
    for($i=0; $i<=10; $i++){
        for($j=0; $j<$i; $j++){
            echo $j+1;
        }
        echo "<br>";
    }                               
?>