<x-layout >
    <link rel="stylesheet" href="/css/articlecreate.css">
    <x:slot:title>
        Modifier Articles
    </x:slot:title>
    <h1>modofier un article</h1>
    <div style="margin-top:40px;">
        <form action="{{ route('articles.update',$article)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" placeholder="Entrez le titre" required value="{{$article->title}}">

            <label for="content">Description :</label>
            <textarea id="content" name="content" rows="5" placeholder="Entrez la description" required>{{$article->content}}</textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</x-layout>
