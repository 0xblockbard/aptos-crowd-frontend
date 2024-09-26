<nav class="fixed w-full bg-white shadow z-20 dark:bg-black dark:border-b border-b border-transparent dark:border-gray-500 ">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14">
            <div class="flex sm:w-3/5">
                <div class="flex-shrink-0 flex items-center">

                    <a href="{{ route('home') }}" class="inline-flex items-center py-2 ml-2 relative top-0.5">
                        <span class=" text-lg font-extrabold text-indigo-600 hover:text-indigo-800">AptosCrowd</span>
                    </a>

                </div>

                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ route('about') }}" class="{{ \Request::route()->getName() == 'about' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        About
                    </a>

                    {{-- <a href="{{ route('about') }}" class="{{ \Request::route()->getName() == 'about' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Creators
                    </a> --}}

                    <a href="{{ route('show_all_campaigns') }}" class="{{ \Request::route()->getName() == 'show_all_campaigns' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Campaigns
                    </a>

                    {{-- <a href="{{ route('show_top_supporters') }}" class="{{ \Request::route()->getName() == 'show_top_supporters' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Top Supporters
                    </a> --}}


                </div>

            </div>

        <div class="ml-6 flex items-center">

            {{-- <a href="{{ route('create_campaign') }}" class="mr-4">
                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Start Campaign
                </button>
            </a> --}}

            <div id="start_campaign"> 
            </div>

            <div id="connect-wallet" class="connect_wallet cursor-pointer text-sm font-semibold">
                connect
            </div>

        </div>

</nav>
