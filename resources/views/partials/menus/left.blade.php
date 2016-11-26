<!-- Left Side Of Navbar -->
<ul class="nav navbar-nav">
  @if (!Auth::guest())
    <li ><a href="{{ route('home') }}"><i class="fa fa-users fa-fw"></i> Início</a></li>
    <li ><a href="{{ route('users.index') }}"><i class="fa fa-users fa-fw"></i> Usuários</a></li>
  @endif
</ul>
