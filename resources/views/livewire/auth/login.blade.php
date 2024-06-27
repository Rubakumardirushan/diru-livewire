<div class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="container mx-auto max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-center text-3xl font-extrabold text-gray-900 mb-8">Login</h2>
        <form action="authlogin" method="post" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <div class="mt-1">
                    <input type="email" id="email" name="email" placeholder="Enter email" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="email" required>
                </div>
                @error('email')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <div class="mt-1">
                    <input type="password" id="password" name="password" placeholder="Enter password" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="password" required>
                </div>
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button wire:click.prevent="login()" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
            </div>
        </form>
        @if(session('error'))
        <div class="mt-6 text-red-600 text-center font-semibold">
            {{ session('error') }}
        </div>
        @endif
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">Don't have an account? <button wire:click.prevent="registerpageshow()" class="font-medium text-indigo-600 hover:text-indigo-500">Register</button></p>
            <p class="mt-2 text-sm text-gray-600">Forgot your password? <button wire:click.prevent="emailfindpageshow()" class="font-medium text-indigo-600 hover:text-indigo-500">Reset Password</a></p>
        </div>
    </div>

    <!-- Tailwind CSS CDN -->
    
</div>