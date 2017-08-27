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
</head>
<body>
<?php include_once 'function.php' ?>
<div class="container">
    <div class="media">
        <?php if (isset($comments)): ?>
            <div class="media-body col-sm-4 offset-sm-4">
                <?php foreach ($comments as $comment): ?>
                    <?= 'Name :' . $comment['name'] ?>
                    <p>
                        <?= $comment['text'] ?>
                    </p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <?php if (isset($error)): ?>
            <div class="alert alert-danger col-sm-4 offset-sm-4" role="alert">
                <?= $error ?>
            </div>
        <?php endif; ?>
    </div>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
        <div class="form-group row">
            <label for="inputName" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="input[name]" id="inputName" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4 offset-sm-4">
                <textarea name="input[text]" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-4 col-sm-10">
                <button type="submit" class="btn btn-primary">Action</button>
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