@extends('frontend.app')
@section('container')
<header class="w-full px-4 py-4 flex justify-around items-center bg-white shadow-sm relative z-50">
    <img src="{{ asset('images/speciality.png')}}" alt="" class="h-16 bg-gray-300 bg-opacity-10 p-3 rounded-3xl">
    <a href="" id="menu" class="lg:hidden"><i class="fa-solid fa-bars cursor-pointer"></i></a>
    <div class="hidden  lg:flex" id="nav-container">
        <a href="" id="close" class="lg:hidden"><i class="fa-solid fa-x"></i></a>
        <ul id="nav-links" class="lg:relative lg:p-0  lg:top-0 lg:flex-row absolute w-full left-0 bg-white  py-10 top-20 flex flex-col justify-center items-center">
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 my-4 lg:my-0 text-base transition-all duration-300 ease-in-out hover:text-amber-800">About</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Department</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Facilities</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Doctors</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Media</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Careers</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-gray-700 text-base transition-all duration-300 ease-in-out hover:text-amber-800">Contact</a></li>
            <li class="my-4 lg:my-0 lg:mr-6"><a href="" class="text-white hover:bg-gray-950 bg-amber-800 py-4 px-10 rounded-xl transition-all duration-300 ease-in-out">Schedule An Appoinment</a></li>
        </ul>
    </div>
</header>


<section class="w-full flex lg:flex-row flex-col justify-between items-center lg:justify-center my-20 lg:px-20">
    <div class="flex flex-col lg:pr-10 justify-center items-start lg:ml-0 ml-10 lg:mb-0 mb-2 rtl:lg:ml-10">
        <x-secondary-button class="text-xs w-40">Harness Your Well-Being</x-secondary-button>

        <h1 class="lg:text-6xl flex flex-col font-medium tracking-wide my-8 text-3xl">
            <span class="mb-2">We provide</span>
            <span class="text-amber-800">Integrated World <br>Class Patient Service</span>
        </h1>
        <p class="">
            All the Lorem Ipsum generators on the Internet tend to repeat<br> predefined chunks as
            necessary,making this the first true generator.
        </p>
        <x-primary-button>Know More </x-primary-button>
    </div>
    <div class="">
        <img src="{{ asset('images/doctor1.jpg')}}" alt="" class="h-[30rem] lg:w-[30rem] w-96 rounded-3xl lg:m-0 mx-4 mt-2">
    </div>
</section>

<section class="w-full border-b-2 border-orange-200">
    <h1 class="lg:text-4xl text-center font-medium tracking-wide text-2xl">Comprehensive Healthcare Departments</h1>
    <div class="grid lg:grid-cols-4 gap-8 my-10 lg:mx-20 mx-10">
        <x-department img="images/dep1.jpg" department="Orthodontics and Oral Surgery" id="1" />

        <x-department img="images/dep2.jpg" department="Rheumatology" id="2" />

        <x-department img="images/dep3.jpg" department="Obstetrics and Gynecology" id="3" />
        <x-department img="images/dep7.jpg" department="Pediatric Subspecialties" id="4" />
        <x-department img="images/dep5.jpg" department="Gastroenterology" id="5" />
        <x-department img="images/dep6.jpg" department="Neurosurgery Operations" id="6" />
        <x-department img="images/dep4.jpg" department="Physical and Occupational Therapy" id="7" />
        <x-department img="images/dep8.jpg" department="Clinical Laboratory" id="8" />

    </div>
</section>

<section class="w-full flex lg:flex-row flex-col my-20 lg:justify-center items-center">
    <div class="lg:w-1/3 flex flex-col justify-center items-start ml-4 lg:ml-0 rtl:lg:ml-10 rtl:mr-10">
        <x-secondary-button class="text-xs w-24">About</x-secondary-button>
        <h1 class="lg:text-6xl text-2xl my-2">Welcome to AR Super Specialty Hospital </h1>
        <p class="my-2 tracking-wide">
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
            hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
            chunks as necessary, making this the first true generator on the Internet.
            It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures
        </p>
        <x-primary-button class=" transition-all ease-in-out duration-300">More About Us</x-primary-button>
    </div>
    <div class="">
        <img src="{{ asset('images/doctor1.jpg')}}" alt="" class="h-[30rem] lg:w-[30rem] w-96 rounded-3xl lg:m-0 mx-4 mt-2">
    </div>

</section>
<section class="w-full bg-gray-950 py-20">
    <div class="px-10 flex justify-center items-center w-full lg:h-[60rem] py-10 lg:flex-row flex-col">
        <div class="lg:w-1/2  lg:mr-8 h-[55rem] mb-8 lg:mb-0 rtl:lg:ml-10">

            <div class="bg-red-100 lg:py-8 h-1/2 py-4">
                <h1 class="lg:text-6xl text-gray-950 tracking-wide py-10 text-center">Our Values</h1>
                <p class="my-2 tracking-wide px-4">
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                    hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                    chunks as necessary, making this the first true generator on the Internet.
                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures
                </p>
            </div>
            <img src="{{ asset('images/dep2.jpg') }}" alt="" class="h-1/2 w-full">
        </div>
        <div class="lg:w-1/2  flex-col lg:h-[55rem]">
            <div class="flex w-full  lg:h-[26.5rem] flex-col lg:flex-row mb-8 ">
                <div class="bg-red-100 py-2 lg:w-1/2 w-full">
                    <h1 class="lg:text-6xl text-gray-950 tracking-wide py-10 text-center">Our Mission</h1>
                    <p class="my-2 tracking-wide px-4">
                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                        chunks as necessary, making this the first true generator on the Internet.

                    </p>
                </div>
                <img src="{{ asset('images/dep8.jpg') }}" alt="" class="lg:w-1/2 w-full">
            </div>
            <div class="flex w-full  lg:h-[26.5rem] flex-col lg:flex-row">
                <div class="bg-red-100 py-2  lg:w-1/2 w-full ">
                    <h1 class="lg:text-6xl text-gray-950 tracking-wide py-10 text-center">Our Vision</h1>
                    <p class="my-2 tracking-wide px-4">
                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                        chunks as necessary, making this the first true generator on the Internet.
                        It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures
                    </p>
                </div>
                <img src="{{ asset('images/doctor1.jpg') }}" alt="" class="lg:w-1/2 w-full">
            </div>
        </div>
    </div>

    <div class="w-full flex lg:flex-row-reverse flex-col-reverse my-20 lg:justify-center items-center">
        <div class="lg:w-1/3 flex flex-col justify-center items-start  mt-4 lg:mt-0 ml-10 rtl:mr-10">
            <x-secondary-button class="text-xs w-24">About</x-secondary-button>
            <h1 class="lg:text-4xl text-2xl my-2 text-white">Our Commitment to Your Well Being</h1>
            <p class="my-2 tracking-wide text-white">
                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                chunks as necessary, making this the first true generator on the Internet.
                It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures
            </p>
            <x-primary-button class=" border-2 border-white">Know More</x-primary-button>
        </div>
        <div class="">
            <img src="{{ asset('images/doctor1.jpg')}}" alt="" class="h-[30rem] lg:w-[30rem] w-96 rounded-3xl lg:m-0 mx-4 mt-2">
        </div>

    </div>
</section>
<section class="w-full my-10 px-20 py-10 border-b-2 border-orange-700 border-opacity-20">
    <x-secondary-button class="text-xs w-24">Blog</x-secondary-button>
    <h1 class="lg:text-5xl text-center lg:text-left rtl:lg:text-right w-full tracking-wide mb-10 text-2xl">Insights From Our Experts</h1>
    <x-primary-button class="px-10 mt-2 ">View All</x-primary-button>
    <div class="w-full my-10 lg:px-20 flex flex-col lg:flex-row justify-center items-center rtl:lg:flex-row-reverse">
        <div class="lg:mr-10 lg:w-1/3 w-full mb-4 lg:mb-0">
            <img src="{{ asset('images/blog2.jpg')}}" alt="" class="lg:h-80 w-full rounded-xl mb-1 flex hover:hidden">
            <img src="{{ asset('images/doctor1.jpg')}}" alt="" class="lg:h-80 w-full rounded-xl mb-1 hidden hover:flex bg-gradient-to-tl from-gray-950 to to-gray-950">
            <div class="">
                <div class="flex justify-between items-center text-sm text-gray-950">
                    <span>Date</span><span>Type</span>
                </div>
                <h1 class="text-lg tracking-wide font-medium text-gray-950">Blog Title</h1>
                <p class="text-gray-950">Blog Description</p>

            </div>
        </div>
        <div class="lg:mr-10 lg:w-1/3 w-full mb-4 lg:mb-0">
            <img src="{{ asset('images/blog3.jpg')}}" alt="" class="lg:h-80 w-full rounded-xl mb-1">
            <div class="">
                <div class="flex justify-between items-center text-sm text-gray-950">
                    <span>Date</span><span>Type</span>
                </div>
                <h1 class="text-lg tracking-wide font-medium text-gray-950">Blog Title</h1>
                <p class="text-gray-950">Blog Description</p>

            </div>
        </div>
        <div class="lg:mr-10 lg:w-1/3  w-full mb-4 lg:mb-0">
            <img src="{{ asset('images/blog1.jpg')}}" alt="" class="lg:h-80 w-full rounded-xl mb-1">
            <div class="">
                <div class="flex justify-between items-center text-sm text-gray-950">
                    <span>Date</span><span>Type</span>
                </div>
                <h1 class="text-lg tracking-wide font-medium text-gray-950">Blog Title</h1>
                <p class="text-gray-950">Blog Description</p>

            </div>
        </div>
    </div>
</section>
<section class="w-full my-20 lg:px-20 px-8 ">
    <div class="flex justify-center items-center flex-col bg-amber-800 py-20 lg:px-40 px-4 rounded-xl">
        <h1 class="lg:text-6xl text-white tracking-wide text-2xl">
            Ready to experience healthcare that's all about you?
        </h1>
        <p class="text-white tracking-wide my-8 ">
        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
        hidden in the middle of text.
        </p>
        <a href="" class="text-gray-950 hover:text-white hover:bg-gray-950 bg-gray-100 py-4 px-10 rounded-xl transition-all duration-300 ease-in-out">Schedule An Appoinment</a>
    </div>
</section>
<footer class="w-full bg-gray-950 lg:py-20 py-10 lg:px-10 flex flex-col justify-center ltr:pl-10 rtl:pr-10 rtl:lg:pr-0   lg:flex-row lg:justify-start items-start text-white text-sm">
    <ul class="flex justify-start items-left text-white tracking-wide text-sm flex-col w-[21rem] lg:mr-20 mb-4 lg:mb-0">
        <li class="mb-2"><a href=""><img src="{{ asset('images/speciality.png')}}" alt="" class="h-16 bg-white  p-3 rounded-3xl"></a></li>
        <li class="mb-2 s"><a href="" class=""><i class="fa-solid fa-phone mr-1"></i><span>0484 4527 234 (24/7 General Enquiry)</span></a></li>
        <li><a href=""><i class="fa-solid fa-location-dot mr-2"></i>AR Super Specialty Hospital, Craft Camps,Chandrapura ,Kondungallur -680664</a></li>
        <li class="mt-4">
        <i class="fa-brands fa-facebook text-lg"></i>
        <i class="fa-brands fa-instagram text-lg"></i>
        <i class="fa-brands fa-linkedin text-lg"></i>
        <i class="fa-brands fa-whatsapp text-lg"></i>
        </li>
    </ul>
    <ul class="flex justify-start items-left text-white tracking-wide text-sm flex-col lg:mr-20 ">
        <li class="mb-2 text-base">Departments</li>
        <li class="mb-2"><a href="" class="underline">Emergency Medicine</a></li>
        <li class="mb-2"><a href="" class="underline">Critical Care</a></li>
        <li class="mb-2"><a href="" class="underline">Intensive Care Unit </a></li>
        <li class="mb-2"><a href="" class="underline">Pediatrics</a></li>
        <li class="mb-2"><a href="" class="underline">Pathology</a></li>
        <li class="mb-2"><a href="" class="underline">Obstetrics and Gynecology</a></li>
        <li class="mb-2"><a href="" class="underline">Cardiology</a></li>
        <li class="mb-2"><a href="" class="underline">Neurology</a></li>
        <li class="mb-2"><a href="" class="underline">Radiology</a></li>
        <li class="mb-2"><a href="" class="underline">Endocrinology</a></li>
        <li class="mb-2"><a href="" class="underline">ENT</a></li>
        <li class="mb-2"><a href="" class="underline">Urology</a></li>
    </ul>
    <ul class="flex justify-start items-left text-white tracking-wide text-sm flex-col lg:mr-20 mt-4 lg:mt-0">
        <li class="mb-2 text-base">Facilities</li>
        <li class="mb-2"><a class="underline" href="">Emergency Department</a></li>
        <li class="mb-2"><a class="underline" href="">Operating Rooms</a></li>
        <li class="mb-2"><a class="underline" href="">Intensive Care Unit</a></li>
        <li class="mb-2"><a class="underline" href="">Labor and Delivery Suite</a></li>
        <li class="mb-2"><a class="underline" href="">Laboratory Services</a></li>
        <li class="mb-2"><a class="underline" href="">Pharmacy</a></li>
        <li class="mb-2"><a class="underline" href="">Inpatient Wards</a></li>
        <li class="mb-2"><a class="underline" href="">Outpatient Clinics</a></li>
        <li class="mb-2"><a class="underline" href="">Endoscopy Unit</a></li>
        <li class="mb-2"><a class="underline" href="">Blood Bank</a></li>
    </ul>
    <ul class="flex justify-start items-left text-white tracking-wide text-sm flex-col lg:mr-20 mt-4 lg:mt-0">
        <li class="text-base">About</li>
        <li class="mb-2"><a href="" class="underline">Doctors</a></li>
        <li class="mb-2"><a href="" class="underline">Infrastructure</a></li>
        <li class="mb-2"><a href="" class="underline">Board Members</a></li>
        <li class="mb-2"><a href="" class="underline">Careers</a></li>
    </ul>
    <ul class="flex justify-start items-left text-white tracking-wide text-sm flex-col mt-4 lg:mt-0">
        <li class="mb-2 text-base">Doctors</li>
        <li class="mb-2"><a href="" class="underline">E Book</a></li>
        <li class="mb-2"><a href="" class="underline">Blogs</a></li>
        <li class="mb-2"><a href="" class="underline">Media</a></li>
    </ul>
</footer>
@endsection