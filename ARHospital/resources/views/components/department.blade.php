
<div class="relative overflow-hidden cursor-pointer department" id="department{{$id}}">
    <img src="{{ asset($img) }}" alt="" class="h-80 w-full rounded-xl relative z-10 transition-transform transform hover:scale-110" />
    <x-primary-button class="absolute left-16 top-20 hidden z-20 btn transition-all ease-in-out duration-300" >Know More</x-primary-button>
    <x-secondary-button  class="text-xs absolute text-center z-30 bottom-4 left-4"> {{ $department }}</x-secondary-button>
   
</div>
