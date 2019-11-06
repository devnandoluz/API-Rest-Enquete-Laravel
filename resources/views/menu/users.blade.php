@if (!(Auth::guest()))
@include('layouts.user')
<nav class="main-menu">
        <div>
            <a class="logo" href="#"></a> 
        </div>
        <div class="settings"></div>
        <div class="scrollbar" id="style-1">
        <ul>
            <li>                                   
                <a href="{{ route('home') }}">
                <i class="fa fa-home fa-lg"></i>
                <span class="nav-text">Início</span>
                </a>
            </li>   

            <li>                                 
                <a href="{{ url('home') }}">                
                <i class="fa fa-user fa-lg"></i>
                    <span class="nav-text">Perfil: {{ Auth::user()->name }}</span>
                </a>
            </li>
            <li> 
                <a  href="{{ route('questionario.create') }}">
                    <i class="fa fa-plus fa-lg"></i>
                    <span class="nav-text"> Nova Enquete</span>
                </a>
            </li>
            
            <li>
                <a href="{{ route('questionario.index') }}">
                    <i class="fa fa-list fa-lg"></i>
                    <span class="nav-text"> Listar - Enquetes </span>
                </a>
            </li>
            <li class="darkerli">
                <a href="{{ route('tipo.create') }}">
                <i class="fa fa-plus fa-lg"></i>
                <span class="nav-text"> Novo Modelo de enquete</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ route('tipo.index') }}">
                <i class="fa fa-archive fa-lg"></i>
                <span class="nav-text"> Listar - Tipo de enquete</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ url('token') }}">
                <i class="fa fa-lock fa-lg"></i>
                <span class="nav-text">Gerenciar - Token</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ url('integracao') }}">
                <i class="fa fa-plane fa-lg"></i>
                <span class="nav-text">Integração</span>
                </a>
            </li>
        </ul>

        <li>                                
            <a href="{{ url('docs') }}">
                <i class="fa fa-question-circle fa-lg"></i>
                <span class="nav-text">Documentação</span>
            </a>            
        </li>   
                
        <li>
            <a href="{{ url('tech') }}">
                <i class="fa fa-code fa-lg"></i>
                <span class="nav-text">Tecnologias</span>                            
            </a>
        </li>  

        <ul class="logout">
            <li> 
                <a href="{{ route('logout') }}" class="button-link"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-lg"></i>
                        <span class="nav-text">Sair</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>       
        </ul>
    </nav>
    @endif