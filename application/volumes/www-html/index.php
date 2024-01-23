<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<p>Hello World</p>'; ?>
        <?php echo '<p>Hello World</p>'; ?>
        <?php 
          $connection = mysqli_connect('mysql', 'root', 'root', );
          
          if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        
          phpinfo()
          ?>
    </body>
</html>