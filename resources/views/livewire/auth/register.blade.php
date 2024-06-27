<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="bg-blue-500 text-white text-center py-4">
                        <h1 class="text-xl font-bold">Register</h1>
                    </div>
                    <div class="p-6">
                        <form >
                            @csrf

                            <div class="mb-4">
                                <label for="username" class="block text-gray-700 font-bold mb-2">Username</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="name" placeholder="Enter username" wire:model="name">
                                @error('name')
                                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                                <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" placeholder="Enter email" wire:model="email">
                                @error('email')
                                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                                <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" placeholder="Password" wire:model="password">
                                @error('password')
                                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm Password</label>
                                <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" wire:model="password_confirmation">
                                @error('password_confirmation')
                                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full mt-4" wire:click.prevent=" register()">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
