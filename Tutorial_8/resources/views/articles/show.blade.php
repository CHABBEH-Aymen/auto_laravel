<x-layout >
    <x:slot:title>
       Article
    </x:slot:title>
    <a href="{{Route('articles.index')}}" style="color:black;text-decoration:none;font-size:25px;font-wieght:bold">&larr;</a>
    <div style="margin-top:40px;">
            <div style="padding:10px;margin:20px;border:1px solid gray">
                <p href="" style="color:black;text-decoration:none">
                    <small style="color:red">title : </small><br>
                    {{$article->title}}
                </p>
                <p>
                    <small style="color:red">content : </small><br>
                {{$article->content}}
                </p>
                <div style="display:flex;justify-content: flex-end;">
                    <a  href="{{ route('articles.edit' , $article->id)}}"
                        style="padding:10px;border-radius:5px;background-color:#3d3de5eb;border:none;;color:white;text-decoration:none;margin: 5px;">
                        modifier
                    </a>
                    <form action="{{ route('articles.destroy' , $article)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button
                            style="padding:12px;border-radius:5px;background-color:#d11a2a;border:none;cursor:pointer;color:white;text-decoration:none;margin: 5px;">
                            Supprimer
                        </button>
                    </form>
                </div>
            </div>
    </div>
</x-layout>
