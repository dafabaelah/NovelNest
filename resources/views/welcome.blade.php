<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>NovelNest</title>
</head>
<body>

<section class="h-screen bg-cover bg-no-repeat bg-center bg-gray-800 bg-blend-multiply" style="background-image: url('images/bg.jpeg');">
  <div>
  <nav class="bg-amber-">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between ">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="w-10 h-10 rounded-full"src="images/logo.png?color=indigo&shade=700" alt="">
        </div> 
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="text-gray-300 hover:bg-gray-700 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Best Seller</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Rekomendasi</a>
          </div>
        </div>
      </div>
      

        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
    </div>
  </div>
</nav>

    <div class="mx-10 mt-40 max-w-lg  text-white ">
    <h1 class="font-semibold text-4xl">Selamat Datang di Website NovelNest</h1>
    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, et nihil! Eligendi minus nulla accusamus, 
      ducimus mollitia asperiores libero ea cum ullam nihil eius incidunt dolorum non laborum quia voluptatum.</P>
    </div>

    <div class="mx-10 mt-5">
      <a href="#" class="bg-blue-400 rounded-3xl py-3 px-8 font-medium text-white">Mulai Membaca</a>
    </div>

    <div>
      <img src="images/novel.png" class="w-full xl:w-1/3 xl:absolute right-20 bottom-0">
    </div>

  </div>
  </section>

  <!-- About Section Start -->
      <section id="about" class="h-screen bg-cover bg-no-repeat bg-center bg-gray-800 bg-blend-multiply" style="background-image: url('images/bg.jpeg');">
        <div class="container">
          <div class="flex items-center justify-center h-full">
            <div class="w-full px-40 mb-auto py-20">
              <h4 class="font-bold uppercase text-white text-lg mb-3">Tentang NovelNest</h4>
              <h2 class="font-blod text-white text-3xl mb-3 max-w-md lg:text-4xl">Membaca novel di NovelNest</h2>
              <p class="font-medium text-base text-white max-w-xl lg:text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, ipsam cumque. 
                Hic quo quibusdam fugiat illum adipisci unde enim, totam non nemo fugit in qui, 
                error deserunt? Harum, suscipit qui!</p>
            </div>

            <div>
              <img src="images/novel.png" class="w-full xl:w-1/3 xl:absolute right-20 bottom-0">
            </div>
          </div>
        </div>
      </section>

  <!-- About Section End -->

  

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>