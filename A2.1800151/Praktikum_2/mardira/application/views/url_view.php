<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh URL</title>
</head>
<body>
    <h1>Contoh URL</h1>
    <p>1. Base_url()</p>
    <?php echo base_url() ?>
    <br>
    <p>ini adalah gambar</p>
    <img src="<?php echo base_url('assets/manfaat-buah-apel.jpg') ?>" width="200px" height="auto">
    <br>
    <p>2. Site_url()</p>
    <?php echo site_url() ?>
    <br>
    <p><a href="<?php echo site_url('halaman')?>">Ke Halaman View</a></p>
    <br>
    <?php echo anchor('url/detail/1','ke halaman detail') ?>
    <br>
    <?php echo anchor('url/blank', 'ke halaman blank') ?>
</body>
</html>