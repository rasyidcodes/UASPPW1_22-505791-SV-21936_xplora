<?php

require('../../api/connection.php');
$mysqli = $conn;

// Query to retrieve the notification data
$query = "SELECT n.notificationFrom, n.notificationFor, n.type, n.time,
          u.username AS notificationFromUsername
          FROM notification n
          INNER JOIN users u ON n.notificationFrom = u.user_id";

// Execute the query
$result = $mysqli->query($query);

// Check for query execution error
if (!$result) {
    echo 'Error executing the query: ' . $mysqli->error;
    exit();
}

// Fetch the notification data as an associative array
$notifications = [];
while ($row = $result->fetch_assoc()) {
    $notifications[] = $row;
}

// Close the database connection
$mysqli->close();
?>

<!-- HTML markup and dynamic PHP code for the notification list -->
<!DOCTYPE html>
<html lang="en">

<!-- ...Rest of the HTML code... -->

<body >
    <!-- ...Rest of the HTML code... -->
    <a class="flex items-center w-full h-14" href="#">
        <span class="ml-2 text-lg font-bold">Notification</span>
    </a>

    <div class="bg-white  overflow-hidden sm:rounded-lg px-4">
        <ul class="divide-y divide-gray-200">
            <?php foreach ($notifications as $notification) {
                $iconClass = '';
                $caption = '';

                // Generate icon and caption based on notification type
                switch ($notification['type']) {
                    case 'follow':
                        $iconClass = 'fas fa-user-plus';
                        $caption = $notification['notificationFromUsername'] . ' started following you';
                        break;
                    case 'repost':
                        $iconClass = 'fas fa-retweet';
                        $caption = $notification['notificationFromUsername'] . ' reposted your post';
                        break;
                    case 'like':
                        $iconClass = 'fas fa-heart';
                        $caption = $notification['notificationFromUsername'] . ' liked your post';
                        break;
                    case 'mention':
                        $iconClass = 'fas fa-at';
                        $caption = 'You were mentioned by ' . $notification['notificationFromUsername'];
                        break;
                }
            ?>
                <li>
                    <a href="#" class="block hover:bg-gray-50">
                        <div class="flex items-center px-4 py-4 sm:px-6">
                            <div class="flex-shrink-0">
                                <i class="<?php echo $iconClass; ?> w-6 h-6 text-gray-400"></i>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    <?php echo $caption; ?>
                                </div>
                                <div class="text-sm text-gray-500">
                                    <?php echo $notification['time']; ?> <!-- Assuming 'time' field contains the timestamp -->
                                </div>
                                <div class="text-sm text-gray-500">
                                    
                                </div>
                                <div class="text-sm text-gray-500">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <!-- ...Rest of the HTML code... -->
</body>

</html>
