@extends('default')

@section('content')

    <div class="flex flex-col w-full px-10 mt-24">

        <div class="section_one flex flex-col sm:flex-row w-full">

            <div class="flex flex-col items-start justify-center w-full sm:w-1/2 sm:pr-16 sm:pl-20 pb-10 pt-10 sm:pt-16">

                <h1 class="text-5xl text-indigo-600 font-extrabold">AptosCrowd</h1>
                <span class="w-20 border-2 border-indigo-600 mt-2"></span>
               
                <h3 class="text-md mt-2 font-semibold italic">Where Aptos creators, developers, and indie makers hangout</h3>

                <p class="text-base mt-8">Kickstart innovative projects, support enterprising creators, and support the Aptos community as an early adopter</p>

                <div class="flex flex-row mt-10 space-x-4">
                    <a href="{{ route('show_all_campaigns') }}">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Browse Campaigns
                        </button>
                    </a>

                    <a href="{{ route('create_campaign') }}">
                        <button type="button" class="home_start_campaign_button invisible inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Start a Campaign
                        </button>
                    </a>
                </div>

                <span class="w-10 border border-indigo-600 mt-24"></span>
                <p class="text-sm mt-2 italic">A decentralised <a href="https://github.com/0xblockbard/aptos-crowd" target="_blank" class="underline hover:text-indigo-600">opensource</a> crowdfunding platform for the Aptos community</p>

            </div>

            <div class="flex flex-col relative items-center justify-center w-full sm:w-1/2 sm:px-6 py-6 pb-10 sm:pb-0">

                <img class="max-w-full w-[85%] sm:absolute sm:-top-14" src="https://res.cloudinary.com/blockbard/image/upload/v1728201752/home-1.png" alt="crowdfunding rocket aptos" />

            </div>

        </div>

        @include('pages.partials.crowdfunding_models')

        @include('pages.partials.testimonials')

    </div>

@endsection
