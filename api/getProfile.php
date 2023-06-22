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
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'xplora';

            $connection = mysqli_connect($host, $user, $password, $database);
            if (!$connection) {
                die("Koneksi database gagal: " . mysqli_connect_error());
            }

            $sqlPosts = "SELECT posts.*, users.screenName, users.username FROM posts
            INNER JOIN users ON posts.postBy = users.user_id WHERE postBy = '$user_id' ORDER BY postID DESC ";
            $resultPosts = $connection->query($sqlPosts);
            if ($resultPosts && $resultPosts->num_rows > 0) {
                while ($row = $resultPosts->fetch_assoc()) {
                  echo '<div class="p-4 m-8 bg-white" style="border-radius: 10px;">';
                  echo '<div class="flex items-center justify-between">';
                  echo '<div class="flex items-center space-x-4">';
                  echo '<img src="./public/user.png" alt="Profile Picture" class="w-12 h-12 rounded-full">';
                  echo '<div>';
                  echo '<p>' . $row['screenName'] . '</p>';
                  echo '<p>' . $row['username'] . '</p>';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="relative">';
                  echo '<button class="text-gray-400 hover:text-gray-600 focus:outline-none" onclick="toggleMenu(event)">';
                  echo '<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">';
                  echo '<path fill-rule="evenodd" d="M10 11a2 2 0 100-4 2 2 0 000 4zm0-7a2 2 0 100 4 2 2 0 000-4zm0 14a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>';
                  echo '</svg>';
                  echo '</button>';
                  echo '<div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">';
                  echo '<div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">';
                  echo '<button class="block w-full px-2 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" onclick="updateStatus(' . $row['postID'] . ', \'' . $row['status'] . '\')">Update</button>';
                  echo '<button class="block w-full px-2 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" onclick="deleteStatus(' . $row['postID'] . ')">Delete</button>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '<p class="mt-3">' . $row['status'] . '</p>';
                  echo '</div>';
                }
            } else {
                echo '<p>No posts found.</p>';
            }

            // Tutup koneksi database
            mysqli_close($connection);
?>