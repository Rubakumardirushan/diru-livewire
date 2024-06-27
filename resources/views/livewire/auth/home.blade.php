<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-lg mx-auto p-8 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-4xl text-blue-600 mb-6 font-bold">Hello, {{ Auth::user()->name }}!</h1>
        <button wire:click.prevent="logout()" class="inline-block bg-red-500 text-white py-2 px-6 rounded-full mb-8 shadow-lg transition transform hover:bg-red-600 hover:scale-105">Logout</button>
        <div class="flex flex-col items-center space-y-4">
            <a href="frndlist" class="w-full bg-blue-500 text-white py-3 px-6 rounded-full shadow-lg transition transform hover:bg-blue-600 hover:scale-105">Add Friend</a>
            <a href="frndrequest" class="w-full bg-gray-500 text-white py-3 px-6 rounded-full shadow-lg transition transform hover:bg-gray-600 hover:scale-105">View Friend Requests</a>
            <a href="viewfrnd" class="w-full bg-blue-300 text-white py-3 px-6 rounded-full shadow-lg transition transform hover:bg-blue-400 hover:scale-105">View Your Friends</a>
        </div>
    </div>
</body>
</html>
