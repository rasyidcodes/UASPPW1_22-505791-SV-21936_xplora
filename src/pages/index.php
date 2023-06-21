<?php
    session_start();

	// Access the user_id value from the session
	if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	
		// Use the $user_id as needed
		// ...
	} else {
		// Redirect to the signup route
		header('Location: /xplora/signup');
		exit(); // Terminate the current script to prevent further execution
	}
	

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Add Tailwind CSS link -->
  
  <link href="https://cdn.tailwindcss.com/2.2.16/tailwind.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
    <script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="{{ mix('src/css/app.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <title>Example HTML Columnss</title>
</head>

<style>
		
	.grid-rows-custom {
      display: grid;
      grid-template-rows: repeat(4, 1fr);
      height: calc(100% - 56px);

	  /* style="height:" */
    }

	.maincolor{
		background-color:#FF398C;
	}

	</style>

    <script>

$(document).ready(function() {
      // Load home.php content via AJAX when the page loads
      $.ajax({
        url: './src/components/Home.php',
        success: function(response) {
          $('#mainPage').html(response);
        },
        error: function() {
          // Handle error if the AJAX request fails
          $('#mainPage').html('<p>Failed to load content.</p>');
        }
      });
    });

	 

	$(document).on('click', '#home', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $.ajax({
            url: './src/components/Home.php',
            type: 'POST',
            success: function(response) {
                $('#mainPage').html(response); // Update the authContainer with the returned HTML
            }
        });
    });

	$(document).on('click', '#message', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $.ajax({
            url: './src/components/Message.php',
            type: 'POST',
            success: function(response) {
                $('#mainPage').html(response); // Update the authContainer with the returned HTML
            }
        });
    });

	$(document).on('click', '#notification', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $.ajax({
            url: './src/components/Notification.php',
            type: 'POST',
            success: function(response) {
                $('#mainPage').html(response); // Update the authContainer with the returned HTML
            }
        });
    });

	$(document).on('click', '#event', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $.ajax({
            url: './src/components/Event.php',
            type: 'POST',
            success: function(response) {
                $('#mainPage').html(response); // Update the authContainer with the returned HTML
            }
        });
    });

	$(document).on('click', '#profile', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $.ajax({
            url: './src/components/Profile.php',
            type: 'POST',
            success: function(response) {
                $('#mainPage').html(response); // Update the authContainer with the returned HTML
            }
        });
    });


	//BOttom navbar

	$(document).on('click', '#navBottomHome', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $.ajax({
            url: './src/components/Home.php',
            type: 'POST',
            success: function(response) {
                $('#mainPage').html(response); // Update the authContainer with the returned HTML
            }
        });
    });

	$(document).on('click', '#navBottomMessage', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $.ajax({
            url: './src/components/Message.php',
            type: 'POST',
            success: function(response) {
                $('#mainPage').html(response); // Update the authContainer with the returned HTML
            }
        });
    });


	$(document).on('click', '#navBottomNotification', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $.ajax({
            url: './src/components/Notification.php',
            type: 'POST',
            success: function(response) {
                $('#mainPage').html(response); // Update the authContainer with the returned HTML
            }
        });
    });

	$(document).on('click', '#navBottomProfile', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $.ajax({
            url: './src/components/Profile.php',
            type: 'POST',
            success: function(response) {
                $('#mainPage').html(response); // Update the authContainer with the returned HTML
            }
        });
    });

	$(document).on('click', '#logout', function(event) {
        event.preventDefault(); // Prevent default link behavior
		
        $.ajax({
            url: './api/Logout.php',
            type: 'POST',
            success: function(response) {
				window.location.href = '/xplora/signup';
			}
        });
    });



    </script>

<body>
<div class="grid grid-cols-12 h-screen container mx-auto">
    <div class="bg-maincolor hidden md:block md:col-span-3  lg:col-span-2 w-full">
      <!-- Column 1 Content -->
      
      <div class="flex flex-col items-center w-full h-screen overflow-hidden text-gray-700 rounded ">
		<a class="flex items-center w-full px-3 mt-3" href="#">
			<svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
				<path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
			</svg>
			
			<span class="ml-2 text-sm font-bold">Xplora</span>
		</a>
		<div class="w-full px-2">
			<div class="flex flex-col items-center w-full mt-3 border-t border-gray-300" >
				<a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#" id="home">
					<i class="fas fa-home w-8 h-8 flex items-center justify-center"></i>
					<span class="ml-2 text-sm font-medium">Home</span>
				</a>

				<a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#" id="message">
					<i class="fas fa-envelope w-8 h-8 flex items-center justify-center"></i>
					<span class="ml-2 text-sm font-medium">Messages</span>
					<span class="absolute top-0 left-0 w-2 h-2 mt-2 ml-2 bg-indigo-500 rounded-full"></span>
				</a>

				<a id="notification" class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300"  href="#" id="notification" >
					<i class="fas fa-bell w-8 h-8 flex items-center justify-center"></i>
					<span class="ml-2 text-sm font-medium">Notification</span>
				</a>

				<a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#" id="search">
					<i class="fas fa-search w-8 h-8 flex items-center justify-center"></i>
					<span class="ml-2 text-sm font-medium">Search</span>
				</a>
				<a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="#" id="event" >
					<i class="fas fa-calendar-alt w-8 h-8 flex items-center justify-center"></i>
					<span class="ml-2 text-sm font-medium">Event</span>
				</a>
				

				<a id="profile" class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300"  href="#" id="profile">
					<i class="fas fa-user w-8 h-8 flex items-center justify-center"></i>
					<span class="ml-2 text-sm font-medium">Profiles</span>
				</a>

				
			</div>
			<div class="flex flex-col items-center w-full mt-2 border-t border-gray-300">
				
				<a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#">
					<i class="fas fa-cog w-8 h-8 flex items-center justify-center"></i>
					<span class="ml-2 text-sm font-medium">Settings</span>
				</a>
				
			</div>
		</div>
		<a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-200 hover:bg-gray-300" href="#" id="logout">
			<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
			<span class="ml-2 text-sm font-medium">Logout</span>
		</a>
	</div>

    </div>
    <div class="  col-span-12 md:col-span-9 lg:col-span-6 w-full">
      <!-- Column 2 Content -->
      
      <!-- <div class="h-screen w-full pb-40" id="mainPaxge">

	  <nav class="fixed bottom-0 left-0 right-0 bg-gray-200 py-4 flex justify-between">
    <div class="flex items-center mx-auto">
      <a class="nav-item mx-4" href="#" data-target="home">Home</a>
      <a class="nav-item mx-4" href="#" data-target="about">About</a>
      <a class="nav-item mx-4" href="#" data-target="contact">Contact</a>
    </div>
  </nav>
  
		</div> -->

	
	<div class="h-screen w-full flex flex-col" >
  <!-- Your page content here -->
  
	<div class="flex-grow" id="mainPage">
		<!-- Your main content goes here -->
	</div>

  <nav class="bg-indigo-500 py-4 fixed bottom-0 left-0 right-0 z-9999 md:hidden">
    <div class="flex justify-around mx-auto ">
	<a class="nav-item mx-4 text-white" href="#" data-target="home" id="navBottomHome">
        <i class="fas fa-home"></i>
      </a>
      <a class="nav-item mx-4 text-white" href="#" data-target="message" id="navBottomMessage">
        <i class="fas fa-envelope"></i>
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



		

    </div>
    <div class="hidden lg:block  md:col-span-4 w-full">
      <!-- Column 3 Content -->
      
      <div class="grid grid-rows-2 h-screen">
  			<div class=" w-full">
				<a class="flex items-center w-full h-14" href="#">
					<span class="ml-8 text-lg font-bold">Suggested for you </span>
				</a>
				
				<div class="grid grid-rows-4 grid-rows-custom">
    
				<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>
					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					
  				</div>
			</div>
			<div class=" w-full">

				<a class="flex items-center w-full h-14" href="#">
					<span class="ml-8 text-lg font-bold">Trends </span>
				</a>
				
				<div class="grid grid-rows-4 grid-rows-custom">
    
				<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
							
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>
					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					
  				</div>

			</div>

  		</div>
		
        
      
    </div>

	
  </nav>

  </div>
</body>

</html>
