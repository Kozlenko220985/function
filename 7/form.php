<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="container">
    <?php include_once 'function.php'?>
    <div class="media">
<?php createMessage($arrComent) ?>
</div>
</div>
<div class="container">
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
        <div class="form-group row">
            <label for="inputName" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="input[name]" id="inputName" placeholder="введите ФИО">
            </div>
        </div>

        <div class="form-group">
            <label for="textarea" class="col-sm-4 col-form-label"></label>
            <textarea name="input[text]" class="form-control" id="textarea" cols="30" rows="10"></textarea>
            <small id="helpId" class="text-muted">Help text</small>
        </div>

        <div class="form-group row">
            <div class="offset-sm-5 col-sm-4">
                <input type="submit" class="btn btn-primary" name="send" value="Отправить">
            </div>
        </div>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>
</html>