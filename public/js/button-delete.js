$(document).ready(function(){
  var buttons = $('.btn-delete');
  buttons.on('click', function(ev){
    var confirm = window.confirm('Tem certeza que deseja remover?');
    if(!confirm) {
      ev.preventDefault();
    }
  })
});
