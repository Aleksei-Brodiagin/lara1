<x-layout>
    <x-slot:title>
        {{ $title }} - site.com
    </x-slot>
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach

    <a href={{ route('forum') }}>Forum</a>
</x-layout>
