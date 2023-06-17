<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
 
  <title>Notification List UI</title>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto px-4">
  <a class="flex items-center w-full h-14" href="#">
        <span class="ml-2 text-lg font-bold">Notification</span>
    </a>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
      <ul class="divide-y divide-gray-200">
        <li>
          <a href="#" class="block hover:bg-gray-50">
            <div class="flex items-center px-4 py-4 sm:px-6">
              <div class="flex-shrink-0">
              <i class="fas fa-user-plus w-6 h-6 text-gray-400"></i>
              </div>
              <div class="ml-4">
                <div class="text-sm font-medium text-gray-900">
                  John Doe started following you
                </div>
                <div class="text-sm text-gray-500">
                  10 minutes ago
                </div>
                <div class="text-sm text-gray-500">
                  No additional information
                </div>
                <div class="text-sm text-gray-500">
                  No agenda
                </div>
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="block hover:bg-gray-50">
            <div class="flex items-center px-4 py-4 sm:px-6">
              <div class="flex-shrink-0">
              <i class="fas fa-retweet w-6 h-6 text-gray-400"></i>
              </div>
              <div class="ml-4">
                <div class="text-sm font-medium text-gray-900">
                  Jane Smith reposted your post
                </div>
                <div class="text-sm text-gray-500">
                  1 hour ago
                </div>
                <div class="text-sm text-gray-500">
                  Check out the reposted content
                </div>
                <div class="text-sm text-gray-500">
                  No agenda
                </div>
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="block hover:bg-gray-50">
            <div class="flex items-center px-4 py-4 sm:px-6">
              <div class="flex-shrink-0">
              <i class="fas fa-plus w-6 h-6 text-gray-400"></i>
              </div>
              <div class="ml-4">
                <div class="text-sm font-medium text-gray-900">
                  New trip suggestion: Beach getaway
                </div>
                <div class="text-sm text-gray-500">
                  2 days ago
                </div>
                <div class="text-sm text-gray-500">
                  Check out the trip details
                </div>
                <div class="text-sm text-gray-500">
                  June 20 - June 25, 2023
                </div>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</body>

</html>
