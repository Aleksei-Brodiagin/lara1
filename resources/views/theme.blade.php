<x-layout>
    <x-slot:title>
        {{ $title }} - site.com
    </x-slot>

    @foreach($messages as $message)
        <div>
            <h3>{{ $message->title }}</h3>
            <p>{{ $message->message }}</p>
            <p>{{ $message->user->name }}</p>
        </div>
    @endforeach
</x-layout>
