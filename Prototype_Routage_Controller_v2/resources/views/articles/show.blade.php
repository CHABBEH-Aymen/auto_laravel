<x-layout>
    <x-slot:title>
        un article
    </x-slot:title>
        <div class="p-5">
            @php
            $colors = ['bg-primary','bg-secondary','bg-success','bg-danger','bg-warning' , 'bg-info' ,'bg-dark'];
            @endphp
                <a href="#" class="card text-white {{$colors[rand(0,6)]}} m-auto" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->content}}</p>
                    </div>
                </a>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary mx-2 text-white" href="{{Route('article.edit',$article)}}">Modifier</a>
                    <form action="{{Route('article.destroy',$article)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mx-2 text-white">Supprimer</button>
                    </form>
                </div>
        </div>
    </x-layout>
