@extends('layout')
@section('content')
@include('aboutHeader')

<div class="">
    <div class="text-3xl font-semibold text-center">
        <h2>Advisoty
            <span class="text-blue-500 ">Board</span>
        </h2>
    </div>
</div>
<div class="w-full grid grid-cols-4 gap-5  p-10">
    <div class="w-68 h-68 rounded-lg shadow-lg overflow-hidden bg-white group relative  ">
        <!-- Image Wrapper -->
        <div class=" block">
            <img src="asmit.jpg" alt="Product" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
        </div>

        <!-- Product Info -->
        <div class="  p-4 absolute bg-white flex-col  flex items-center justify-center -bottom-2  group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
            <h3 class="text-lg font-semibold text-teal-600 text-center "> Gaurav Pahwa
                <br>
                <span class="text-sm text-blue-500">
                    Managing Director Lotus Electronics (CPR Group)<br>
                </span>
            </h3>
            <p class="text-gray-600 text-center text-sm  block">

                An experienced Electronics Retail entrepreneur,leads CPR Distributors as the Managing Director. The company operates Lotus Electronics in 20 showrooms across 8 central Indian cities.
                With a business management degree from the University of Kent, Gaurav has driven CPR's expansion, diversification, and focus on enhancing people's lives.
            </p>
        </div>
    </div>
    <div class="w-68 h-68 rounded-lg shadow-lg overflow-hidden bg-white group relative  ">
        <!-- Image Wrapper -->
        <div class=" block">
            <img src="asmit.jpg" alt="Product" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
        </div>

        <!-- Product Info -->
        <div class="  p-4 absolute bg-white flex-col  flex items-center justify-center -bottom-2  group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
            <h3 class="text-lg font-semibold text-teal-600 text-center ">Ashmit S Alag<br>
                <span class="text-sm text-blue-500">Principal Transform Design</span>
            </h3>
            <p class="text-gray-600 text-center text-sm  block">
                Ashmit S Alag
                Principal Transform Design
                Globally recognized for Neuro-architecture and Visual Merchandising. Principal at Transform Design, crafting timeless environments worldwide.
                Founder of the Academy of Applied Arts, specializing in bespoke Interior design & Visual Merchandising.
            </p>
        </div>
    </div>
    <div class="w-68 h-68 rounded-lg shadow-lg overflow-hidden bg-white group relative  ">
        <!-- Image Wrapper -->
        <div class=" block">
            <img src="asmit.jpg" alt="Product" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
        </div>

        <!-- Product Info -->
        <div class="  p-4 absolute bg-white flex-col  flex items-center justify-center -bottom-2  group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
            <h3 class="text-lg font-semibold text-teal-600 text-center "> Jasmeet S Anand<br>
                <span class="text-sm text-blue-500">Ex Banker, Director Ace Capital UAE</span>
            </h3>
            <p class="text-gray-600 text-center text-sm  block">


                A seasoned banking professional with 25 years of experience, he is now charting a new course in the dynamic world of Dubai real estate.
                With unwavering dedication, he has contributed to the success of renowned banks across various geographies, honing his skills in leadership, strategy, and financial acumen.
            </p>
        </div>
    </div>
</div>





@endsection