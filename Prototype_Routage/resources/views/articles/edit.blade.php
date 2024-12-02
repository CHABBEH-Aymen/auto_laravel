<x-layout>

    <x-slot:title>
        Ajouter un article
    </x-slot:title>
    <div class="w-25 my-5 mx-auto">
        <form action="{{Route('article.update',$article)}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titre" value="{{$article->title}}">
            </div>
            <div class="form-group">
            <label for="content">Contenu</label>
            <textarea type="text" name="content" class="form-control" id="content" placeholder="contenu">{{$article->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</x-layout>
