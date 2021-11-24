<?php
$var1=4;
if (isset($_POST['name'])){
    $var= $_POST['name'];
}
else{
    $var=array("Tony","Tom","Steve","Franklin");
}
echo $var;
$var2="<html>
<head></head>
<body>
<style>.forms{
    position: relative;
            top: 100px;
            left: 50%;
            margin: -200px;
        }</style>
    <h1> Hello This is a php form</h1>
    <h2>Enter Your Name</h2>
    <div class='forms'>
    <form action='http://localhost:9000/hello.php' method='POST'>
        <input type='text'  name='name'>
        <br>
        <input type='submit' value='Submit'>
    </form>
    </div>
</body>
</html>";

foreach($var as $index){
    echo $index;
    echo "<br>";

}
print_r($var);
echo $var2;







?>

