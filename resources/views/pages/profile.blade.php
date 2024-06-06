<x-main>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <form class="p-5 border rounded" action="{{route('pages.update.profile')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome
                                utente</label>
                            <input type="text" value="{{old(auth()->user()->name}}" name="name"
                                class="form-control" id="name">
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark">Salva</button>
                    </form>
                </div>
            </div>
        </div>
    
</x-main>