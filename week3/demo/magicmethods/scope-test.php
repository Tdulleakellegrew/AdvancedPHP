<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include './Scope.php';
        
        try {
            $scope = new week3\gforti\Scope();
        
            $scope->test = 'hello';

            $scope->hello = 'this is sick';
        
            echo $scope->test;
            echo '<br />' . $scope->hello; 
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
        
        ?>
    </body>
</html>
