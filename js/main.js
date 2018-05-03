/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('cliente');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Cliente #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})


$(document).ready(function () {
    var $campocpf = $("#cpf");
    $campocpf.mask('000.000.000-00');

    var $campodata = $("#datadenascimento");
    $campodata.mask('0000-00-00');

});
