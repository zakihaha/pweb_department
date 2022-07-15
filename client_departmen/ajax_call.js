function reloadEvent() {
    $(".menu").on("click", function () {
        convertURL(this.hash);
    });
    $('.linkEditBarang').on('click', function () {
        var hashClean = this.hash.replace('#', '');
        loadKonten('http://localhost/web_lanjut/departmen/index.php/Barang/form_edit/' + hashClean)
    })
    $('.linkHapusBarang').on('click', function () {
        var hashClean = this.hash.replace('#', '');
        hapusData(hashClean);
    })
    $(".btn-cari").on("click", function () {
        loadKonten('http://localhost/web_lanjut/departmen/index.php/Barang/cari_barang?cari_nama=' + $('.form-input-cari')[0]['value'] + '&cari_desk=' + $('.form-input-cari')[1]['value'] + '&cari_stok=' + $('.form-input-cari')[2]['value'])
    })
}

function cariData() {
    var url = 'http://localhost/web_lanjut/departmen/index.php/Barang/cari_barang';
    var dataForm = {}
    var allInput = $('.form-input-cari')

    $.each(allInput, function (index, value) {
        dataForm[value['name']] = value['value'];
    })

    $.ajax(url, {
        type: "POST",
        data: dataForm,
        success: function (data, status, xhr) {
            var objData = JSON.parse(data);
            $("#tabel_barang").html(objData.konten);
            reloadEvent();
        },
        error: function (jqXHR, textStatus, errorMsg) {
            alert("Error: " + errorMsg);
        }
    });
}


function hapusData(id_barang) {
    var url = 'http://localhost/web_lanjut/departmen/index.php/Barang/soft_delete_data?id_barang=' + id_barang;

    $.ajax(url, {
        type: "GET",
        success: function (data, status, xhr) {
            var objData = JSON.parse(data);
            alert(objData['pesan']);
            loadKonten('http://localhost/web_lanjut/departmen/index.php/Barang/index');
        },
        error: function (jqXHR, textStatus, errorMsg) {
            alert("Error: " + errorMsg);
        }
    });
}

function checkLogin() {
    var link = "http://localhost/web_lanjut/departmen/index.php/User/check_login";
    var dataForm = {};
    var allInput = $('.form-user-input');
    $.each(allInput, function(i, val) {
        dataForm[val['name']] = val['value'];
    });
    $.ajax(link, {
        type: 'POST',
        data: dataForm,
        success: function(data, status, xhr) {
            var data_str = JSON.parse(data);
            alert(data_str['pesan']);
            if (data_str['sukses'] == 'Ya') {
                location.replace('http://localhost/web_lanjut/client_departmen/client_jquery.html');
            }
        },
        error: function(jqXHR, textStatus, errorMsg) {
            alert('Error : ' + errorMsg);
        }
    });
}

function loadKonten(link) {
    $.ajax(link, {
        type: "GET",
        success: function (data, status, xhr) {
            var objData = JSON.parse(data);

            $("#kontenHTML").html(objData.konten);
            $("title").html(objData.title);
            reloadEvent();
        },
        error: function (jqXHR, textStatus, errorMsg) {
            $("#kontenHTML").html("Error: " + errorMsg);
            $("title").html("Error");
        }
    });
}

function convertURL(hash) {
    var hashClean = hash.replace("#", "");
    var url = "";

    if (hashClean == "departmen") {
        url = "http://localhost/web_lanjut/departmen/index.php/Department/";
    } else if (hashClean == "barang") {
        console.log('barang');
        url = "http://localhost/web_lanjut/departmen/index.php/Barang/";
    } else if (hashClean == "login") {
        console.log('login');
        url = "http://localhost/web_lanjut/departmen/index.php/Login/";
    }

    loadKonten(url);
}

convertURL("#barang");