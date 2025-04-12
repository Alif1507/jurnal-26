@props(['image', 'title', 'nomer'])


<div>
  <img src="{{ asset($image) }}" alt="">
  <div class="flex justify-between mt-5">
    <h1 class="font-bold font-mons text-white text-[40px]">
      {{ $nomer }} <br>
      {{ $title }}
    </h1>
    <div class="bg-[#F09B0E] h-[66px] w-[66px] rounded-full justify-center items-center text-center flex">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-11  text-white fill-white">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
      </svg>
      
    </div>
  </div>
</div>