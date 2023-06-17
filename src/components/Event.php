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

            li {
            list-style-type: none;
        }
        </style>
    </head>

    <body>
    <div class="h-full w-full" style="height: calc(100vh - 56px);">
    <a class="flex items-center w-full h-14" href="#">
        <span class="ml-2 text-lg font-bold">Event</span>
    </a>

    <div class="w-full h-full overflow-y-scroll" style="background-color: #EFEEF1; border-radius: 10px;">
        <div class=" m-8 " style="border-radius:10px;">
                    
        <ul class="grid gap-6">
      <li class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
          <h2 class="text-2xl font-bold mb-2">Trip 1</h2>
          <p class="text-gray-600">Destination 1</p>
          <p class="text-gray-600">Date: 2023-07-01</p>
          <p class="text-gray-600">Biaya: 1000</p>
          <p class="text-gray-600">People can join: 10</p>
          <p class="text-gray-600">Keterangan: Lorem ipsum dolor sit amet</p>
          <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 mt-4 rounded">JOIN</button>
        </div>
      </li>
      <li class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
          <h2 class="text-2xl font-bold mb-2">Trip 2</h2>
          <p class="text-gray-600">Destination 2</p>
          <p class="text-gray-600">Date: 2023-08-15</p>
          <p class="text-gray-600">Biaya: 1500</p>
          <p class="text-gray-600">People can join: 15</p>
          <p class="text-gray-600">Keterangan: Consectetur adipiscing elit</p>
          <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 mt-4 rounded">JOIN</button>
        </div>
      </li>
      <!-- Add more event items with JOIN button as needed -->
    </ul>

                    
                  

                    

    </div>

        
        
    </div>
    
    </div>


    </body>