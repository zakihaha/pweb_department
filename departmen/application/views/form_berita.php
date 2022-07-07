<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS</title>
</head>

<body>
    <h1>Form Berita Baru</h1>
    <form action="#create_data" id="formBaru">
        <table border="0">
            <tr>
                <td>
                    Judul Berita
                </td>
                <td>
                    <input class="form-user-input" type="text" name="judul_berita" style="width: 40em">
                </td>
            </tr>
            <tr>
                <td>
                    Kategori Berita
                </td>
                <td>
                    <select class="form-user-input" name="id_kategori_berita" style="width: 40em">
                        <?php foreach ($list_kategori->result() as $key => $value) { ?>
                            <option value="<?= $value->id_kategori_berita ?>">
                                <?= $value->nama_kategori ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Isi Berita
                </td>
                <td>
                    <textarea class="form-user-input" name="isi_berita" style="width:
40em" rows="15"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;">
                    <button type="submit">Kirim Data</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>