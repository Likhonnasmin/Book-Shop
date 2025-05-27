<?php include("validation.php"); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seller Registration</title>
    <link rel="stylesheet" href="seller.css">
</head>
<body>
  <!-- <form name="myForm" onsubmit="return validateForm()" method="post"> -->
   <form method="post" action="seller.php" enctype="multipart/form-data">


        <h2>Seller Registration</h2>
        <table>
            <tr>
                <td><label for="name">Full Name:</label></td>
                <td>
                    <div class="input-wrapper">
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                        <span><?php echo $nameErr; ?></span><br>
                        <div id="nameError" class="error"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email"value="<?php echo htmlspecialchars($email); ?>">
                        <span><?php echo $emailErr; ?></span><br>
                        <div id="emailError" class="error"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="phone">Phone Number:</label></td>
                <td>
                    <div class="input-wrapper">
                        <input type="tel" id="phone" name="phone"value="<?php echo htmlspecialchars($phone); ?>">
                        <span><?php echo $phoneErr; ?></span><br>
                        <div id="phoneError" class="error"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="shop_name">Bookshop Name:</label></td>
                <td>
                    <div class="input-wrapper">
                        <input type="text" id="shop_name" name="shop_name"value="<?php echo htmlspecialchars($shop_name); ?>">
                        <span><?php echo $shopNameErr; ?></span><br>
                     <div id="shopNameError" class="error"></div> 
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password"value="<?php echo htmlspecialchars($password); ?>">
                        <span><?php echo $passwordErr; ?></span><br>
                        <div id="passwordError" class="error"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="shop_type">Shop Type:</label></td>
                <td>
                <div class="input-wrapper radio-group">
            <label><input type="radio" id="physical" name="shop_type" value="Physical"> Physical</label>
            <label><input type="radio" id="online" name="shop_type" value="Online"> Online</label>
                        <div id="shopTypeError" class="error"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="established">Established Year:</label></td>
                <td>
                    <div class="input-wrapper">
                        <input type="number" id="established" name="established" min="1900" max="2025">
                        <div id="establishedError" class="error"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="categories">Book Categories:</label></td>
                <td>
                    <div class="input-wrapper">
                        <select id="categories" name="categories">
                            <option value="">Select</option>
                            <option value="fiction">Fiction</option>
                            <option value="non-fiction">Non-Fiction</option>
                            <option value="academic">Academic</option>
                            <option value="children">Children</option>
                            <option value="Mystery">Mystery</option>
                        </select>
                        <div id="categoryError" class="error"></div>
                    </div>
                </td>
            </tr>

            <td><label for="shop_file">Shop Logo:</label></td>
    <td>
        <div class="input-wrapper">
            <input type="file" id="shop_file" name="shop_file" accept=".jpg,.jpeg,.png,.pdf">
            <div id="fileError" class="error"></div>
        </div>
    </td>
</tr>
            <tr>
                <td><label for="terms">Accept Terms:</label></td>
                <td>
                <div class="input-wrapper checkbox-group">
            <label>
                <input type="checkbox" id="terms" name="terms">
                I agree to the terms and conditions
            </label>
                        <div id="termsError" class="error"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    <input type="submit" value="Register">
                </td>
            </tr>
            <tr>
    

       </table>
    </form>
  <!--  <script src="seller.js"></script> -->
</body>
</html>
