<x-layout>
    <x-slot:title>
        {{ $title }} - site.com
    </x-slot>
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
</x-layout>
