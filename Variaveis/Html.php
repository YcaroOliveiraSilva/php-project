
<html>
    <meta charset="utf-8">
    <head>
        <title>Aprendendo PHP</title>
    </head>
    
    <body>
        
        <form action="foo.php" method="post">
            Nome: <input type="text" name="username" /><br />
            Email: <input type="text" name="email" /><br />
            
            <input type="submit" name="submit" value="Me aperte!" />
            
            
        </form>
    </body>

<form action
      
      <?php
        echo $_POST['username'];
        echo $_POST['email'];
        
        ?>

