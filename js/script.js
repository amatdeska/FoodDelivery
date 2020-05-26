function yangSedangDiEdit(e){
  if($('#onEdit').length == 0){
    // tidak ada yang sedang diedit stop aja
    return false;
  }

  // dapatkn id_penjualan yang ada di try
  let id = $('#onEdit').closest('tr').attr('id');

  // dapatkan nilai di input
  let name = $('#onEdit').val();

  // isi kolom dengan nilai terbaru dan tampilkan lagi
  $('#onEdit').siblings('span').php(name);
  $('#onEdit').siblings('span').show();

  // hapsu input Edit
  $('#onEdit').remove();

  ganti(id,name);
}

function ganti(id, name) {
  let passData = {'id' : id, 'name' : name};
  $.ajax({
    type: 'POST',
    url: '../Pages/display.php',
    dataType: 'json',
    data: passData,
    success: function(response){
      alert("Sukses")
    }
  });

  return false;

}

function 
