
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <a href="index.php">Add Addresses</a>
    </head>
    <body>
        <?php
            include './autoload.php';
            
            $addresses = new CRUD();
            
           $addresses = $addresses->readAllAddress();
           include './templates/view-address.html.php';
        ?>
    </body>
</html>
