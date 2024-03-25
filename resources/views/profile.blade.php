<x-layout>
    <x-slot:heading>
        Profile
    </x-slot:heading>
    <h1><strong>List of user profiles</strong></h1>
    <br>
    @foreach ($profiles as $profile)
        <a href="/"><strong>{{ $profile['name'] }}</strong></a>
        <p>ID : {{ $profile['id'] }}</p>
        <p>Name : {{ $profile['name'] }}</p>
        <p>Job : {{ $profile['currentJob'] }}</p>
        <br>
    @endforeach
</x-layout>