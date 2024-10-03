<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Witcher 3: Prieto's edition</title>


    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/css/bootstrap.min.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-eMN2lL4anV/1KN6sL4GqZx1N1lDf6pMd8HcY1RY1xPQH+H9wP1GzB6ouJdYdRfB" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>
</head>

<body class="min-h-full bg-gray-100"> <!-- Background for the full body -->
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8"
                                src="https://myhotposters.com/cdn/shop/products/mHP0489_1024x1024.jpeg?v=1571444324"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow"> <!-- White background for the header -->
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            </div>
        </header>

        <main class="bg-gray-100"> <!-- Grayish background for content below the header -->
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
