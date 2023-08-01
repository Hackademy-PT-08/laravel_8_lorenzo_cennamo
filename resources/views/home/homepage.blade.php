<x-layout>
    
    <h1 class="text-center my-5">Benvenuto nel miglor <br/> blog di articol tech</h1>

    <div class="container">
        <div class="row">
            @foreach($articles as $article)
                <div class="col-4 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('storage/' . $article->image)}}" alt="{{$article->title}}" class="img-responsive">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</x-layout>