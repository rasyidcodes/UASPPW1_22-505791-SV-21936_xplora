<?php
            session_start();
            $user_id = '';
            // Access the user_id value from the session
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
                // Use the $user_id as needed
                // ...
            } else {
                // Redirect to the signup route
                header('Location: /xplora/home');
                exit(); // Terminate the current script to prevent further execution
            }

            // Koneksi ke database
            require 'connection.php';

            $connection = $conn;

            // Query untuk mendapatkan data post dengan join ke tabel users
            $query = "SELECT posts.*, users.screenName, users.username FROM posts
                      INNER JOIN users ON posts.postBy = users.user_id ORDER BY postID DESC";
            $result = mysqli_query($connection, $query);

            // Periksa apakah query berhasil dieksekusi
            if ($result) {
                // Loop untuk menampilkan setiap baris data post
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="p-4 m-8 bg-white" style="border-radius: 10px;">';
                    echo '<div class="flex items-center space-x-4">';
                    echo '<img src="./public/user.png" alt="Profile Picture" class="w-12 h-12 rounded-full">';
                    echo '<div>';
                    echo '<p class="font-bold"> ' . $row['screenName'] . '</p>';
                    echo '<p> @' . $row['username'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '<p class="mt-3">' . $row['status'] . '</p>';
                    echo '</div>';
                }

                // Bebaskan memori hasil query
                mysqli_free_result($result);
            } else {
                // Jika query gagal, tampilkan pesan error
                echo 'Error: ' . mysqli_error($connection);
            }

            // Tutup koneksi database
            mysqli_close($connection);
?>