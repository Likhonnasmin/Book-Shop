<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            width: 40%;
            background: white;
            padding: 20px;
            margin: auto;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
            text-align: left;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="radio"], input[type="checkbox"] {
            width: auto;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            cursor: pointer;
            font-size: 16px;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Customer Registration</h2>

        <form action="register.php" method="post">
            <table>
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="fullname" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="tel" name="phone" required></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="Male" required> Male
                        <input type="radio" name="gender" value="Female" required> Female
                    </td>
                </tr>
                <tr>
                    <td>Preferred Genre:</td>
                    <td>
                        <select name="genre" required>
                            <option value="">Select</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Non-Fiction">Non-Fiction</option>
                            <option value="Mystery">Mystery</option>
                            <option value="Science Fiction">Science Fiction</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Subscribe to Newsletter:</td>
                    <td><input type="checkbox" name="newsletter"> Yes</td>
                </tr>
                <tr>
                    <td>Profile Picture:</td>
                    <td><input type="file" name="profile_picture"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Register">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
