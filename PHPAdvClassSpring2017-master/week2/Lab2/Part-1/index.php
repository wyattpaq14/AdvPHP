<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './autoload.php';
        
        $msg = new Message();
        
        $msg ->addMessage('Test', 'Test1 Test1 Test1');
        $msg ->addMessage('Test2', 'Test2 Test2 Test2');
        
        //var_dump($msg->getAllMessages());
        
        $error = new ErrorMessage();
        
        $error->addMessage('Bad', 'Test1 Test1 Test1');
        
        //var_dump($error->getAllMessages());
        
        $success = new SuccessMessage();
        
        $success->addMessage('Good', 'Test1 Test1 Test1');
        
       
        
        //$delete = removeMessage('Good');
        
        $success->removeMessage('Good');
        
        var_dump($success->getAllMessages());
      
        
        ?>
    </body>
</html>
