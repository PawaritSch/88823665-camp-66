<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="th,en">

<head>
    <title>My First PHP Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<h1>My First PHP Page</h1>
<?php
echo "Hello World!";
echo "<br>";
print "hello world!";
echo "<br>";
print_r("hello world!");
echo "<br>";
printf("hello world!");
echo "<br>";
# string(12) "hello world!"
var_dump("hello world!");
echo "<br>";
$myvar = "Hello World!";
?>

<h1>
    <?php
    echo $myvar;
    ?>
</h1>

<?php
global $x;
$x = "Hello World!";
function myFunction($myparam)
{
    return $myparam;
}
echo "<p>". myFunction("Hello World!") . "</p>";
$mychar = "A";
?>

<h1><?php echo $x; ?></h1>
<?php echo ++$mychar;
if(1 === '1'){
    echo "1 == \"1\" ";
}else{
    if (true)
        echo "1 != \"1\"";
    }

$myarr = array(1,2,3,4,5);
for ($i = 0; $i < count($myarr); $i++){
    echo "<p> $myarr[$i] </p>";
}
echo "<br>";
foreach ($myarr as $value){
    echo "<p> $value </p>";
}
echo "<br>";
$myarr2[] = [1,2,3];
$myarr2[] = 2;
$myarr2[4] = 3;
$myarr2[] = 4;
$myarr2[] = 5;
print_r($myarr2);
echo "<br>";

$myarr3 = array(1,2,3,"myindex" => 4 ,4 => "index", 0=>9);
print_r($myarr3);
foreach ($myarr3 as $value){
    echo "<p> $value </p>";
}
?>

</body>
</html>