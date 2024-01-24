<div class="lg:mr-10  w-full mb-4 lg:mb-0 relative cursor-pointer blog" >
    <div class="flex group transition-all duration-500 ease-in-out">
        <img src="{{ asset($img)}}" alt="" class="lg:h-80 w-full rounded-xl mb-1 flex  group-hover:hidden" >
        <div class="group-hover:flex hidden">
        <div class="absolute right-0 left-0 w-full h-80 bg-gradient-to-b from-transparent to-black bg-opacity-60 rounded-xl z-10"></div>
        <img alt="" src="{{asset('images/img3.png')}}" class="lg:h-80 w-full ">
        <x-primary-button class="absolute left-16 lg:left-24 top-28  z-20 btn transition-all ease-in-out duration-300" link="blogs/details">Read More</x-primary-button>
        </div>
    </div>
    
    <div class="">
        <div class="flex justify-between items-center text-sm text-gray-950 my-1">
            <span>Date</span><span>Type</span>
        </div>
        <h1 class="text-lg tracking-wide font-medium text-gray-950">Blog Title</h1>
        <p class="text-gray-950">Blog Description</p>

    </div>
</div>