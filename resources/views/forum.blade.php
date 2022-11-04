<x-layout>
    <x-slot:title>
        {{ $title }} - site.com
    </x-slot>
    @foreach($chapters as $chapter)
        <div>
            <h2>{{ $chapter->title }}</p>
            @foreach($chapter->themes as $theme)
                <a href={{ route('themes', ['theme' => $theme->id]) }}>{{ $theme->title }}</a>
            @endforeach
        </div>
    @endforeach
</x-layout>
