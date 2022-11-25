$.ajax({
    url: "select.php",
    success: function (val) {
        $("#content").html(val);
    }
});

$("#save").click(function () {
    $nama = $("#nama").val()
    $nim = $("#nim").val()
    $prodi = $("#prodi").val()
    $asal = $("#asal").val()
    $alamat = $("#alamat").val()

    $.ajax({
        url: "insert.php",
        method: "POST",
        data: {
            nama: $nama,
            nim: $nim,
            prodi: $prodi,
            asal: $asal,
            alamat: $alamat
        },
        success: function (_) {
            $("#insertModal").modal("hide")
            $.ajax({
                url: "select.php",
                success: function (val) {
                    $("#content").html(val);
                }
            });
        }
    })
})