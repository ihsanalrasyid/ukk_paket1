<?=$this->extend("template/dashboard")?>

<?=$this->section("content")?>
<p class="mb-9">Selamat datang <?= $userdata["nama"] ?> di aplikasi Peduli Diri! Silahkan masukan catatan perjalanan di bawah ini.</p>
<a href="<?= base_url() ?>/isidata" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-edit"></i>
    </span>
    <span class="text">Isi Catatan Perjalanan</span>
</a>
<?=$this->endSection()?>