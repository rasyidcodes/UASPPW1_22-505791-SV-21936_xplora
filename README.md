
Rasyid Kusnady
22/505791/SV/21936
# About Xplora
- Xplora adalah sebuah platform media sosial bagi traveller untuk berbagi informasi mengenai travelling.

Xplora mencoba mengatasi beberapa permasalahan yang sering dihadapi oleh para pelancong, antara lain:

1. Informasi terbatas: Xplora berusaha menyediakan aksesibilitas informasi yang lebih luas tentang destinasi wisata, objek wisata, dan aktivitas di berbagai tempat. Hal ini membantu para pelancong mendapatkan informasi yang akurat dan terbaru, termasuk ulasan dan rekomendasi dari pengguna lain.

2. Kesulitan merencanakan perjalanan: Xplora menyediakan fitur event yang memungkinkan pengguna untuk menemukan dan bergabung dalam perjalanan dan acara-acara menarik. Dengan adanya fitur ini, pelancong dapat mencari dan bergabung dengan kelompok perjalanan yang sesuai dengan minat mereka, sehingga memudahkan mereka dalam merencanakan perjalanan.

3. Kurangnya interaksi dan koneksi dengan pelancong lain: Melalui fitur pesan dan komunitas yang ada di Xplora, para pelancong dapat berinteraksi dengan sesama pelancong. Hal ini membantu menciptakan kesempatan untuk bertukar pengalaman, tips perjalanan, dan informasi berguna lainnya. Pengguna juga dapat menemukan teman perjalanan baru dan memperluas jaringan sosial mereka.

4. Tantangan bahasa dan budaya: Xplora dapat membantu mengatasi tantangan bahasa dan budaya dengan menyediakan fungsi penerjemah dan memfasilitasi pertukaran budaya di antara pengguna. Hal ini memungkinkan pelancong untuk berkomunikasi dengan lebih mudah dan memahami budaya setempat dengan lebih baik.

# Fitur Xplora
- Home : Pengguna dapat melihat postingan dari pengguna lain di halaman beranda, menjelajahi momen-momen berharga, menemukan inspirasi, dan terhubung dengan pengguna lain di seluruh dunia.

- Message: Fitur ini memungkinkan pengguna untuk berkomunikasi secara pribadi dengan teman-teman mereka. Pengguna dapat mengirim pesan, berbagi foto dan video, serta memperkuat ikatan persahabatan melalui percakapan yang intim.

- Event: Pengguna dapat bergabung dalam perjalanan dan acara menarik melalui fitur ini. Dengan adanya fitur ini, pengguna dapat menjelajahi berbagai kesempatan untuk menemukan pengalaman baru, bertemu dengan orang-orang baru, dan mengembangkan jaringan sosial.

- Notification : Fitur notifikasi memberikan informasi terbaru kepada pengguna tentang aktivitas, pembaruan, dan interaksi yang terkait dengan akun mereka. Dengan adanya notifikasi, pengguna dapat tetap terhubung dengan apa yang terjadi di sekitar mereka dan tidak melewatkan hal-hal penting.

- Profile : Fitur profil memungkinkan pengguna untuk melihat informasi akun mereka, seperti foto profil, bio, dan minat pribadi. Pengguna juga dapat mengedit dan memperbarui postingan mereka, sehingga tetap terhubung dengan komunitas yang lebih luas.

# Libarary dan cara run

### Library :
- tailwind untuk styling css.
- JQUERY untuk memanipulasi elemen HTML (AJAX).
- SweetAlert untuk memunculkan alert.

### Run :
- Import terlebih dahulu file sql yaitu xplora.sql dengan nama database xplora.
- Kemudian setup directory XAMPP menggunakan nama 'XPLORA' -> jadi http://localhost/xplora/
- RUN

# Kriteria Penilaian

## Desain
- Menggunakan elemen-elemen desain yang konsisten dalam seluruh proyek, termasuk penggunaan warna, tata letak, dan gaya. Konsistensi membantu membangun citra merek yang kuat dan memudahkan pengguna dalam berinteraksi dengan desain.
- Tata letak yang mudah dipahami user, menggunakan sidebar.
- Tipografi jelas.

```

<div class="w-full">
    <div class="w-full justify-between flex">
        #Menggunakan tipografi bold untuk menyatakan mana yang lebih utama dari 2 baris tulisan.
        <p class="font-bold">#LabuanBajo</p>
    </div>
    <p class="text-gray-800">1000 posts</p>
</div>

 ```
## Website responsive

Responsive terdapat pada bagian beranda dari web ini
contoh pada index.html

```
<div class="grid grid-cols-12 h-screen container mx-auto">
    <div class="bg-maincolor hidden md:block md:col-span-3  lg:col-span-2 w-full">
        //content left-sidebar
    </div>

<div class=" col-span-12 md:col-span-9 lg:col-span-6 w-full">
	<div class="h-screen w-full flex flex-col" >

	<div class="flex-grow" id="mainPage">
		<!-- Your main content goes here -->
	</div>

  <nav class="bg-indigo-500 py-4 fixed bottom-0 left-0 right-0 z-9999 md:hidden">
    <div class="flex justify-around mx-auto ">
	<a class="nav-item mx-4 text-white" href="#" data-target="home" id="navBottomHome">
        <i class="fas fa-home"></i>
      </a>
      <a class="nav-item mx-4 text-white" href="#" data-target="message" id="navBottomEvent">
        <i class="fas fa-calendar-alt"></i>
      </a>
      <a class="nav-item mx-4 text-white" href="#" data-target="contact" id="navBottomNotification">
        <i class="fas fa-bell"></i>
      </a>
      <a class="nav-item mx-4 text-white" href="#" data-target="contact" id="navBottomProfile">
        <i class="fas fa-user"></i>
      </a>
    </div>
  </nav>
</div>
<div class="hidden lg:block  md:col-span-4 w-full">
 //content right-sidebar
</div>
</div>
```
#### Penjelasan : 
- Pada index.php terbagi menjadi 12 column
- Pada saat layar berukuran mobile hanya menampilkan bagian bottom navigation bar dan juga main page yang mempunyai col-span-12
- Pada saat layar dibuka di tablet (md) maka left-sidebar yang tadinya hidden saat md akan menjadi block dengan col-span-3 dan mainpage menjadi col-span-9.
- Pada saat dibuka di desktop (lg) maka left-sidebar (col-span-2), mainpage (col-span-6).

  

## Feedback ke user

- Terdapat 2 cara untuk memberikan feedback ke user yaitu menggunakan alert bawaan JS dan juga sweetaleet
  
```
$.ajax({
          type: 'POST',
          url: './api/adata.php',
          data: formData,
          success: function(response) {
            // Clear form fields
            alert("sukses menambahkan");
           
            // Reload the list
            loadList();
          }
        });
```
ini adalah alert yang diberikan kepada user apabila telah berhasil memposting.

```
function deleteStatus(postId) {
    
     var data = 'param1=' + postId + '&param2=' + postId;
    Swal.fire({
  title: 'Are you sure?',
  text: 'This action cannot be undone.',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    // User confirmed the deletion
    // Make the AJAX request using the fetch API
    fetch('./api/delete_status.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: data
    })
      .then(function(response) {
        if (response.ok) {
          // Request was successful, handle the response here
          return response.text();
          loadList();
        } else {
          // Request failed, handle the error here
          throw new Error('Request failed. Error code: ' + response.status);
        }
      })
      .then(function(responseText) {
        console.log(responseText); // Output the response to the console
        loadList();
        // Show success message using SweetAlert
        Swal.fire('Deleted!', responseText, 'success');
      })
      .catch(function(error) {
        console.log(error); // Output the error to the console

        // Show error message using SweetAlert
        Swal.fire('Error', error.message, 'error');
      });
  } else if (result.dismiss === Swal.DismissReason.cancel) {
    // User canceled the deletion
    Swal.fire('Cancelled', 'The deletion has been cancelled.', 'info');
  }
});

  }
```

Ini merupakan feedback menggunakan sweetalert apakah user yakin untuk menghapus sebuah data.  Swal.fire('Deleted!', responseText, 'success'); pada kode ini Swal merupakan class yang mempunyai method .fire() yang akan diisi oleh parameter yang akan ditampilkan.

## Konten dinamis
Pada konten dinamis web ini menggunakan mysql, dengan backend php, dan juga Jquery(ajax) untuk memanupulasi html.

- #### Create

##### register user
./api/user.php
```
<?php

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

}
?>

```
Menggunakan konsep OOP yaitu class user yang mempunyai method register menggunakan QUERY INSERT untuk memasukan data ke sql. Kemudian menjalankan session bawaan php menggunan session_start()

```
#### memposting data ke home
./api/adata.php
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


// Establish database connection (replace with your own details)
require 'connection.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$postContent = $_POST['postContent'];



// Prepare and execute SQL statement to insert data
$sql = "INSERT INTO posts (status, postBy) VALUES ('$postContent', '$user_id')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
```
Pertama adalah mengecek session apakah user sudah login atau belum. jika belum maka akan diarahakan untuk login terlebih dahulu. Pada bagian ini menunjukan untuk insert data menggunakan query insert untuk memasukkan data ke tabel posts.


- Read


```
untuk menampilkan postingan pada halaman home
Home.php
function loadList() {
        $.ajax({
          type: 'GET',
          url: './api/gdata.php',
          success: function(response) {
            $('#postList').html(response);
          }
        });
      }
loadList();

gdata.php

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

```
Data akan ditampilkan pada id="postList" supaya tidak melakukan reload makan menggunakan ajax.

- Update
```
<?php
// Retrieve the data sent from JavaScript
$status = $_POST['param1'];
$postID = $_POST['param2'];


require 'connection.php';

            
// Check for connection errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Prepare the update query
$sql = "UPDATE posts SET status = '$status'  WHERE postID = '$postID'"; // Replace with your actual table and column names

// Execute the update query
if ($conn->query($sql) === TRUE) {
    echo 'Data updated successfully';
} else {
    echo 'Error updating data: ' . $conn->error;
}

// Close the database connection
$conn->close();
?>

```
Update digunakan untuk mengupdate postingan atau status yang telah dibuat oleh user pada menu profile menggunakan query delete dan juga ajax untuk auto reload postingan yang ada.

- Delete

```
<?php
// Retrieve the data sent from JavaScript
$postID = $_POST['param1'];

// Perform the update operation with the received data
// Replace this code with your actual update logic

require 'connection.php';

// Check for connection errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Prepare the update query
$sql = "DELETE FROM posts WHERE postID = '$postID'"; // Replace with your actual table and column names

// Execute the update query
if ($conn->query($sql) === TRUE) {
    echo 'Data deleted successfully';
} else {
    echo 'Error deleting data: ' . $conn->error;
}

// Close the database connection
$conn->close();
?>


```
Untuk menghapus postingan sesuai postID.


# Route available
index.php
```
$route->add("/signin","src/pages/Signin.php");
$route->add("/signup","src/pages/Signup.php");
$route->add("/","src/pages/index.php");
$route->add("/home","src/pages/home.php");
$route->notFound("src/pages/404.php");

```


