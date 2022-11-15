<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin_template/template/header") ?>
</head>

<body id="page-top">




<?php $this->load->view("admin_template/template/navbar") ?>
	<div id="wrapper">
  <div class="content">
<form method="POST" action="<?= base_url('index.php/admin_c/updatedata')?>">
          <input type="hidden" name="id" value="<?php echo $edit->id;?>">

  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control" name="image" id="image"  placeholder="image" value="<?= $edit->image ?>" ;?>
  </div>
  <br>
  <div class="form-group">
    <label for="nama_resep">Nama Resep</label>
    <input type="text" class="form-control" name="nama_resep" id="nama_resep" placeholder="nama_resep" value="<?= $edit->nama_resep ?>">
  </div>
  <br>
  <div class="form-group">
    <label for="deskripsi">deskripsi</label>
    <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="deskripsi" value="<?= $edit->deskripsi ?>">
  </div>
  <br>
  <div class="form-group">
    <label for="bahan">bahan</label>
    <input type="text" class="form-control" name="bahan" id="bahan" placeholder="bahan" value="<?= $edit->bahan ?>">
  </div>
  <br>
  <div class="form-group">
    <label for="langkah_masak">langkah_masak</label>
    <input type="text" class="form-control" name="langkah_masak" id="langkah_masak" placeholder="langkah_masak" value="<?= $edit->langkah_masak ?>">
  </div>
  <br>
  <div class="form-group">
    <label for="link">Link</label>
    <input type="text" class="form-control" name="link" id="link" placeholder="link" value="<?= $edit->link ?>">
  </div>
 <br>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            
</div>
    	<!-- Sticky Footer -->
        <?php $this->load->view("admin_template/template/footer") ?>
			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

</body>

</html>