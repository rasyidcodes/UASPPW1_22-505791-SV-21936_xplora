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
        <span class="ml-2 text-lg font-bold">Message</span>
    </a>

    <div class="w-full h-full overflow-y-scroll" style="background-color: #EFEEF1; border-radius: 10px;">
        <div class="p-4 m-8 bg-white" style="border-radius:10px;">
                    

                    <li class="border-b border-gray-200 py-4 ">
                        <div class="flex items-center space-x-4 ">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                    src="./public/user.png"
                                    alt="Profile Picture">
                            </div>
                            <div class="flex-grow">
                                <h4 class="text-lg font-bold">Jane Smith</h4>
                                <p class="text-gray-600">Ayo kita liburan ke Bali.</p>
                            </div>
                        </div>

                        
                    </li>

                    <li class="border-b border-gray-200 py-4 ">
                        <div class="flex items-center space-x-4 ">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                    src="./public/user.png"
                                    alt="Profile Picture">
                            </div>
                            <div class="flex-grow">
                                <h4 class="text-lg font-bold">Steven Gerrard</h4>
                                <p class="text-gray-600">Kapan kamu luang?</p>
                            </div>
                        </div>

                        
                    </li>

                    <li class="border-b border-gray-200 py-4 ">
                        <div class="flex items-center space-x-4 ">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                    src="./public/user.png"
                                    alt="Profile Picture">
                            </div>
                            <div class="flex-grow">
                                <h4 class="text-lg font-bold">Mo Salah</h4>
                                <p class="text-gray-600">Ayo berkunjung ke Mesir</p>
                            </div>
                        </div>    
                    </li>
        </div>

        
        
    </div>
    
    </div>


    </body>