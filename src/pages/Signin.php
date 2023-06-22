
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xplora - Sign In</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.tailwindcss.com/2.2.16/tailwind.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
    <script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="{{ mix('src/css/app.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

   
</head>
<body>

<?php
require_once './api/user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $user->login($email, $password);

    if (empty($email) || empty($password)) {
      echo '<script>
      Swal.fire({
        title: "Input Error",
        text: "Please fill in all the required fields.",
        icon: "error",
        confirmButtonText: "OK"
      });
    </script>';
    }else{
      if ($result) {
       
        echo '<script>
                  window.location.href = "/xplora/";  
              </script>';
        // Redirect to a new page or perform further actions
      } else {
        echo '<script>
          Swal.fire({
          title: "Sign in Failed",
          text: "Please input correct email and password!",
          icon: "error",
          confirmButtonText: "OK"
          });
        </script>';
      }
    }

    
}
?>

<div class="flex items-center min-h-screen bg-white ">
    <div class="container mx-auto">
      <div class="max-w-md mx-auto my-10">
        <div class="text-center">
          <h1 class="my-3 text-3xl font-semibold text-gray-700 ">Sign in</h1>
          <p class="text-gray-500 dark:text-gray-400">Sign in to access your account</p>
        </div>
        <div class="m-7">
          <form action="" method="POST">
            <div class="mb-6">
              <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email Address</label>
              <input type="email" name="email" id="email" placeholder="your@email.com" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100  dark:text-black dark:placeholder-gray-500 " />
            </div>
            <div class="mb-6">
              <div class="flex justify-between mb-2">
                <label for="password" class="text-sm text-gray-600 dark:text-gray-400">Password</label>
                <a href="#!" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 dark:hover:text-indigo-300">Forgot password?</a>
              </div>
              <input type="password" name="password" id="password" placeholder="your password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100  dark:text-black dark:placeholder-gray-500 " />
            </div>
            <div class="mb-6">
              <button type="submit" class="w-full px-3 py-3 text-white bg-indigo-500 rounded-md focus:FF398C focus:outline-none">Sign in</button>
            </div>
            <p class="text-sm text-center text-gray-400">Don't have an account yet? <a href="signup" class="text-indigo-400 focus:outline-none focus:underline focus:text-indigo-500 dark:focus:border-indigo-800">Sign up</a>.</p>
          </form>
        </div>
      </div>
    </div>
  </div>




    
</body>
</html>
