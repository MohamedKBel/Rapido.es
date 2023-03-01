
<x-layout> 
<x-slot name='title'>Rapido Vende algo interesante</x-slot> 
    <div class="container"> 
        <div class="row justify-content-center"> 
            <div class="col-md-8"> 
                <div class="card"> 
                    <div class="card-header"> 
                         Nuevo anuncio 
                    </div> 

                    <div class="card-body"> 
                             <livewire: create-ad /> 
                    </div> 

                </div> 
            </div> 
        </div> 
    </div> 

    
    <div>
        <h1>Create new AD </h1>
    </div>
    
    
    <div> 
        <form wire: submit.prevent="store"> 
        @csrf 
        
        <div class="mb-3"> 
             <label for="title" class="form-label">Titulo:</label> 
             <input wire: model="title" type="text" class="form-control"> 
        </div> 
        
        <div class="mb-3"> 
            <label for="price" class="form-label">Precio:</label> 
             <input wire: model="price" type="number" class="form-control"> 
        </div> 
        
        <div class="mb-3"> 
             <label for="body" class="form-label">Descripción: </label> 
             <textarea wire: model="body" cols="30" rows="15" class="form-control"></textarea>
        </div>

        <div class="my-3"> 
             <button type="submit" class="btn btn-info">Crear</button> 
        </div> 

    </form> 
  </div>


  <div class="mb-3">
    <label for="category" class="from-label">Category:</label>
    <select wire:model.defer="category" class="from-control">
        <option value="">Select Category</option>
        @forech($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    <select>   
  </div>

 </x-layout>


