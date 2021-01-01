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
            <form action="http://localhost/quiz/users" method="post" class=" align-items-center">
                <input type="email" name="email" id="" class="d-block">
                <input type="password" name="password" id="" class="d-block">
                <button type="submit" class="btn btn-success">Enter</button>
            </form>
            <h2>New Quiz Questions</h2>
            <form action="http://localhost/quiz/quiz" method="post" class=" align-items-center">
                <input type="number" name="code" id="" class="d-block">
                <input type="text" name="questions" id="" class="d-block">
                <input type="text" name="answers" id="" class="d-block">
                <button type="submit" class="btn btn-success">Enter</button>
            </form>
            <h2>Access Quiz</h2>
            <form action="http://localhost/quiz/quiz" method="get" class=" align-items-center">
                <input type="text" name="code" id="" class="d-block">
                <button type="submit" class="btn btn-success">Enter</button>
            </form>
        </div>

        </div>    
        </div>
    </div>
</body>
</html>