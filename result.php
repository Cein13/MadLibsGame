<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Story</title>
    <style>
 body{
     background: lavender;
     padding: 20px;
 }
 .footer{
   text-align: center;
     font-family: Calibri, "Myriad Web", Syntax, sans-serif;
     margin-top: 170px;
     bottom: 0;
 }
 .button{
     border: black 1px solid;
     width: 100px;
     text-align: center;
     border-radius: 5px;
     color: black;
     background: beige;
 }
.button:hover {
    cursor: pointer;
    background: #e0e0bb;
    text-decoration: none;
}
    </style>
</head>
<body>
<div class="container">
<?php
$name =$_POST["name"];
$place = $_POST["place"];
$animal = $_POST["animal"];
$bodyPart = $_POST["bodyPart"];
$bodyFeeling = $_POST["bodyFeeling"];
$name2 = $_POST["name2"];
$emotion = $_POST["emotion"];
$disease = $_POST["disease"];
$somethingBad = $_POST["somethingBad"];
$celebrity = $_POST["celebrity"];

if ($_POST ['name'] != NULL){$name = $_POST['name'];}
if ($_POST ['place'] != NULL){$place = $_POST['place'];}
if ($_POST ['animal'] != NULL){$animal = $_POST['animal'];}
if ($_POST ['bodyPart'] != NULL){$bodyPart = $_POST['bodyPart'];}
if ($_POST ['bodyFeeling'] != NULL){$bodyFeeling = $_POST['bodyFeeling'];}
if ($_POST ['anotherName'] != NULL){$anotherName = $_POST['anotherName'];}
if ($_POST ['emotion'] != NULL){$emotion = $_POST['emotion'];}
if ($_POST ['disease'] != NULL){$disease = $_POST['disease'];}
if ($_POST ['somethingBad'] != NULL){$somethingBad = $_POST['somethingBad'];}
if ($_POST ['celebrity'] != NULL){$celebrity = $_POST['celebrity'];}

?>

<?php
echo "<p>One day $name went to $place.</p>";
echo "<p>When $name was there, $name saw a $animal. $animal had lunch when $name tried to take $animal's lunch away from the $animal. </p>";
echo "<p>Suddenly, the $animal bite $name in the $bodyPart.   </p>";
echo "<p>$name's $bodyPart really started to feel $bodyFeeling. </p>";
echo "<p>$name's best friend $anotherName was really $emotion when this happened. </p>";
echo"<p> $anotherName knew that $name would contract $disease from the $animal. </p>";
echo "<p> The medicinal shots that could save $name wouldn't work because $name was allergic, so $anotherName knew that $name would $somethingBad from the $animal bite. </p>";
echo "<p> $anotherName knew that $name is fool and started date $celebrity who was afraid of $animal. </p>";
?>
    <a href="story.php" type="submit" class="button">Back</a>
</div>

<footer class="footer">
    <span>&copy; 2020 Kristina Cein. All rights reserved.</span>
</footer>
</body>
</html>
