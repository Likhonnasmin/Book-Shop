<!DOCTYPE html>
<html>
<head>
    <title>Seller Registration</title>
    <link rel="stylesheet" type="text/css" href="seller.css">
    <script src="seller.js"></script>


</head>
<body>
    <h2>Seller Registration</h2>
    <table border="1" cellpadding="5" cellspacing="0">
    <form action="submit_form.php" method="post">
      
            <tr>
                <td><label for="name">Full Name:</label></td>
                <td><input type="text" id="name" name="name" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="phone">Phone Number:</label></td>
                <td><input type="tel" id="phone" name="phone" required></td>
            </tr>
            <tr>
                <td><label for="shop_name">Bookshop Name:</label></td>
                <td><input type="text" id="shop_name" name="shop_name" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td><label for="shop_type">Shop Type:</label></td>
                <td>
                    <input type="radio" id="physical" name="shop_type" value="Physical" required>
                    <label for="physical">Physical</label>
                    <input type="radio" id="online" name="shop_type" value="Online" required>
                    <label for="online">Online</label>
                </td>
            </tr>
            <tr>
                <td><label for="established">Established Year:</label></td>
                <td><input type="number" id="established" name="established" min="1900" max="2025" required></td>
            </tr>
            <tr>
                <td><label for="categories">Book Categories:</label></td>
                <td>
                    <select id="categories" name="categories" required>
                        <option value="fiction">Fiction</option>
                        <option value="non-fiction">Non-Fiction</option>
                        <option value="academic">Academic</option>
                        <option value="children">Children</option>
                        <option value="Mystery">Mystery</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="terms">Accept Terms:</label></td>
                <td>
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the terms and conditions</label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register">
                </td>
            </tr>
      
    </form>
    </table>
</body>
</html>
