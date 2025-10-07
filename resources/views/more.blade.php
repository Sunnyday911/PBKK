<x-layouts>
    <a href="/">Home Page</a>
    <a href="/contact">About</a>
    <a href="{{ route ('partner1') }}">partner</a>
    <h1>Get to know id {{ $partner->name }}</h1>
    <div class="bg-gray-200 p-4 rounded">
    <p><strong>Skill level:</strong> {{ $partner->skill }}</p>
    <p><strong>About me:</strong></p>
    <p>{{ $partner->bio }}</p>
  </div>

  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Dojo Information</h3>
    <p><strong>Dojo name:</strong> {{ $partner->dojo->name }}</p>
    <p><strong>Location:</strong> {{ $partner->dojo->location }}</p>
    <p><strong>About the Dojo:</strong></p>
    <p>{{ $partner->dojo->description }}</p>
  </div>

  <form action="{{ route('destroy', $partner->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn my-4">Delete Ninja</button>
  </form>
</x-layouts>