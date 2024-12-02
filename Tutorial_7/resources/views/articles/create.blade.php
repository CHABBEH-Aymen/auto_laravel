<x-layout >
    <link rel="stylesheet" href="/css/articlecreate.css">
    <x:slot:title>
        Ajouter Articles
    </x:slot:title>
    <h1>Ajouter un article</h1>
    <div style="margin-top:40px;">
        <form action="{{Route('articles.store')}}" method="POST">
            @csrf
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" placeholder="Entrez le titre" required>

            <label for="content">Description :</label>
            <textarea id="content" name="content" rows="5" placeholder="Entrez la description" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</x-layout>
