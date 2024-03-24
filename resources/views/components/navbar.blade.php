<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid"
        style="background-image: radial-gradient(circle, #4e1244 0%, #174b57 100%);background-size: 100% auto; ">
        <a style="font-weight: 1600; padding-left: 30px;color: #DFDFDF; font-size:30px" class="navbar-brand"
            href="{{ route('home') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="display: flex; align-items: left;">
            <div style="display: flex;flex:1">

            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 linkNavBar">
                <li class="nav-item">
                    <a style="color: #DFDFDF; font-size:20px" class="nav-link active" aria-current="page"
                        href=" {{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: #DFDFDF; font-size:20px"class="nav-link dropdown-toggle" href="#"
                        id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endforeach
                    </ul>
                </li>

                @auth
                    <li class="nav-item">
                        <a style="color: #DFDFDF; font-size:20px"class="nav-link" href="{{ route('ads.create') }}">Inserisci
                            un annuncio</a>
                    </li>
                
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a style="color: #DFDFDF; font-size:20px" class="nav-link btn btn-outline-succes btn-sm position-relative" 
                    aria-current="page" href="{{route('revisor.index')}}">
                    Area revisore
                    <span style="color: #DFDFDF; font-size:20px" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{App\Models\Ad::toBeRevisionedCount()}}
                        <span style="color: #DFDFDF; font-size:20px" class="visually-hidden">unread messages</span>
                    </span>
                </a>

                </li>
                @endif
                @endauth
                @guest
                    <li class="nav-item">
                        <a style="color: #DFDFDF; font-size:20px" class="nav-link active" aria-current="page"
                            href="/login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a style="color: #DFDFDF; font-size:20px" class="nav-link active" aria-current="page"
                            href="/register">Registrati</a>
                    </li>
                @endguest
                @auth
                    <li style="margin-top: 5px; margin-left: 10px" class="nav-item">
                        <form style="margin-right: 10px" action="/logout" method="POST">
                            @csrf
                            <button
                                style="
                            align-items: center;
                            background-color: rgba(240, 240, 240, 0.26);
                            border: 1px solid hsl(0, 0%, 100%);
                            border-radius: 16px;
                            box-sizing: border-box;
                            color: #f5f1f1;
                            cursor: pointer;
                            display: flex;
                            font-family: Inter, sans-serif;
                            font-size: 15px;
                            justify-content: center;
                            line-height: 18px;
                            max-width: 100%;
                            padding: 10px 20px;
                            text-decoration: none;
                            transition: all .2s;
                            user-select: none;
                            -webkit-user-select: none;
                            touch-action: manipulation;
                            width: 100%;
                            }

                            .button-46:active,
                            .button-46:hover {
                            outline: 0;
                            }

                            .button-46:hover {
                            background-color: #FFFFFF;
                            border-color: rgba(0, 0, 0, 0.19);
                            }

                            @media (min-width: 768px) {
                            .button-46 {
                            font-size: 20px;
                            min-width: 200px;
                            padding: 10px 15px;
                            }
                            }"
                                type="submit" class="button-46" role="button">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
