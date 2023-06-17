<?php
            // Koneksi ke database
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'xplora';

            $connection = mysqli_connect($host, $user, $password, $database);
            if (!$connection) {
                die("Koneksi database gagal: " . mysqli_connect_error());
            }

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
                    echo '<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">';
                    echo '<div>';
                    echo '<p>' . $row['screenName'] . '</p>';
                    echo '<p>' . $row['username'] . '</p>';
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