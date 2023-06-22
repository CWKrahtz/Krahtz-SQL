<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <form  action="login.php" method="POST" autocomplete="off" enctype="multipart/form-data">  
                <h2>LOGIN</h2>
                <?php if (isset($_GET['error'])) {?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php }?>
                <label for="name">Username</label>
                <input type="text" class="form-control m-2" id="name_surename" name="name_surename" placeholder="Username">

                <label for="password">Password</label>
                <input type="password" class="form-control m-2" id="password" name="password" placeholder="Password">
                <br>
                <!-- <input type="submit" name="submit" class="btn btn-primary" value="Add"> -->
                <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
            </form>
        </div>
    </body>
</html>