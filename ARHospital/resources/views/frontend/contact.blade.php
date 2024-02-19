@extends('frontend.app')
@section('container')
<x-header/>

<section class="w-full py-10 lg:px-40 px-10 mb-10">
    <x-heading class="lg:text-6xl text-3xl  text-center lg:py-10 py-4">Schedule an Appoinment</x-heading>
    <p class="tracking-wide text-center ">All the Lorem Ipsum generators on the Internet tend to repeat</p>
    <form action="" method="post" class="flex flex-col justify-start items-start w-full">
        <div class="py-8 flex-col justify-start items-start w-full">
            <label for="" class="">Name</label>
            <input type="text" name="" id="" class="p-4 w-full bg-gray-100 py-4 mt-2 rounded-lg">
        </div>
        <div class="py-8 flex-col justify-start items-start w-full">
            <label for="">Email</label>
            <input type="email" name="" id="" class="p-4 w-full bg-gray-100 py-4 mt-2 rounded-lg">
        </div>
        <div class="py-8 flex-col justify-start items-start w-full">
            <label for="">Message</label>
            <textarea name="" id="" cols="20" rows="10" placeholder="Type your Message" class="p-4 w-full bg-gray-100 py-4 mt-2 rounded-lg">

            </textarea>
        </div>
        <a href="" class="mb-8">I accept the <span class="underline text-lg">Terms and Conditions</span> </a>
        <button type="submit">
            <x-primary-button class="px-10" link=''>Submit</x-primary-button>
        </button>
    </form>
</section>
<x-footer/>
@endsection