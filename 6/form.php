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
<?php
include_once 'function.php';
?>

<div class="container">
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="300000">
        <div class="form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label"></label>
            <div class="col-sm-1-12">
                <input type="file" class="form-control" name="fileName" id="inputName" placeholder="">
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" class="btn btn-primary" name="submit" value="Загрузить">
            </div>
        </div>

    </form>
</div>
<?php if (filePath($dir) !== false): ?>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <?php for ($i = 0; $i <= $arrNum; $i++): ?>
                    <td scope="row">
                        <img src="<?= filePath($dir)[$i] ?>" alt="">
                    </td>
                <?php endfor; ?>
            </tr>
        </table>
    </div>

<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>
</html>