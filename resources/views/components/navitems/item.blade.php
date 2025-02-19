<x-lists.item>
    <x-hyperlinks.anchor href="{{$attributes->get('href')}}" class="block py-2 px-3 text-gray-900 rounded-sm hover:text-[#1B4071] xl:hover:bg-transparent xl:hover:text-[#1B4071] xl:p-0 xl:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white xl:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">
        {{$slot}}
    </x-hyperlinks.anchor>
</x-lists.item>
