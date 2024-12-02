<x-layout>

    <x-slot:title>
        Ajouter un article
    </x-slot:title>

    <div class="w-25 my-5 mx-auto">
        <form action="{{Route('article.store')}}" method="POST">
        @csrf
            <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titre">
            </div>
            <div class="form-group">
            <label for="content">Contenu</label>
            <textarea type="content" name="content" class="form-control" id="content" placeholder="contenu"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</x-layout>
