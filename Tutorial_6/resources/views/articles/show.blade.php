<x-layout >
    <x:slot:title>
       Article
    </x:slot:title>
    <a href="{{Route('articles.index')}}" style="color:black;text-decoration:none;font-size:25px">&larr;</a>
    <div style="margin-top:40px;">
            <div style="padding:10px;margin:20px;border:1px solid gray">
                <p href="" style="color:black;text-decoration:none">
                    <small style="color:red">title : </small><br>
                    {{$article['title']}}
                </p>
                <p>
                    <small style="color:red">content : </small><br>
                {{$article['content']}}
                </p>
            </div>
    </div>
</x-layout>
