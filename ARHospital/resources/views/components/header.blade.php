<header class="w-full px-4 py-4 flex justify-around items-center bg-white shadow-sm relative z-50">
    <img src="{{ asset('images/speciality.png')}}" alt="" class="h-16 bg-gray-300 bg-opacity-10 p-3 rounded-3xl">
    <a href="" id="menu" class="lg:hidden"><i class="fa-solid fa-bars cursor-pointer"></i></a>
    <div class="hidden  lg:flex" id="nav-container">
        <a href="" id="close" class="lg:hidden"><i class="fa-solid fa-x"></i></a>
        <ul id="nav-links" class="lg:relative lg:p-0  lg:top-0 lg:flex-row absolute w-full left-0 bg-white  py-10 top-20 flex flex-col justify-center items-center">
        <li class="my-4 lg:my-0 lg:mr-6"><a href="{{ route('home') }}" class="text-gray-700 my-4 lg:my-0 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Home</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 my-4 lg:my-0 text-base transition-all duration-300 ease-in-out hover:text-amber-800">About</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Department</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Facilities</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Doctors</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Media</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Careers</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="{{ route('contacts') }}" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Contact</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-white hover:bg-gray-950 bg-amber-800 py-4 px-10 rounded-xl transition-all duration-300 ease-in-out">Schedule An Appoinment</a></li>
        </ul>
    </div>
</header>