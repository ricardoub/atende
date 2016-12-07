<!-- Modal -->
<div id="modalExcluir" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="panel panel-danger margin-bottom-0">
                <div class="panel-heading">
                    <h3>Excluir registro?</h3>
                </div>
                <div class="panel-body">
                    @include('partials.messages')
                    {{ Form::model($user, ['route' => ['users.destroy', $user->id] ]) }}
                        @include('users.partials.form')
                        <hr>
                        @include('users.partials.form-buttons-excluir')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
