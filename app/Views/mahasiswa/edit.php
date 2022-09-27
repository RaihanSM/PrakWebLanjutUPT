<?=$this->extend('template')?>
<?=$this->section('content')?>
<div class="p-4">
<form action="/update/<?= $id ?>" method="post">
  <div class="form-group">
    <label for="npm">NPM</label>
    <input type="text" class="form-control" name="npm" id="npm" value="<?= $npm?>">
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama" value="<?= $nama?>">
  </div>
  <div class="form-check">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $alamat?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?=$this->endSection()?>