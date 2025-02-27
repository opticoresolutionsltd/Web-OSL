<x-lists.item>
    <x-hyperlinks.anchor href="{{$attributes->get('href')}}" class="block py-2 px-3 text-gray-900 rounded-sm hover:text-[#1B4071] xl:hover:bg-transparent xl:hover:text-[#1B4071] xl:p-0" aria-current="page">
        {{$slot}}
    </x-hyperlinks.anchor>
</x-lists.item>
