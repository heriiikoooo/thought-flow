<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tailwind Test</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="" style="height:100vh">
        <div class="min-h-full border flex flex-col items-center justify-center">
            <h1 class="font-montserrat text-5xl -mt-6 mb-4">Thought Flow</h1>
            <p class="text-center font-montserrat text-lg italic mb-10">"Let your thoughts flow freely. ThoughtFlow helps you capture moments, share insights, and connect with curious minds."</p>
            <a href="{{ route('feed') }}" class="cursor-pointer px-8 py-4 text-2xl rounded-full bg-white border hover:text-white hover:bg-black">Browse Thoughts</a>
        </div>
        
    </body>
</html>