<header class="border-bottom container-fluid">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 ">
            <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">
                <img height="48px" src="/template/assets/aulab-logo.svg">
            </a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            @guest
            <a class="btn btn-sm btn-outline-secondary mx-2" href="{{route('register')}}">Registrati</a>
            <a class="btn btn-sm btn-outline-secondary mx-2" href="{{route('login')}}">Entra</a>
            
            @else  
            <span>Benvenuto, {{auth()->user()->name}}</span>
            <a class="btn btn-sm btn-outline-secondary mx-2" href="">Profilo</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-secondary mx-2">Logout</button>
            </form>
            @endguest
            
            
        </div>
    </div>
</header>
