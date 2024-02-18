
<div class="relative overflow-hidden cursor-pointer department" id="department{{$id}}">
    <div class="flex group">
        <img src="{{ asset($img) }}" alt="" class="h-80 w-full rounded-xl relative z-10 transition-all duration-300 ease-in-out" />
    <div class="hidden group-hover:flex  transition-all duration-300 ease-in-out absolute right-0 left-0 w-full h-80 bg-gradient-to-b from-transparent to-black bg-opacity-60 rounded-xl z-10"></div>
    </div>
    
    <x-primary-button class="absolute left-16 top-20 hidden z-20 btn transition-all ease-in-out duration-300" link=''>Know More</x-primary-button>
    <x-secondary-button  class="text-xs absolute text-center z-30 bottom-4 left-4"> {{ $department }}</x-secondary-button>
   
</div>
