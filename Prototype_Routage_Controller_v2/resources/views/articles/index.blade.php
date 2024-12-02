<x-layout>
<x-slot:title>
    Les articles
</x-slot:title>
    @include('partials.MassageSucces');
    <div class="p-3 d-flex flex-wrap">
        @php
        $colors = ['bg-primary','bg-secondary','bg-success','bg-danger','bg-warning' , 'bg-info' ,'bg-dark'];
        // 'bg-light'
        @endphp
        @foreach ($articles as $article)
            <a href="{{Route('article.show',$article)}}" class="card text-white {{$colors[rand(0,6)]}} my-2 mx-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                </div>
            </a>
        @endforeach

    </div>
</x-layout>
