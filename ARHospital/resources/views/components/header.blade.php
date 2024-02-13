<header class="w-full px-4 py-4 flex  justify-between items-center bg-white shadow-sm relative z-50">
    <img src="{{ asset('images/speciality.png')}}" alt="" class="h-16 bg-gray-300 bg-opacity-10 p-3 rounded-3xl ltr:lg:ml-10 rtl:lg:mr-10">
    <a href="" id="menu" class="lg:hidden"><i class="fa-solid fa-bars cursor-pointer"></i></a>
    <div class="absolute md:top-0 lg:relative lg:top-0 -top-[700px] w-full transform-all duration-700 ease-in-out   lg:flex" id="nav-container">
    <a href="" id="close" class="lg:hidden absolute right-4 top-10"><i class="fa-solid fa-x"></i></a>
        <ul id="nav-links" class="lg:relative lg:p-0 lg:top-0  lg:flex-row absolute w-full left-0  top-20 bg-white  py-10  flex flex-col justify-center items-center">
        
        <li class="my-4 lg:my-0 lg:mr-6"><a href="{{ route('home') }}" class="text-gray-700 my-4 lg:my-0 text-sm transition-all duration-300 ease-in-out hover:text-amber-800">Home</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 my-4 lg:my-0 text-sm transition-all duration-300 ease-in-out hover:text-amber-800">About</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-sm transition-all duration-300 ease-in-out hover:text-amber-800">Department</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-sm transition-all duration-300 ease-in-out hover:text-amber-800">Facilities</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-sm transition-all duration-300 ease-in-out hover:text-amber-800">Doctors</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-sm transition-all duration-300 ease-in-out hover:text-amber-800">Media</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-sm transition-all duration-300 ease-in-out hover:text-amber-800">Careers</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="{{ route('contacts') }}" class="text-gray-700 text-sm transition-all duration-300 ease-in-out hover:text-amber-800">Contact</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-white hover:bg-customBlack bg-amber-800 py-4 px-10 rounded-xl transition-all duration-300 ease-in-out">Schedule An Appoinment</a></li>
        </ul>
    </div>
</header>