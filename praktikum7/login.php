<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
   
</head>
<body>
    <form action="proses.php" method="POST">
        <div>
            <label for="username">username</label>
            <input type="text" placeholder="username" name="username" required>
        </div>
       <br>
        <div>
            <label for="password">password</label>
            <input type="password" placeholder="password" name="password" required>
        </div>
        <br>
        <div>
            <button type="submit" name="submit">Login</button>
         </div>
                      
    </form>
</body>
</html>