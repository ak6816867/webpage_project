<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrastion</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form action="insert1.php"  method="post" class="form">
        <h1>Registrastion Form</h1>
        <div class="box">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="enter name" required><br><br>
        <label for="">Father name</label>
        <input type="text" name="name" placeholder="enter name" required><br><br>
        <label for="">mother name</label>
        <input type="text" name="name" placeholder="enter name" required><br><br>
        <label for="">Phone no</label>
        <input type="number" name="num" placeholder="enter ph no" required><br><br>
        <label for="">Email</label>
        <input type="email" name="email" placeholder="enter email" required><br><br>
        <label for="">Password</label>
        <input type="password" name="pass" placeholder="enter pass"required><br><br>
        <label for="">Confam password</label>
        <input type="password" name="name" placeholder="enter cn fm pass" required><br><br>
        <label for="">Address</label>
        <textarea name="add" id="" cols="20" rows="3" required></textarea><br><br>
        </div>
        <div class="btn">
          <button name="submit" value="login">Apply now</button>
        </div>
    </form>
</body>
</html>