<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatapp</title>
    <script src="https://cdn.tailwindcss.com"></script>
@livewireStyles
</head>
<style>
        .error-message {
            color: red; /* Set error message color to red */
            font-size: 0.875rem; /* Adjust font size */
            margin-top: 0.25rem; /* Add some space between error message and input field */
        }
    </style>
<body>
    
@livewire('chatapp');
@livewireScripts
</body>
</html>