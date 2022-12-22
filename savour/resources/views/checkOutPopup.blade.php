<?php

use App\Providers\RouteServiceProvider;
?>
@extends('template')

@section('content')
<!-- component -->
<div class="relative flex justify-center items-center">

    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 focus:outline-none absolute z-0 top-48 py-2 px-7 bg-gray-800 text-white rounded text-base hover:bg-black">Open</button>

    <div id="menu" class="w-full h-full bg-gray-900 bg-opacity-80 top-0 fixed sticky-0">
        <div class="2xl:container  2xl:mx-auto py-48 px-4 md:px-28 flex justify-center items-center">
            <div class="w-96 md:w-auto relative flex flex-col justify-center items-center bg-[#161616] py-16 px-4 md:px-24 xl:py-24 xl:px-36">
                <div role="banner">
                    <p class="box-decoration-clone bg-gradient-to-r from-green-600 to-yellow-500 text-white px-2 text-[20px]">
                        You saved <span class="_cartIconNb">2</span> dishes
                    </p>

                </div>
                <div class="mt-4">
                    <h1 role="main" class="text-3xl text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-center ">
                        Order reference is #34567</h1>
                    <p class="text-3xl text-white  font-semibold leading-7 lg:leading-9 text-center ">
                        Your order will be ready at 13:00</p>
                </div>
                <div class="mt">
                    <p class="mt-6 sm:w-80 text-base text-white leading-7 text-center">We wish you
                        savour the plate</p>
                    <p class=" sm:w-80 text-base text-white leading-7 text-center">Thank you for saving
                        our planet</p>
                </div>
                <form action="{{ route(RouteServiceProvider::HOMEPAGE) }}" method="GET">
                    <button type="submit" class="w-full dark:text-gray-800 dark:hover:bg-gray-100 dark:bg-white sm:w-auto mt-14 text-base leading-4 text-center text-white py-6 px-16 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 bg-gray-800 hover:bg-black">Go
                        back to HomePage</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    //const try = document.querySelector('.try');
    //console.log(try)
    rendertotal(total);

    localStorage.clear();
</script>
@endsection