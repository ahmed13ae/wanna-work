<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/css/app.js'])
    <title>wanna-work</title>
</head>

<body class="bg-black text-white font-hanken">
    <div class="px-10">
        <nav class="flex justify-between items-center border-b border-white/15 py-4">
            <div><a href="/">W-W</a></div>
            <div class="space-x-6 font-bold"><a href="">Careers</a>
                <a href="">Jobs</a>
                <a href="">Salaries</a>
                <a href="">Salaries</a>

            </div>
            <div><a href="">Post a job</a></div>
        </nav>
        <main class="mt-10 max-w-[986px] m-auto">
            {{ $slot }}
        </main>

    </div>
</body>

</html>
