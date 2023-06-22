<?php
// PHP code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xplora";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM trips";
$result = $conn->query($sql);

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
        <div class="m-8" style="border-radius:10px;">

            <ul class="grid gap-6">
                <?php
                // Loop through the retrieved data and display each trip item
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                            <li class="bg-white shadow-md rounded-lg overflow-hidden">
                                <div class="p-6">
                                    <h2 class="text-2xl font-bold mb-2">' . $row["trip_name"] . '</h2>
                                    <p class="text-gray-600">Destination: ' . $row["destination"] . '</p>
                                    <p class="text-gray-600">Date: ' . $row["trip_date"] . '</p>
                                    <p class="text-gray-600">Biaya: ' . $row["cost"] . '</p>
                                    <p class="text-gray-600">People can join: ' . $row["slots_available"] . '</p>
                                    <p class="text-gray-600">Keterangan: ' . $row["description"] . '</p>
                                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 mt-4 rounded">JOIN</button>
                                </div>
                            </li>
                        ';
                    }
                } else {
                    echo "No trips found.";
                }
                ?>
            </ul>

        </div>
    </div>
</div>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
