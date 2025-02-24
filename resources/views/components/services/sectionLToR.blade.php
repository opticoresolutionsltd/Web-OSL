<div class="flex flex-col sm:flex-row justify-center items-center my-8">
    <x-images.image src="{{$imageSrc}}" alt="Service 1" class="hidden sm:block sm:w-2/6 md:w-1/3 object-cover mb-4 md:mb-0 animate-fade-in-from-left"/>
    <div class="md:ml-4 p-4 animate-fade-in-from-right">
        <h2 class="text-2xl font-bold mb-2">{{$heading}}</h2>
        <p class="text-lg text-justify">{{$description}}</p>
    </div>
</div>
