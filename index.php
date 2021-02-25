<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function validateForm() {
            var x = document.forms["myForm"]["task"].value;
            if (x == "") {
                alert("Task must be filled out");
                return false;
            }
        }
    </script>
</head>
<body>
<div class="container">

    <?php
    if(isset($_GET['taskAdded'])){
        ?>
        <div class="alert alert-success">
            <strong>Success!</strong> <?php echo $_GET['msg'] ?>
        </div>
        <?php

    }
    if(isset($_GET['notAdded'])){
        ?>
        <div class="alert alert-danger">
            <strong>Error!</strong> <?php echo $_GET['err'] ?>
        </div>
        <?php

    }
    ?>
    <h2>My List!</h2>
    <form name="myForm" action="lib/toDoList.php" onsubmit="return validateForm()" method="get">
        <div class="form-group">
            <label for="task">Task:</label>
            <input type="text" class="form-control" id="task" name="task" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>