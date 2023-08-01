<x-layout>

    <h2 class="text-center my-5">Inserisci un articolo</h2>
    
    <form action="{{route('articles-submit')}}" method="post" enctype="multipart/form-data">
        
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label"><b>Titolo</b></label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"><b>Descrizione</b></label>
            <input type="text" class="form-control" name="description" id="description">
            <input type="file" name="foto" class="mt-3">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
        
    </form>

</x-layout> 