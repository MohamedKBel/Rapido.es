<x-layout>
    <x-slot name='title'>Rapido- Revisor Home</x-slot>
@if ($ad)
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    {{__('Anuncio')}} #{{$ad->id}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>{{__('Imágenes')}}</b>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                @forelse ($ad->images as $image)
                                <div class="col-md-4">
                                    <img src="{{Storage::url($image->path)}}" alt="..." class="img-fluid">
                                </div>
                                @empty
                                    <div class="col-12">
                                        <b>{{__('No hay imáges')}}</b>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>{{__('Usuario')}}</b>
                        </div>
                        <div class="col-md-9">
                            #{{$ad->user->id}} - {{$ad->user->name}}->{{$ad->user->email}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>{{__('Título')}}</b>
                        </div>
                        <div class="col-md-9">
                            {{$ad->title}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>{{__('Precio')}}</b>
                        </div>
                        <div class="col-md-9">
                            {{$ad->price}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>{{__('Descripción')}}</b>
                        </div>
                        <div class="col-md-9">
                            {{$ad->body}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>{{__('Categoría')}}</b>
                        </div>
                        <div class="col-md-9">
                            {{$ad->category->name}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>{{__('Fecha de creación')}}</b>
                        </div>
                        <div class="col-md-9">
                            {{$ad->created_at}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-6">
                    <form action="{{route('revisor.ad.reject',$ad)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger">Rechazar</button>
                    </form>
                </div>
                <div class="col-6 text-end">
                    <form action="{{route('revisor.ad.accept',$ad)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success">Aceptar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@else
    <h3 class="text-center">{{__('No hay anuncios para revisar, vuelve más tarde, gracias')}}</h3>
@endif
</x-layout>