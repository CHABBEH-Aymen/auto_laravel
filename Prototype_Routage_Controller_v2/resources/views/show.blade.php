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
        </div>
    </x-layout>