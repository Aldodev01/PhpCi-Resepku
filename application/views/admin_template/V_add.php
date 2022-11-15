<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin_template/template/header") ?>
</head>

<body id="page-top">

<?php $this->load->view("admin_template/template/navbar") ?>
	<div id="wrapper">

<div class="content">
		<div id="content-wrapper">

		<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Mahasiswa</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('mahasiswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                <form method="POST" action="<?= base_url('index.php/admin_c/add')?>">
				<div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" name="image" id="image"  placeholder="Masukan image">
                </div>
                <br>
                <div class="form-group">
                    <label for="nama_resep">nama resep</label>
                    <input type="text" class="form-control" name="nama_resep" id="nama_resep"  placeholder="nama_resep">
                </div>
                <br>
                <div class="form-group">
                    <label for="deksripsi">deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi"  placeholder="deskripsi">
                </div>
                <br>
                <div class="form-group">
                    <label for="bahan">bahan</label>
                    <input type="text" class="form-control" name="bahan" id="bahan"  placeholder="bahan">
                </div>
                <br>  
                <div class="form-group">
                    <label for="langkah_masak">langkah_masak</label>
                    <input type="text" class="form-control" name="langkah_masak" id="langkah_masak"  placeholder="langkah_masak">
                </div>
                <br>  
                <div class="form-group">
                    <label for="link">link</label>
                    <input type="text" class="form-control" name="link" id="link"  placeholder="link">
                </div>
                <br>  
                <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
				<!-- Sticky Footer -->
        <?php $this->load->view("admin_template/template/footer") ?>
			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

</body>

</html>