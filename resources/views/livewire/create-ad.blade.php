<div> 
    <form wire:submit.prevent="store"> 
        @csrf 
        
        <div class="mb-3"> 
            <label for="title" class="form-label">Titulo:</label> 
            <input wire:model="title" type="text" class="form-control"> 
        </div> 
        
        <div class="mb-3"> 
            <label for="price" class="form-label">Precio:</label> 
            <input wire:model="price" type="number" class="form-control"> 
        </div>

        <div class="mb-3"> 
            <label for="category" class="form-label">Categoria:</label> 
            <select wire:model.defer="category" class="form-control"> 
            <option value="">Selecciona una categoria</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            </select>
        </div>  
        
        <div class="mb-3"> 
            <label for="body" class="form-label">Descripción: </label> 
            <textarea wire:model="body" cols="30" rows="15" class="form-control"></textarea>
        </div>

        

        <div class="my-3"> 
            <button type="submit" class="btn btn-info">Crear</button> 
        </div> 

    </form> 
</div>



