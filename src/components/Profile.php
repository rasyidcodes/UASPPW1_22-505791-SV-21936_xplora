<?php
// PHP code

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



require '../../api/connection.php';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data based on user_id
// Change this to the desired user_id
$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
$result = $conn->query($sql);

// Check if any data is found
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();

    // Assign data to variables
    $username = $row['username'];
    $screenName = $row['screenName'];
    $profileImage = $row['profileImage'];
    $followers = $row['followers'];
    $bio = $row['bio'];
    $posts = array(); // Array to store posts

    // Fetch user's posts
    $postSql = "SELECT * FROM posts WHERE postBy = $user_id";
    $postResult = $conn->query($postSql);

} else {
    echo "No user found with user_id $user_id";
}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>My PHP-generated HTML</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.tailwindcss.com/2.2.16/tailwind.min.css" rel="stylesheet">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
        <link href="{{ mix('src/css/app.css') }}" rel="stylesheet">
        <style>
            .custom-input {
                flex-grow: 1;
                overflow-y: auto;
            }

            li {
            list-style-type: none;
        }
        </style>

<script>
  function toggleMenu(event) {
    event.stopPropagation();
    var menu = event.currentTarget.nextElementSibling;
    menu.classList.toggle('hidden');
  }

  function updateStatus(postId, status) {
    
    var modal = document.getElementById("statusModal");
    var inputstatus = document.getElementById("newStatusInput");
    var updateButton = document.getElementById("updateButton");

    inputstatus.value = status;
    modal.classList.remove("hidden");
    modal.classList.add("flex");

    updateButton.onclick = function () {
            // var newStatus = newStatusInput.value;

            // Create a new XMLHttpRequest object
          
            var data = 'param1=' + inputstatus.value + '&param2=' + postId;
            fetch('./api/update_status.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
              },
              body: data
            })
              .then(function(response) {
                if (response.ok) {
                  // Request was successful, handle the response here
                  alert("data sukses diupdate");
                  loadList();
                  modal.classList.add("hidden");

                } else {
                  // Request failed, handle the error here
                  throw new Error('Request failed. Error code: ' + response.status);
                }
              })
              .then(function(responseText) {
                console.log(responseText); // Output the response to the console
              })
              .catch(function(error) {
                console.log(error); // Output the error to the console
              });
           
        };
  }

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

      function loadList() {
        $.ajax({
          type: 'GET',
          url: './api/getProfile.php',
          success: function(response) {
            $('#postList').html(response);
          }
        });
      }

      // Initial load of the list
      loadList();



  window.addEventListener('click', function (event) {
    var modal = document.getElementById('statusModal');
    if (event.target === modal) {
      // Close the modal when clicked outside
      modal.classList.add('hidden');
    }
  });
</script>



    </head>

    <body>
    <div class="h-full w-full" style="height: calc(100vh - 56px);">
    <a class="flex items-center w-full h-14" href="#">
        <span class="ml-2 text-lg font-bold">Profile</span>
    </a>

    <div class="w-full h-full overflow-y-scroll" style="background-color: #EFEEF1; border-radius: 10px;">
        <div class=" bg-white" style="border-radius:10px;">
            <div class="flex items-center justify-center p-8 bg-indigo-500 " >
                <img class="w-32 h-32 object-cover rounded-full" src="./public/user.png" alt="Profile Photo">
            </div>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2"><?php echo $username; ?></div>
                <div class="text-gray-600">@<?php echo $screenName; ?></div>
                <p class="text-gray-700 text-base mt-2"><?php echo $bio; ?></p>
            </div>
            <div class="px-6 py-4 flex items-center justify-between bg-gray-100">
                <div class="text-gray-600">
                    <span class="font-bold">Followers:</span>
                    <span><?php echo $followers; ?></span>
                </div>
                <div class="text-gray-600">
                    <span class="font-bold">Posts:</span>
                    <span><?php echo count($posts); ?></span>
                </div>
            </div>
            <div class="p-4 bg-gray-200">
            <h2 class="text-xl font-bold mb-4">Posts</h2>
                <div id="postList"> <!-- Tambahkan id ke div yang akan diperbarui dengan daftar postingan -->
                
                </div>

                <?php
                
                ?>
            </div>
        </div>
    </div>
</div>
<div id="statusModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center">
  <div class="modal-content bg-white w-3/4 md:w-1/2 p-6 rounded-lg">
    <span class="close absolute top-2 right-2 text-gray-600 cursor-pointer">&times;</span>
    <h2>Update Status</h2>
    
    <input type="text" id="newStatusInput" placeholder="Enter new status" class="border border-gray-300 px-2 py-1 mt-2 rounded w-full">
    <div class="flex justify-end mt-4">
      <button id="updateButton" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </div>
  </div>
</div>


    </body>