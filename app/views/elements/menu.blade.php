<nav class="navbar-default navbar-static-side">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{URL::to('/')}}"><i class="fa fa-dashboard fa-fw"></i> Painel Principal</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Membros<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Registrar</a>
                    </li>
                    <li>
                        <a href="#">Visualizar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-comment fa-fw"></i> Discursos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Registrar</a>
                    </li>
                    <li>
                        <a href="#">Editar</a>
                    </li>
                    <li>
                        <a href="#">Discursantes Antigos</a>
                    </li>
                    <li>
                        <a href="#">Todos os Discursantes</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-smile-o fa-fw"></i> Autores<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Registrar</a>
                    </li>
                    <li>
                        <a href="#">Todos os Autores</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-quote-right fa-fw"></i> Citações<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::to('/') }}/citacoes/registrarcitacao">Registrar</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/') }}/citacoes/todascitacoes">Todas as Citações</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>