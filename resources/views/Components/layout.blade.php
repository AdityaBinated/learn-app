<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Learn</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{-- Used to print element in <x-layout> --}}
        {{--1.<?php echo $slot ?>
            2. {{$slot}} --}}

        {{-- {{$slot}} --}}
        {{-- <nav>
            x-nav-link is view of link.blade file used for customized nav-bar
            <x-nav-link href="/">Home</x-nav-link>
            <x-nav-link href="/about">About</x-nav-link>
            <x-nav-link href="/contact">Contact</x-nav-link>
        </nav>
        --}}
        <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
        <div class="min-h-full">
            <nav class="bg-red-900">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">

                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <!-- Current: "bg-red-800 text-white", Default: "text-red-300 hover:bg-red-700 hover:text-white" -->
                                    <!-- Helper function request() is used for condition for navbar is() is used for href -->
                                    <x-nav-link href="/" :active="request()->is('/') ">Home</x-nav-link>
                                    <x-nav-link href="/about" :active="request()->is('about') ">About</x-nav-link>
                                    <x-nav-link href="/contact" :active="request()->is('contact') ">Contact</x-nav-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </nav>
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                  <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$headings}}</h1>
                </div>
              </header>
           
            
        </div>
{{ $slot}}
</body>

</html>