<x-layouts>
    <a href="/">Home Page</a>
    <a href="/contact">About</a>
    <a href="/partner">About</a>

    <ul>
        @foreach($partner as $pr)
            <li>
                <x-card href="/partner/{{ $pr['id'] }}" :highlight="true">
                    <h3>{{ $pr['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layouts>