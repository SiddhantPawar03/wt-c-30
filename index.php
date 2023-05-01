<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $name=$_POST["name"];
        $id=$_POST["cn"];
        $units=$_POST["units"];
        $res=0;
        if($units<=50 && $units>0){
            $res=3.5*$units;
        }else if($units>50 && $units<=150){
            $res=4.0*$units;
        }else if($units>150 && $units<=250){
            $res=5.20*$units;
        }else if($units>250){
            $res=6.5*$units;
        }else{
            $res=-1;
        }

        if($res==-1){
            echo "Invalid Units";
            return ;
        }
    ?>
    <div class="container">
        <div class="mt-5 p-5 card">
            <h1><?php echo "UserName: $name "; ?></h1>
            <h1><?php echo "User Id: $id "; ?></h1>
            <h1><?php echo "Your Bill is :$res"; ?></h1>
        </div>
        <h1 class="thank">Thank You!!!</h1>
    </div>
</body>
</html>