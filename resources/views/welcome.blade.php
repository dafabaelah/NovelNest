@extends('templates.main')
@section('container')
 <!-- About Section Start -->
 <section id="about" class=" h-screen bg-cover bg-no-repeat bg-center bg-gray-800 bg-blend-multiply" style="background-image: url('images/bg.jpeg');">
  <div class="container">
    <div class="mx-10  max-w-lg  text-white ">
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

@endsection