<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Story</title>
    <style>
        form {text-align: right;}
        .madlibbox {
            border: #25201A 1px solid;
            padding: 10px;
            font-size: medium;
            width: 600px;
            height: 540px;
            margin: auto;
            font-family: Calibri, "Myriad Web", Syntax, sans-serif;
            background: beige;
        }
        body{
            padding: 0;
            border: 0;
            background: lavender;
            width: auto;
            text-align: center;
        }
        h3 {
            text-align: center;
        }
    </style>
</head>
<body>

<h3> Build your story</h3>

    <div class="madlibbox">
        <br>
        <form action="result.php" method="post" autocomplete="off">
          <p> First name: <input type="text" name="name" required></p>
            <p> Place: <input type="text" name="place" required></p>
            <p> Animal: <input type="text" name="animal" required></p>
            <p> Body part: <input type="text" name="bodyPart" required></p>
            <p>Body feeling (i.e. bad, good, ok., bleeding, etc.): <input type="text" name="bodyFeeling" required></p>
            <p> Another name: <input type="text" name="anotherName" required></p>
            <p> Emotion: <input type="text" name="emotion" required></p>
            <p> Disease: <input type="text" name="disease" required></p>
            <p> Something bad that could happen (i.e. die, get really sick, etc.): <input type="text" name="somethingBad" required></p>
            <p> Celebrity: <input type="text" name="celebrity" required></p>
                <input type="submit">
        </form>
        <br>

    </div>


<footer class="footer">
    <span>&copy; 2020 Kristina Cein. All rights reserved.</span>
</footer>
</body>
</html>