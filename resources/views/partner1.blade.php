<x-layouts>
    <a href="/">Home Page</a>
    <a href="/contact">About</a>
    <a href="{{ route ("partner1") }}">partner</a>

    <ul>
        @foreach($partner as $pr)
            <li>
                <x-card href="{{ route('more', $pr->id)}}" :highlight="$pr['skill'] > 65">
                    <div>
                        <h3>{{ $pr->name }}</h3>
                        <p>{{ $pr->dojo->name }}</p>

                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $partner->links() }}
</x-layouts>