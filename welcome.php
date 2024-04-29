<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1 style="color: blue: center;">SELAMAT DATANG</h1>
    <br>
    <h2 style="color: blue: center;">
    Welcome <?php echo $_POST["firstname"];
    ?> <?php echo $_POST["lastname"];
    ?>! <br />
    Your Gender Is <?php echo $_POST["gender"];
    ?> <br />
    Your Nationality Is <?php echo $_POST["nationality"];
    ?> <br />
    Your Language Spoke Is <?php echo $_POST["language"];
    ?> <br />
    Your Biodata Is <?php echo $_POST["messange"];
    ?> </h2>
    <br>
    <h3 style="color: blueviolet;">Terima kasih telah bergabung di Website Kami.Media belajar  kita bersama!
    ?>. Media Belajar Kita Bersama!</h3>
</body>
</html>