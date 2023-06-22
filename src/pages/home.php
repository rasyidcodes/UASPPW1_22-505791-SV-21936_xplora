<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
    <script src="https://cdn.tailwindcss.com"></script>
  <title>Xplora Hero Banner</title>



</head>

<body>
    
  <div class="bg-cover bg-center bg-no-repeat h-screen w-scren" style="background-image: url('./public/hero.png');">
  <div class="container mx-auto h-full relative">
  <div class="flex justify-end pt-10 pr-4">
    <button id="signupButton" class="px-4 py-2 border border-white text-white focus:outline-none  rounded z-20">Sign Up</button>
    <button id="signinButton" class="ml-2 px-4 py-2 bg-white text-gray-700  focus:outline-none rounded z-20">Sign In</button>
  </div>
  <div class="flex flex-col items-center justify-center h-full absolute inset-0 z-10">
    <h1 class="text-5xl font-bold text-white mb-4">Xplora</h1>
    <h2 class="text-2xl text-white">Let's explore with us!</h2>
  </div>
</div>

  </div>

  <script>
    var signupButton = document.getElementById("signupButton");
    signupButton.addEventListener("click", function() {
        window.location.href = '/xplora/signup';
    });

    var signinButton = document.getElementById("signinButton");
    signinButton.addEventListener("click", function() {
        window.location.href = '/xplora/signin';
    });
  </script>

</body>

</html>
