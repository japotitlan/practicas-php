<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jijuesu</title>
</head>
<body>
    <h1>aaaaaaaaa</h1>
    
    <form method="POST">
        <input type="text" name="nombre">
        <button>Dale pa</button>
    </form>

    <?php 
        $msg = $_POST['nombre'];
        echo $msg." patucasa caon";
    ?>
</body>
</html>