@extends('frontend.app')
@section('container')
<x-header />


<section class="w-full flex lg:flex-row md:flex-row flex-col justify-between items-center lg:justify-center my-20 lg:px-20">
    <div class="flex flex-col lg:pr-10 justify-center items-start lg:ml-0 ml-10 lg:mb-0 mb-2 rtl:lg:ml-10">
        <x-secondary-button class="text-xs w-40">Harness Your Well-Being</x-secondary-button>

        <h1 class="lg:text-6xl flex flex-col justify-start items-start font-medium tracking-wide my-8 text-3xl">
            <span class="mb-2">We provide</span>
            <span class="text-customOrange">Integrated World <br>Class Patient Service</span>
        </h1>
        <p class="">
            All the Lorem Ipsum generators on the Internet tend to repeat<br> predefined chunks as
            necessary,making this the first true generator.
        </p>
        <x-primary-button link=''>Know More </x-primary-button>
    </div>
    <div class="">
        <img src="{{ asset('images/image9.png')}}" alt="" class="h-[30rem] lg:w-[30rem] w-96 rounded-3xl lg:m-0 mx-4 mt-2">
    </div>
</section>

<section class="w-full border-b-2 border-orange-200">
    <x-heading>Comprehensive Healthcare Departments</x-heading>

    <div class="grid lg:grid-cols-4 md:grid-cols-3 gap-8 my-10 lg:mx-20 mx-10">
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

<section class="w-full flex lg:flex-row flex-col md:flex-row my-20 lg:justify-center items-center">
    <div class="lg:w-1/3 md:w-1/2 flex flex-col justify-center items-start ml-4 lg:ml-0 rtl:lg:ml-10 rtl:mr-10">
        <x-secondary-button class="text-xs w-24">About</x-secondary-button>
        <x-heading class="lg:text-6xl my-2 text-start"> Welcome to AR Super Specialty Hospital</x-heading>

        <p class="my-2 tracking-wide text-justify">
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
            hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
            chunks as necessary, making this the first true generator on the Internet.
            It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures
        </p>
        <x-primary-button  class=" transition-all ease-in-out duration-300">More About Us</x-primary-button>
    </div>
    <div class="md:w-1/2">
        <img src="{{ asset('images/doctor1.jpg')}}" alt="" class="h-[30rem] lg:w-[30rem] w-96 rounded-3xl lg:m-0 mx-4 mt-2 ltr:lg:ml-10">
    </div>

</section>
<section class="w-full bg-gray-950  py-20">
    <div class="px-10 lg:px-20 flex justify-center items-center w-full  py-10 lg:flex-row  flex-col">
        <div class="lg:w-1/2   flex flex-col  lg:mr-8 h-[670px]  mb-8 lg:mb-0 rtl:lg:ml-10 w-full">

            <div class="bg-secondaryBg lg:py-8 h-1/2 py-4 ">
                <h1 class="lg:text-5xl text-gray-950 tracking-wide py-10 text-center">Our Values</h1>
                <p class="my-2 tracking-wide px-4 text-sm">
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                    hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                    chunks as necessary, making this the first true generator on the Internet.
                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures
                </p>
            </div>
        <img src="{{ asset('images/dep2.jpg') }}" alt="" class="h-1/2 w-full ">
        </div>
        <div class="lg:w-1/2  flex-col  ">
            <div class="flex w-full    flex-col lg:flex-row mb-8 ">
                <div class="bg-secondaryBg py-2 lg:w-1/2 w-full">
                    <h1 class="lg:text-5xl text-gray-950 tracking-wide py-10 text-center">Our Mission</h1>
                    <p class="my-2 tracking-wide px-4 text-sm">
                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                        chunks

                    </p>
                </div>
                <img src="{{ asset('images/dep8.jpg') }}" alt="" class="lg:w-1/2 w-full">
            </div>
            <div class="flex w-full     flex-col lg:flex-row ">
                <div class="bg-secondaryBg py-2  lg:w-1/2 w-full ">
                    <h1 class="lg:text-5xl text-gray-950 tracking-wide py-10 text-center">Our Vision</h1>
                    <p class="my-2 tracking-wide px-4 text-sm">
                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                        chunks as necessary, making this the first true generator on the Internet.
                        
                    </p>
                </div>
                <img src="{{ asset('images/image9.png') }}" alt="" class="lg:w-1/2 w-full">
            </div>
        </div>
    </div>

    <div class="w-full flex lg:flex-row-reverse md:flex-row-reverse flex-col-reverse my-20 lg:justify-center items-center">
        <div class="lg:w-1/3 flex flex-col justify-center items-start  mt-4 lg:mt-0 ltr:md:ml-0 ml-10 rtl:mr-10 md:w-1/2">
            <x-secondary-button class="text-xs w-24">About</x-secondary-button>
            <x-heading class="lg:text-4xl my-2 text-white text-start">Our Commitment to Your Well Being</x-heading>

            <p class="my-2 tracking-wide text-white">
                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                chunks as necessary, making this the first true generator on the Internet.
                It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures
            </p>
            <x-primary-button class=" border-2 border-white" link=''>Know More</x-primary-button>
        </div>
        <div class="md:w-1/2">
            <img src="{{ asset('images/img5.png')}}" alt="" class="h-[30rem] lg:w-[30rem] w-96 lg:m-0 mx-4 md:ltr:mr-0 mt-2">
        </div>

    </div>
</section>

<section class="w-full my-10 lg:px-20 px-10 py-10 border-b-2 border-orange-700 border-opacity-20">
    <x-secondary-button class="text-xs w-24">Blog</x-secondary-button>
    <x-heading class="lg:text-5xl lg:text-left rtl:lg:text-right w-full mb-10">Insights From Our Experts</x-heading>
    <x-primary-button class="px-10 mt-2" link="{{ route('blogs') }}">View All</x-primary-button>
    <div class="w-full my-10 grid lg:grid-cols-3 md:grid-cols-3 md:gap-x-8 lg:gap-16 gap-y-10">
        <x-blog img="images/blog2.jpg"/>
        <x-blog img="images/blog3.jpg" />
        <x-blog img="images/blog1.jpg"  />
    </div>
</section>




<section class="w-full my-20 lg:px-20 px-8 ">
    <div class="flex justify-center items-center flex-col bg-[#A2735F] py-20 lg:px-40 px-4 rounded-xl">
        <x-heading class="lg:text-6xl text-white"> Ready to experience healthcare that's all about you?</x-heading>

        <p class="text-white tracking-wide my-8 ">
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
            hidden in the middle of text.
        </p>
        <a href="" class="text-gray-950 hover:text-white hover:bg-gray-950 bg-gray-100 py-4 px-10 rounded-xl transition-all duration-300 ease-in-out">Schedule An Appoinment</a>
    </div>
</section>
<x-footer />
@endsection