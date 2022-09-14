<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global POST</title>
</head>
<body>
    <form action="test-post.php" method="POST">
        <div>
            <label for="username">username:</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="email">email:</label>
            <input type="email" name="email" id="email">
        </div>

        <input type="submit" value="submit">
    </form>
</body>
</html>