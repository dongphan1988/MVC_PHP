<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<h1 style="text-align: center; color: darkslateblue">UPDATE INFO STUDENT</h1>
<h3 style="text-align: center;color: cadetblue"><?php echo $student->name; ?></h3>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $student->id ?>"/>
    <div class="form-group">
        <label for="formGroupExampleInput">NAME</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $student->name ?>" name="name">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">PHONE</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $student->phone ?>" name="phone">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">EMAIL</label>
        <input type="text" class="form-control" id="formGroupExampleInput3" value="<?php echo $student->email ?>" name="email">
    </div>
    <button type="submit" class="btn btn-success">UPDATE</button>

</form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>