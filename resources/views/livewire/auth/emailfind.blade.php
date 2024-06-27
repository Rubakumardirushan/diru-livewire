
<div class="bg-gray-100 p-10">
    <div class="container mx-auto max-w-md">
        <h1 class="text-center text-3xl font-bold mb-8">Enter Your Email</h1>
        <form action="/email-otp" method="post">
            @csrf
            <input type="email" class="w-full px-4 py-2 rounded-lg shadow-md mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" id="email" name="email" placeholder="Enter your email">
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
        </form>
    </div>

    
</div>
