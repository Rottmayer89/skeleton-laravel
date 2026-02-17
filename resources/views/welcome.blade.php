<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class=''>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-900 text-stone-300 flex flex-col items-center justify-center gap-10">

    <h1 class='text-lime-500 text-xl pt-5 font-bold'>This is Laravel Skeleton, Tailwind, AlpineJS, Pest</h1>

    <p class='text-main-500'>Description</p>
    <i class="ti ti-heart text-rose-500"></i>


    <div x-data="{ count: 0 }">
        <button x-on:click="count++"
            class='bg-indigo-500 text-white py-2 px-4 rounded-md cursor-pointer'>Increment</button>



        <span x-text="count" class='ml-5 font-bold'></span>
    </div>


</body>

</html>
