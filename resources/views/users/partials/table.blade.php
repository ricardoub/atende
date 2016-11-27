<!-- Listagem Usuários -->
<table class="table table-bordered table-stripped table-responsive">
<thead>
    <tr>
        <th>ID</th>
        <th scope="col" class="col-lg-6 col-md-5 text-left">Nome</th>
        <th scope="col" class="col-lg-6 col-md-5 text-left">E-mail</th>
    </tr>
</thead>
<tbody>
    @foreach($users as $user)
    <a href="{{ route('users.show', $user->id) }}">
        <tr>
            <td data-label="ID" class="text-right">
                <a href="{{ route('users.show', $user->id) }}">{{$user->id}}</a>
            </td>
            <td data-label="Nome Usuário" class="text-left">
                <a href="{{ route('users.show', $user->id) }}">{{$user->name}}</a>
            </td>
            <td data-label="E-mail" class="text-left">
                <a href="{{ route('users.show', $user->id) }}">{{$user->email}}</a>
            </td>
        </tr>
    @endforeach()
</tbody>
</table>
