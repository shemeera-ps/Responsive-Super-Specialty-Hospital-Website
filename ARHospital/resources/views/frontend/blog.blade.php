@extends('frontend.app')
@section('container')
<x-header/>

<section class="w-full mt-10 lg:px-20 px-10 py-10 mb-20">

    <x-heading class="lg:text-5xl text-2xl text-center w-full mb-8">Insights From Our Experts</x-heading>
    <p class="tracking-wide text-center mb-16">All the Lorem Ipsum generators on the Internet tend to repeat</p>
    <div class="w-full my-10 grid lg:grid-cols-3 lg:gap-16 gap-y-10">
        <x-blog img="images/blog2.jpg" />
        <x-blog img="images/blog3.jpg"/>
        <x-blog img="images/blog1.jpg" />

        <x-blog img="images/img1.png" />
        <x-blog img="images/img4.png"/>
        <x-blog img="images/img5.png"/>
    </div>
</section>

<x-footer/>
@endsection