$('#tipe').change(function(){
    var tipe = $('#tipe').val();
    
    $.ajax({
        url:'app/config/api/get_tipe_kamar.php',
        type: 'POST',
        dataType: 'json',
        data:{
            tipe:tipe
        },
        success:function (resp){
            var harga = resp.replace(/,/g,'')
            var hargaFormat = numberWithCommas(harga)
            $('#harga').val(hargaFormat)
            CountTotal()
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            console.log(jqXHR.responseText);
        }
    })
})

$('#nama').change(function(){
    if ($('#nama').val() == "Erling") {
        $('#ipk').val(3.5);
    }
    else{
        $('#ipk').val(0);
    }
    
    if ($('#ipk').val() <= 3.0) {
        $('#pilihan_beasiswa').prop('disabled', true);
        $('#file').prop('disabled', true);
        $('#submit').prop('disabled', true);
    }
    else{
        $('#pilihan_beasiswa').prop('disabled', false);
        $('#file').prop('disabled', false);
        $('#submit').prop('disabled', false);
        $('#pilihan_beasiswa').focus();
    }

})

