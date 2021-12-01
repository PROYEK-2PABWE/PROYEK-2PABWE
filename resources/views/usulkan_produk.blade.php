@extends('layouts.main')

@section('container')
    <form action="" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="p-5">
            <h1>Usulkan Produk</h1>
            <p>Anda bisa mengusulkan produk agar tersedia dihalaman Del Apotik</p>
            <h3>Upload Foto Produk</h3>
            <br>
            <div class="bg-secondary py-5 w-100">
                <div class="m-auto bg-light w-75 rounded-3" style="border: dashed 0.3rem">
                    <div class="text-center" style="padding: 6rem 0">
                        <i class="fas fa-cloud-upload-alt color-main" style="font-size: 5rem"></i> <br><br>
                        <input type="file" id="myFile" name="filename" style="background-color: #DDD;">
                    </div>
                </div>
            </div>
            <div class="form-group py-3">
                <h3>Keterangan :</h3> <br>
                <textarea class="form-control" name="keterangan" rows="5rem"></textarea>
            </div>
            <br>
            <input type="submit" name="proses" value="Kirim" class="btn btn-primary bg-color-main">
        </div>
    </form>

    <?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'del_apotek');
    
    if (isset($_POST['proses'])) {
        $direktori = 'berkasUsulkanProduk/';
        $file_name = $_FILES['filename']['name'];
        move_uploaded_file($_FILES['filename']['tmp_name'], $direktori . $file_name);
    
        $sql = "insert into usulkan_produk (file, ket) values ('$file_name', '" . $_POST['keterangan'] . "')";
    
        mysqli_query($koneksi, $sql);
    
        echo "<script>alert('File Berhasil diupload !');history.go(-1);</script>";
    }
    ?>
@endsection;
