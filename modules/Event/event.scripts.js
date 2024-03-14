//update edit Modal input fields when event selected
function update_edit_modal(id, nome_evento, data_evento, attendees) {
    // alert(id);

    // alert(document.getElementById('nome_evento').value);
    document.getElementById('id').value = id;
    document.getElementById('nome_evento_edit').value = nome_evento;
    document.getElementById('data_evento_edit').value = data_evento;
    document.getElementById('attendees_edit').value = attendees;

}