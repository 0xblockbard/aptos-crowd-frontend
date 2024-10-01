@extends('default')

@section('content')

    <div class="bg-white overflow-hidden w-full">
        <div class="relative max-w-7xl mx-auto py-8 sm:py-16 px-4 sm:px-6 lg:px-8">
            {{-- <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div> --}}
            <div class="mx-auto text-base max-w-prose mt-20">
                <div class="flex flex-col items-center w-full">
                    <h2 class="text-base text-gray-700 font-semibold tracking-wide uppercase">Welcome</h2>
                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-teal-600 sm:text-4xl">Get Started with AptosCrowd</h3>
                </div>

                <p class="mt-6">Explore Campaigns - look for a campaign you're interested in</p>
                <p class="mt-2">Start Campaign - start something you're interested in</p>
                <p class="mt-2">Guide - read more abotu AptosCrowd and its mechanics</p>
            </div>
            
        </div>
    </div>


@endsection


@section('scripts')

{{-- 
    <script src="https://aptos-blockbard.s3.ap-southeast-2.amazonaws.com/assets/js/scrollToFixed.js"></script>

    <script>
        $(document).ready(function() {
            $('#about_image').scrollToFixed();
        });
    </script> --}}

@endsection