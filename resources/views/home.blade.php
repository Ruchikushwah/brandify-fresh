@extends('layout')

@section('content')
<div class=" flex-1  flex ">
    <div class="  flex-1 flex  h-[600px] bg-contain bg-fixed bg-left px-[10%] bg-no-repeat relative" style="background-image: url('about-page-3.jpg');">
    </div>
    <div class=" w-6/12 bg-scroll  bg-gradient-to-r from-[#d5dee780] to-[#fff] p-10 gap-6 flex flex-col">

        <div class=" gap-3 flex flex-col ">
            <h1 class=" text-3xl font-semibold">INTRODUCING TO BRANDIFY</h1>
            <p class="leading-loose text-justify text-xl ">Brandify is founded by <span class=" text-xl text-teal-700 font-semibold "> Mr. Akshat Thakur</span>, Global Indian of the Year 2020-21 recognised by AsiaOne Magazine. Brandify is a division of the renowned Shiva Group, originally founded in 1987 by Mr. Shiv Kumar Nenwani, a 1972 Electrical Engineer from MACT Bhopal and double Post graduate gold medalist from Punjab University, an enduring legacy in the making...</p>
        </div>

        <div class=" grid grid-cols-3 gap-2">
            <div class=" px-2 py-2 w-36 rounded-md shadow-md flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 text-white fill-teal-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <p class=" text-black">Innovative</p>

            </div>
            <div class=" px-2 py-2 w-36 rounded-md shadow-md flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 text-white fill-teal-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <p class=" text-black">Targeted</p>

            </div>
            <div class=" px-2 py-2 w-36 rounded-md shadow-md flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 text-white fill-teal-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <p class=" text-black">Transparent</p>

            </div>
            <div class=" px-2 py-2 w-36 rounded-md shadow-md flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 text-white fill-teal-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <p class=" text-black">High Efficacy</p>

            </div>
            <div class=" px-2 py-2 w-36 rounded-md shadow-md flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 text-white fill-teal-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <p class=" text-black">CSR</p>

            </div>


        </div>
        <div class=" mt-6">
            <a href="" class=" px-6 py-3 bg-blue-500 text-white rounded-md  hover:bg-blue-800 hover:text-white">Read More</a>
        </div>
    </div>
</div>

<!--bottle image-->


<div class=" flex justify-center  z-99 relative bg-gradient-to-t from-indigo-400 to-cyan-300">
    <div>
        <img src="Designer_1_-removebg-preview.png" alt="" class="h-[800px]">
    </div>

</div>
<!--why choose water-->


<div class=" justify-center flex flex-col px-10">
    <div class=" flex flex-col items-center p-10" data-aos="fade-down">
        <h1 class=" text-3xl font-bold flex flex-col ">Why Choose Wahter</h1>

        <span class=" text-3xl font-bold text-blue-500">As Your Branding Medium?</span>
    </div>



    <div class="flex justify-content-center align-items-center">
        <!-- business goal left -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-12 w-4/12" style="position:relative; z-index: 99;">
            <ul class="content-box gap-10 flex flex-col">
                <li data-delighter="" class="right delighter content started ended " data-aos="fade-right">
                    <div class="icon flex text-start bg-pink-50 p-5 rounded-lg">

                        <div class="content border-r border-blue-200 text-right gap-2 p-2">
                            <h5 class="main-title font-bold text-xl">Align with Values</h5>
                            <p class="desc text-gray-500">With water bottles, you can ride the crest<br> of a new marketing wave. </p>
                        </div>
                        <img src="1.png" alt="wahter" class="w-20">
                    </div>

                </li>

                <li data-delighter="" class="right delighter content started ended" data-aos="fade-right">
                    <div class="icon flex text-start bg-pink-50 p-5 rounded-lg">
                        <div class="content border-r border-blue-200 text-right gap-2 p-2">
                            <h5 class="main-title  font-bold text-xl">Clutter Free Advertising</h5>
                            <p class="desc text-gray-500 text-sm">Branding on a bottle is a clutter-free form <br> of advertising.</p>
                        </div>
                        <img src="advertising.png" alt="water bottle with branding" class="w-20">
                    </div>
                </li>

                <li data-delighter="" class="right delighter content started ended" data-aos="fade-right">
                    <div class="icon flex text-start bg-pink-50 p-5 rounded-lg">

                        <div class="content border-r border-blue-200 text-right gap-2 p-2">
                            <h5 class="main-title font-bold text-xl">Customisation and Branding Opportunities</h5>
                            <p class="desc text-gray-500 text-sm">Showcase our ability to customize the branding according to the client's vision <br>and needs.</p>
                        </div>
                        <img src="branding.png" class="w-20">
                    </div>
                </li>
            </ul>
        </div>

        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 text-center w-4/12" data-aos="fade-up">
            <div data-delighter="" class="bottom delighter whychooseimg started">
                <img src="bottle-collage.png" style="position:relative; z-index: 99;">
            </div>
        </div>
        <!-- right area business -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-12 w-4/12">
            <ul class="content-box gap-10 flex flex-col">
                <li data-delighter="" class=" left-5" data-aos="fade-left">
                    <div class="flex text-start bg-pink-50 p-5 rounded-lg">
                        <img src="1.png" class="w-20">
                        <div class="content border-l border-blue-200 text-left gap-2 p-2">
                            <h5 class="main-title font-bold text-xl ">Social Media Buzz</h5>
                            <p class="desc text-sm">Engaged individuals will likely share their branded water bottle experiences online.</p>
                        </div>
                    </div>
                </li>

                <li data-delighter="" class="left delighter content" data-aos="fade-left">
                    <div class="icon flex text-start bg-pink-50 p-5 rounded-lg"> <img src="cost-effectiveness.png" class="w-20">
                        <div class="content border-l border-blue-200 text-left gap-2 p-2">
                            <h5 class="main-title font-bold text-xl">Cost-Effectiveness</h5>
                            <p class="desc text-sm">Branded water bottles offer a cost-effective marketing solution with a lower cost.</p>
                        </div>
                    </div>
                </li>

                <li data-delighter="" class="left delighter content" data-aos="fade-left">
                    <div class="icon flex text-start bg-pink-50 p-5 rounded-lg">
                        <img src="insight.png" class="w-20">
                        <div class="content border-l border-blue-200 text-left gap-2 p-2">
                            <h5 class="main-title font-bold text-xl">Data Insights</h5>
                            <p class="desc text-sm">Gather valuable consumer behaviour and interest data by utilising geo-mapping.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- right area business ENd -->
</div>

<div class=" w-full h-[400px] bg-[#075985f1] flex items-center justify-center flex-col gap-5">
    <h2 class="text-white  text-center font-extrabold font-sarif text-4xl" data-aos="fade-down">Calling All Brands To<br>
        Dive Into The <span class="text-indigo-700">Wahter Wave!</span></h2>
  <div data-aos="fade-down">  <p class="text-white text-md  text-center" >Become a 'Brandify Partner' and sponsor one of our exciting events.<br>
        Supply water, make a splash, and connect with your audience in a refreshing way.<br>
        Join us in the movement to redefine branding!</p>
</div>
</div>

<br>
<br>

<!--branding-->
<!--Media Feature-->

<div class=" flex justify-center">
    <div class=" mb-40  items-center gap-5 flex flex-col ">
        <h2 class="text-3xl font-bold flex justify-center gap-2" data-aos="fade-down">Media <span class=" text-blue-600 font-bold">Featured</span></h2>
        <div class="flex flex-col gap-1 text-center" data-aos="fade-down">
            <p class=" text-slate-500 "> Wahter is creating a stir in the media with its innovative branding concept. </p>

            <p class=" text-slate-500"> Explore the coverage from renowned publications and witness the excitement. </p>

            <p class=" text-slate-500"> Don't miss out on being part of the conversation! </p>
        </div>
    </div>

</div>

<div class=" grid grid-cols-4 px-[10%] gap-4 mb-10 ">
    <span class=" border border-slate-800 px-6 py-14"></span>
    <span class=" border border-slate-800 px-6 py-14"></span>
    <span class=" border  border-slate-800 px-6 py-14"></span>
    <span class=" border border-slate-800 px-6 py-14"></span>

</div>

<div class=" w-full h-[500px] bg-blue-200">
    <h1 class=" text-3xl font-bold text-blue-600 flex justify-center p-10">Testimonals</h1>

    <div class=" flex px-[5%] gap-10">
        <div class=" w-2/4 border border-black h-[300px] rounded-lg">
        </div>
        <div class=" w-2/4 border border-black rounded-lg">

        </div>

    </div>

</div>

<!--lets talk-->

<div class=" flex">

    <div class="">
        <img src="lets-talk.png" alt="">



    </div>

</div>

</div>

<div class=" w-full h-[200px] bg-slate-200 grid grid-cols-5 gap-3 px-[3%] items-center">
    <img src="p-1.webp" alt="" class=" bg-white">
    <img src="p-2.webp" alt="" class=" bg-white">
    <img src="p-3.png" alt="">
    <img src="p-4.png" alt="">
    <img src="p-5.webp" alt="" class=" bg-white">

</div>
<div class=" p-5 text-justify">

    <h2 class=" text-3xl  font-semibold">Welcome to <span class=" text-blue-500">Brandify</span>, where innovation and advertising combine in the most <br>
        innovative way possible!</h2>
    <br>
    <p>We're here to provide you with a unique advertising method that highlights your brand on our water bottles. Consider your logo, slogan, or any message on our premium-quality bottles, which will reach a wide audience with each sip.</p>
    <br>
    <p>Why should you pick Wahter for your advertising needs? We don't simply sell bottles; we also provide a platform for your brand to shine. Our bottles are not only useful and fashionable but also environmentally beneficial, and water bottles with branding appeal to today's socially concerned consumers. By linking your brand with sustainability, you may have a good influence while improving your visibility.</p>
    <br>
    <p>Our personalized water bottles with branding are ideal for displaying your marketing message at company events or as promotional giveaways. Increase brand exposure, support sustainability, and keep your audience hydrated all at once. Allow us to satisfy your thirst for unique advertising solutions. Wahter will quench your advertising thirst, providing innovation, hydration, and visibility with each sip.</p>
    <br>
    <p>If your startup is looking to make a splash or an established corporation is looking for a fresh perspective, Wahter has you covered.</p>
</div>

@include('footer')

<div class="  right-0 top-48 fixed">
    <ul class="gap-2 flex flex-col">
        <li class=" bg-white  p-1 shadow-xl rounded-full group object-cover transition-transform duration-300 group-hover:scale-110 ">

            <a href="">
                <img src="user.png" alt="" class="w-7 h-7">
            </a>
        </li>
        <li class="bg-white  shadow-xl rounded-full  p-1 group object-cover transition-transform duration-300 group-hover:scale-110 ">

            <a href="" class="">
                <img src="signup.png" alt="" class="w-7 h-7">
            </a>
            <a href="" class="absolute bg-white overflow-hidden flex items-center justify-center -right-20  group-hover:right-0 opacity-0 group-hover:opacity-100 transition-all duration-300">Live Cart</a>

        </li>
        <li class=" bg-teal-600 rounded-full p-1 self-end group object-cover shadow-xl transition-transform duration-300 group-hover:scale-110 ">

            <a href=" " class=" ">
                <img src="cart.png" alt="" class="w-7 h-7">
            </a>
            <a href="" class="absolute bg-white  overflow-hidden flex items-center justify-center -right-20  group-hover:right-0 opacity-0 group-hover:opacity-100 transition-all duration-300">Live Cart</a>

        </li>
        <li class=" bg-green-600 rounded-full p-1 shadow-xl text-center group object-cover transition-transform duration-300 group-hover:scale-110 ">


            <a href="">
                <img src="whatsapp.png" alt="" class="w-7 h-7">
            </a>
            <a href="" class="absolute bg-white flex-col overflow-hidden flex items-center justify-center -right-10  group-hover:right-0 opacity-0 group-hover:opacity-100 transition-all duration-300">whatsapp chat</a>

        </li>
        <li class="rounded-full bg-orange-700 shadow-xl self-end p-1   text-center group object-cover transition-transform duration-300 group-hover:scale-110 ">

            <a href="">
                <img src="instagram.png" alt="" class="w-7 h-7  ">
            </a>

            <a href="" class="absolute bg-white flex-col overflow-hidden flex items-center justify-center -right-10  group-hover:right-0 opacity-0 group-hover:opacity-100 transition-all duration-300">instagram</a>

        </li>



    </ul>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 200,
        duration: 500
    });
</script>
@endsection