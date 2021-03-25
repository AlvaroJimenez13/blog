<header>
    <h1>La tecla glotona, el teclado humano, el punto y coma travieso, el ratón vacilón y el tiempo hiriente </h1>
    <nav>
        <ul>
            <li><a href="{{route("home")}}" class="{{request()->routeIs("home") ? 'active': ''}}">HOME</a> </li>
            <li><a href="{{route("cursos.index")}}" class="{{request()->routeIs("cursos.*") ? 'active': ''}}">Cursos</a></li>
            <li><a href="{{route("nosotros")}}" class="{{request()->routeIs("nosotros") ? 'active': ''}}">Nosotros</a></li>
            <li><a href="{{route("contactanos.index")}}" class="{{request()->routeIs("contactanos.index") ? 'active': ''}}">Contactanos</a></li>

        </ul>
    </nav>
</header>
