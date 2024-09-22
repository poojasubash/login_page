<!DOCTYPE html>
<head>
    <title> Dashboard </title>
</head>
    <body>
        <script src="https://cdn.tailwindcss.com"></script>


            <h1 class="mt-20 text-center text-3xl font-bold leading-9 tracking-tight text-gray-900">Welcome to the Dashboard</h1>
            <form method="POST" action="/dashboard">
                @csrf
            </form>

    </body>
</html>
