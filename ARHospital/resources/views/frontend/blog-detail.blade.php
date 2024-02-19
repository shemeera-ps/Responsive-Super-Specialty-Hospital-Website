@extends('frontend.app')
@section('container')
<x-header />

<section class="w-full my-12 lg:px-20 px-4">
    <div class="flex lg:justify-between items-center justify-center lg:flex-row flex-col">
        <div class="flex flex-col justify-start items-start ltr:lg:mr-40 rtl:lg:ml-40">
            <h1 class="lg:text-5xl text-2xl tracking-wide">Blog Title</h1>
            <p class="tracking-wide text-left mb-16 mt-4">All the Lorem Ipsum generators on the Internet tend to repeat</p>
        </div>
        <div class="w-full">
            <img src="{{ asset('images/blog2.jpg')}}" alt="" class="h-80 w-full rounded-xl">
        </div>
    </div>
    <div class="flex flex-col justify-start items-start my-24 ltr:lg:pl-20 rtl:lg:pr-20">
        <x-heading class="text-left capitalize">Excepteur sint occaecat cupidatat </x-heading>
        <p class="tracking-wide leading-8 mt-4">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
            est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
            modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
            quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
            Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
            molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
        </p>
    </div>
    <div class="flex flex-col justify-start items-start my-16 ltr:lg:pl-20 rtl:lg:pr-20">
        <x-heading class="text-left capitalize"> sed do eiusmod tempor incididunt </x-heading>
        <p class="tracking-wide leading-8 mt-4">
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
            provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
            fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
            nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,
            omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis
            debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
            recusandae. Itaque earum rerum hic tenetur a sapiente delectus,ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat
        </p>
    </div>
</section>
<section class="w-full">
    <x-heading class="text-left">Similar Articles</x-heading>
    <section class="w-full  lg:px-20 px-10 py-10 border-b-2 border-orange-700 border-opacity-20">
   
    <div class="w-full  grid lg:grid-cols-3 lg:gap-16 gap-y-10">
        <x-blog img="images/blog2.jpg" />
        <x-blog img="images/blog3.jpg" />
        <x-blog img="images/blog1.jpg" />
    </div>
</section>
</section>
<x-footer />
@endsection