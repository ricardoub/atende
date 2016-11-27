<!-- Listagem Usuários -->
<table class="table table-bordered table-stripped table-responsive">
  <thead>
    <tr>
      <th>ID</th>
      <th scope="col" class="col-lg-5 col-md-5 text-left">Nome</th>
      <th scope="col" class="col-lg-5 col-md-4 text-left">E-mail</th>
      <th scope="col" class="col-lg-2 col-md-3 col-sm-2">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <td button=""data-label="ID"  class="text-right">{{$user->id}}</td>
        <td data-label="Nome Usuário" class="text-left">{{$user->name}}</td>
        <td data-label="E-mail" class="text-left">{{$user->email}}</td>
        <td data-label="Ações" class="text-left">
          <div class="btn-group margin-top-0" >
            @if (!Auth::guest())
              <a href="{{ route('users.update', $user->id) }}" class="btn btn-default btn-sm" >
                <i class="fa fa-edit fa-fw"></i>
                <span class="hidden-xs hidden-sm">
                  Alterar
                </span>
              </a>
              <a href="{{ route('users.delete', $user->id) }}" class="btn btn-default btn-sm btn-remover" >
                <i class="fa fa-trash fa-fw"></i>
                <span class="hidden-xs hidden-sm">
                  Excluir
                </span>
              </a>
            @endif
          </div>
        </td>
      </tr>
    @endforeach()
  </tbody>
</table>
