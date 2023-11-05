<!DOCTYPE html>
<html>
<head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    p {
        margin: 10px 0;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="radio"] {
        margin-right: 10px;
    }

    input[type="submit"] {
        background-color: #0074D9;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
</head>
<body>

<form name="register" action="process1.php" method="POST">
    <p>Full Name: <input type="text" name="fullname" required /></p>
    <p>Email: <input type="email" name="emaal" required /></p>
    <p>Gender: <input type="radio" name="male" value="Male" />Male <input type="radio" name="male" value="Female" />Female</p>
    <p>Select a city:
        <select name="city" required>
            <option value="">Select a city</option>
            <option value="Delhi">Delhi</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Mumbai">Mumbai</option>
        </select>
    </p>
    <p><input type="submit" name="submit" value="Sign In" /></p>
</form>

</body>
</html>
