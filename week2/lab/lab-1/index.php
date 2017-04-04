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
    		$msg->addMessage('test1', 'This is test1 for base Message class');
    		$msg->addMessage('test2', 'This is test2 for base Message class');

    		var_dump($msg->getAllMessages());

    		$errMsg = new ErrorMessage();

    		$errMsg->addMessage('test1', 'This is test1 for Error Message class');
    		$errMsg->addMessage('test2', 'This is test2 for Error Message class');

    		var_dump($errMsg->getAllMessages());

    		$succMsg = new SuccessMessage();

    		$succMsg->addMessage('test1', 'This is test1 for Success Message class');
    		$succMsg->addMessage('test2', 'This is test2 for Success Message class');

    		var_dump($succMsg->getAllMessages());

    		$succMsg->removeMessage('test1');
    		echo "<br />";
    		var_dump($succMsg->getAllMessages());
    		echo "<br />";
    		var_dump($succMsg->removeMessage('test1'));
    	?>
    </body>
</html>