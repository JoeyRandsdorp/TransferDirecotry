<x-layout>
    <ul>
        @foreach ($restaurants as $restaurant)
            <li>
                <a href="/restaurants/{{ $restaurant['id'] }}">
                    {{ $restaurant['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
