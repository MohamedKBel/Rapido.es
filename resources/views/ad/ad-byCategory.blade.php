<x-layout>
    <x-slot name='title'>Rapido -{{$category->name}}ads</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Anuncios por categoría: {{$category->name}}</h1>
            </div>
        </div>
        <div class="row">
            @forelse ($ads as $ad)
                <div class="col-12 col-md-4">
                    <div class="card mb-5">
                        <img src="http://via.placeholder.com/150"class='card_img-top' alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$ad->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}}</h6>
                            <p class="card-text"></p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>
    </div>
</x-layout>