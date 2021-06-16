</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>
    <form action="{{ route('validate.form') }}" method="POST">
        Name:
        <input type="text" name="Name" id="Name">,<br>
        User Name:
        <input type="text" name="Username" id="Username"><br>
        Date Of Birth:
        <input type="date" name="Date of Birth" id="Date of Birth"><br>
        Email:
        <input type="text" name="Email" id="Email"><br>
        Telephone Number:
        <input type="number" name="Telephone No" id="Telephone No"><br>
        NIC No:
        <input type="text" name="NIC No" id="NIC No"><br>
        Gender:
        <input type="text" name="Gender" id="Gender"><br>
        Password:
        <input type="password" name="Password" id="Password"><br>
        Reenter Password:
        <input type="password" name="Reenter Password" id="Reenter Password"><br>

        <input type="submit" value="Add Data">


    </form>
</body>
</html>