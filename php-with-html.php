<?php
 
 echo "<h1 style='color:green' >PHP with HTML</h1>";

?>

<?php
 $name="Harshita";
 echo "<h1 style='color:pink' >My name is $name</h1>";

?>

<h1 style='color:red'>
    <?php
    echo $name;
    ?>
</h1>

<?php
$h2_color="red";
 $name="Harshita";
 echo "<h2 style='color:<?php  echo $h2_color; ?>'>My name is $name</h2>";
 echo "<h2 style='color:<?php  echo $h2_color; ?>' >My name is $name</h2>";
?>

<h2 style='color:<?php echo $h2_color; ?>'>
    <?php
    echo $name;
    ?>
</h2>