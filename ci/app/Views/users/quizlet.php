<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.min.css">
    <title>PHFQuiz!</title>
</head>
<body>
    <style>

    </style>
    <div class="container h-100">
        <div class="row align-items-center h-100">
        <div class="col-6 m-auto">
        <div class="jumbotron text-center">
            <img src="assets/img/logo.png" alt="" class="img-fluid">
            <h3>Quiz : <?= $data['code'] ?></h3>
            <ul>
            <?php foreach ($ques as $ky => $val): ?>
                <li><?=$ky+1?>
                <?php foreach ($val as $key => $vals): ?>
                <?=var_dump($val[0]->$key)?></li>
                <?php endforeach ?>
            <?php endforeach ?>
            </ul>
        </div>

        </div>    
        </div>
    </div>
</body>
</html>