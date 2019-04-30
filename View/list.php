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

<form style="text-align: right" method = 'post' action="index.php?page=seach">
    <input type = 'text' name="name" placeholder="enter name">
    <button type = 'submit' name = 'seach'> Seach </ button>
</form>
<a href="index.php?page=add" style="color: darkslateblue">
    <button type="button" class="btn btn-primary">ADD NEW STUDENT</button>

</a>
<body>

<h1 style="text-align: center ; color: blue">LIST STUDENTS</h1>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">phone</th>
        <th scope="col">email</th>
        <th scope="col">ACTION</th>
    </tr>
    </thead>
    <?php foreach ($studens

    as $student): ?>
    <tbody>
    <tr>
        <td style="color: brown" scope="row"><?php echo $student->id ?></td>
        <td style="color: blueviolet"><?php echo $student->name ?></td>
        <td style="color: darkkhaki"><?php echo $student->phone ?></td>
        <td style="color: cadetblue"><?php echo $student->email ?></td>
        <td>
            <div>
                <a href="index.php?page=view&id=<?php echo $student->id ?>">
                    <button type="button" class="btn btn-primary">VIEW</button>
                </a>
                <a href="index.php?page=update&id=<?php echo $student->id ?>">
                    <button type="button" class="btn btn-primary">UPDATE</button>
                </a>
                <a href="index.php?page=delete&id=<?php echo $student->id ?>">
                    <button type="button" class="btn btn-danger">DELETE</button>
                </a>
            </div>
        </td>
    </tr>
    <tbody>
    <?php endforeach; ?>
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