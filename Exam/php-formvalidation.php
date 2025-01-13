<html>
    <head>
        <title>Validation</title>
        <style>
            form{
                width:300px;
                border: 1px solid black;
            }
            label, input, select{
                width:70%;
                margin:5px;
            }
        </style>
    </head>
    <body><center>
        <form method="POST">
            <h2>PHP Form Validation</h2>

            <label><input type="text" name="name" placeholder="Name"></label>
            <label><input type="tel" name="phone" placeholder="Phone"></label>
            <label><input type="email" name="email" placeholder="Email"></label>
            <label><input type="text" name="address" placeholder="Address"></label>
            <select name="qlf">
                <option value="">Select Any</option>
                <option value="B">B</option>
                <option value="M">M</option>
            </select>
            <label><input type="password" name="pass" placeholder="Password"></label>
            <label><input type="password" name="cpass" placeholder="Confirm Password"></label>

            <button type="submit">Register</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'] ?? "";
                $phone = $_POST['phone'] ?? '';
                $email = $_POST['email'] ?? '';
                $address = $_POST['address'] ?? '';
                $qlf = $_POST['qlf'] ?? '';
                $pass = $_POST['pass'] ?? '';
                $cpass = $_POST['cpass'] ?? '';

                // Display errors if any fields are empty
                if (!$name) echo "<p>No name</p>";
                if (!$phone || !is_numeric($phone) || strlen($phone) != 10) echo "<p>Phone must be 10 digits</p>";
                if (!$address) echo "<p>No address</p>";
                if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) echo "<p>Invalid email</p>";
                if (!$pass || $pass !== $cpass) echo "<p>Passwords do not match or are empty</p>";

                // Check if all fields are valid
                if ($name && $phone && strlen($phone) == 10 && $email && filter_var($email, FILTER_VALIDATE_EMAIL) && $address && $qlf && $pass && $pass === $cpass) {
                    echo "<script>alert('Successful!');</script>";
                }
            }
        ?>
    </center>
    </body>
</html>
