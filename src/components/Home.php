    <?php
    // PHP code
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>My PHP-generated HTML</title>
        <link href="https://cdn.tailwindcss.com/2.2.16/tailwind.min.css" rel="stylesheet">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ mix('src/css/app.css') }}" rel="stylesheet">
        <style>
            .custom-input {
                flex-grow: 1;
                overflow-y: auto;
            }
        </style>

<script>
    $(document).ready(function() {
      $('#postForm').submit(function(e) {
        e.preventDefault();

        // Serialize form data
        var formData = $(this).serialize();
        formData += '&user_id=' + 2;

        // Send AJAX request
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
      });

      // Function to load the list
      function loadList() {
        $.ajax({
          type: 'GET',
          url: './api/gdata.php',
          success: function(response) {
            $('#postList').html(response);
          }
        });
      }

      // Initial load of the list
      loadList();
    });
  </script>

  
    </head>

    <body>
    <div class="h-full w-full" style="height: calc(100vh - 56px);">
    <a class="flex items-center w-full h-14" href="#">
        <span class="ml-2 text-lg font-bold">Home</span>
    </a>

    <div class="w-full h-screen overflow-y-scroll" style="background-color: #EFEEF1; border-radius: 10px; height: calc(100vh - 56px);">
        <div class="p-4 m-8 bg-white" style="border-radius: 10px;">
            <div>
                <form id="postForm"> <!-- Tambahkan id ke form -->
                    <div class="flex items-center space-x-4">
                        <img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
                        <input type="text" id="postContent" name="postContent" placeholder="What do you want to share today?" class="w-full px-2 py-1 bg-slate-100 rounded custom-input">
                    </div>
                    <div class="border border-gray-300 mt-3 mb-3"></div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Post</button>
                    </div>
                </form>
            </div>  
        </div>

        <div id="postList"> <!-- Tambahkan id ke div yang akan diperbarui dengan daftar postingan -->
            
        </div>
    </div>
    
    </div>


    </body>