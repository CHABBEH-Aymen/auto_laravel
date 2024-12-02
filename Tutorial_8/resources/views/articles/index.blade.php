<x-layout >
    <x:slot:title>
        Les articles
    </x:slot:title>
    @include('partials.flash-message')
    <h1>Liste des Articles</h1>
    <div style="margin-top:40px;">
        @foreach ($articles as $index => $article)
            <div style="padding:10px;margin:20px;border:1px solid gray;border-radius: 10px;">
                <a href="/articles/{{$article->id}}" style="color:black;text-decoration:none">
                    {{$index+1}} | {{$article->title}}
                </a>
            </div>
        @endforeach
    </div>
</x-layout>
