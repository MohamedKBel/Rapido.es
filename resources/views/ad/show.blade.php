<x-layout>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <div id="adImages" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        @for ($i = 0 ; $i < $ad->images()->count() ; $i++)
                            <button type="button" data-bs-target="#adImages" data-bs-slide-to="{{$i}}" class="@if($i == 0) active @endif aria-current="true" aria-label="Slide {{$i +1}}"
                            "></button>
                        @endfor
                    </div>
                    <div class="carousel-inner">
                        @foreach ($ad->images as $image)
                        <div class="carousel-item @if ($loop->first) active
                        @endif">
                            <img src="{{Storage::url($image->path)}}" alt="..." class="d-block w-100">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#adImages" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#adImages" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div><b>{{__('Título')}}:</b>{{$ad->title}}</div>
                <div><b>{{__('Precio')}}:</b>{{$ad->price}}</div>
                <div><b>{{__('Descripción')}}:</b>{{$ad->body}}</div>
                <div><b>{{__('Publicado el')}}:</b>{{$ad->created_at->format('d/m/Y')}}</div>
                <div><b>{{__('Por')}}:</b>{{$ad->user->name}}</div>
                <div><a href="{{route('category.ads',$ad->category)}}">#{{$ad->category->name}}</a></div>
                <div><a href="#" class="btn btn-success">{{__('Comprar')}}</a></div>
            </div>
        </div>
    </div>
</x-layout>
