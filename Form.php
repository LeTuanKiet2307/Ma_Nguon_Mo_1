<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkForm.php" method=POST>
        <h1>Registration</h1>
        Full Name : <input type=text name = "fulluser" size 15>
        <br>User Name : <input type=text name = "user" size 15>
        <br>Email : <input type=text name = "email" size 15>
        <br>Phone Numeber : <input type="number" name = "number">
        <br>Password :<input type = "password" name="pass" size 15>
        <br>Comfirm Password :<input type = "password" name="Comfirmpass" size 15>
        <br><h1>Gioi Tinh</h1>
                <input type="radio" id="male" name="gender" value="Male">Male</th>
                <input type="radio" id="female" name="gender" value="Female">Female</th>
                <input type="radio" id="not" name="gender" value="Prefer not to say">Prefer not to say</th>
        <br><input type=submit name = "submit" value="Login">
    </form>
</body>
</html>