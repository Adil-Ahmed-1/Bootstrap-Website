<?php
require_once("connection.php");
extract($_REQUEST);

// ========== REGISTER ========== //
if (isset($_POST['action']) && $_POST['action'] === 'register') {
    if (!empty($name) && !empty($email) && !empty($password) && !empty($gender) && !empty($user_role_type)) {
        $checkQuery = "SELECT * FROM users WHERE email = '$email'";
        $checkResult = mysqli_query($connection, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            echo "Email already registered.";
        } else {
            // Direct password (not hashed)
            $insertQuery = "INSERT INTO users (name, email, password, gender, user_role_type) 
                            VALUES ('$name', '$email', '$password', '$gender', '$user_role_type')";
            if (mysqli_query($connection, $insertQuery)) {
                setcookie("email", base64_encode($email), time() + 3600, "/");
                setcookie("password", base64_encode($password), time() + 3600, "/");
                setcookie("name", base64_encode($name), time() + 3600, "/");

                header("Location: index.php");
                exit;
            } else {
                echo "Registration failed. Try again.";
            }
        }
    } else {
        echo "All fields are required!";
    }
}

// ========== LOGIN ========== //
else if (isset($_POST['action']) && $_POST['action'] === 'login') {
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        setcookie("email", base64_encode($email), time() + 3600, "/");
        setcookie("password", base64_encode($password), time() + 3600, "/");
        setcookie("name", base64_encode($user['name']), time() + 3600, "/");

        header("Location: index.php");
        exit;
    } else {
        echo "Invalid email or password!";
    }
} else {
    echo "Invalid request.";
}
?>
