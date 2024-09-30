@extends('layout')
@section('content')
@include('aboutHeader')

<div class="w-full p-10 flex gap-10">

    <div class="w-4/12">
        <div class="border border-sky-500 w-full h-[400px] rounded-lg bg-[#c1ebea]">




        </div>
    </div>
    <div class="w-8/12">
        <div class=" flex flex-col gap-5">
            <h2 class="text-3xl font-mediam text-[#66c5c3]">Manufacturer Callout</h2>
            <img src="partnerwith-1.webp" alt="" class="roundede-lg ">
            <p class="text-lg">We're looking for partners to transform packaging and champion clean water accessibility. Join the<br> #WahterRevolution2.0 to align your products with a purpose.</p>
            <p class="text-lg">Ready to shape the future with us?</p>
            <a href="" class="font-semibold text-xl  "> Let's collaborate!</a>
        </div>

    </div>
</div>

<div class="w-full h-[800px] bg-no-repeat bg-center bg-cover " style="background-image: url('Rights-and-Duties-of-Partners-in-a-Partnership-Firm.jpg')">
    <img src="partner-form-shape.png" alt="" class="w-full h-full">
    <div class="relative -mt-[40%] px-[10%] flex w-full h-[600px] gap-10">
        <div class="gap-4 flex flex-col">
            <h2 class="font-semibold text-xl"><span class=" text-sky-900 font-semibold text-xl">Let's Connect,</span> Let's Transform</h2>
            <div>
                <h1 class="text-6xl font-black text-white">Partner for Exclusive</h1>
                <h2 class="text-[80px] text-sky-900">Opportunities!</h2>
            </div>
            <p class="text-lg font-semibold text-white">Join hands with us for a journey into the future<br>
                of impactful advertising.</p>


        </div>
        <div class="p-10 bg-[#ffffff3c] relative -mt-20 h-[600px] rounded-lg">
            <form action="partner.php" method="post" autocomplete="off" class="space-y-4 ">
                <input
                    type="text"
                    name="name"
                    placeholder="Full Name"
                    required
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">

                <input
                    type="email"
                    name="email"
                    placeholder="Your Email"
                    required
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">

                <input
                    type="number"
                    name="number"
                    placeholder="Number"
                    required
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">

                <select
                    name="partneras"
                    required
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="0" selected>--Partner as--</option>
                    <option value="Partner as Brand">Partner as Brand</option>
                    <option value="Partner as Manufacturer">Partner as Manufacturer</option>
                    <option value="Partner as Distibutor">Partner as Distributor</option>
                    <option value="Partner as Event Organizers">Partner as Event Organizers</option>
                </select>

                <textarea
                    name="message"
                    placeholder="Type Your Message"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>

                <div class="flex items-center space-x-4">
                    <input
                        type="text"
                        name="CaptchaCode"
                        placeholder="Enter Captcha"
                        maxlength="8"
                        minlength="8"
                        onkeypress="return /[0-9A-Z]/i.test(event.key)"
                        class="w-1/2 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 uppercase"
                        required>

                    <div class="flex items-center space-x-2">
                        <img class="captcha_img" src="../captcha/captcha.php">
                        <i onclick="refreshcaptcha();" class="cursor-pointer text-xl">↻</i>
                    </div>
                </div>

                <button
                    type="submit"
                    name="submit"
                    value="ContactSubmit"
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">
                    Submit
                </button>
            </form>

        </div>
    </div>
    @include('footer')
    
    @endsection