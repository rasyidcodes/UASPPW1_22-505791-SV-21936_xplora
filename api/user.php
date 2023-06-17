<?php
require_once 'db_config.php';
session_start();

class User extends DBConfig {
    public function register($username, $password, $email, $screenName) {
        // Check if the username or email already exists in the database
        $query = "SELECT user_id FROM users WHERE username = '$username' OR email = '$email'";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return false; // Username or email already exists
        } else {
            // Insert the new user into the database
            $hashedPassword = md5($password);
            $query = "INSERT INTO users (username, password,email, screenName) VALUES ('$username', '$hashedPassword', '$email','$screenName')";
            $result = $this->conn->query($query);

            $_SESSION['user_id'] = $this->conn->insert_id;

            return $result;
        }
    }

    public function login($email, $password) {
        // Retrieve user information from the database
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            // Verify the password using bcrypt
            if (md5($password) == $user['password']) {
                $_SESSION['user_id'] = $user['user_id'];
                return $user; // Login successful
            }
        }

        return null; // Login failed
    }
    
}
?>
