<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="w-[100%]">
  <div class="w-[40%] mx-auto">
    <div class="flex flex-col mx-auto shadow-xl my-8">
      <form action="/Rental/backLaporan" method="post">
        <div class="text-center font-bold text-[30px] my-4">
          <h1>Cetak Laporan</h1>
        </div>
        <?php if(session()->getFlashdata('pesan')) : ?>
          <div class="w-[90%] mx-auto my-4 bg-blue-100 border-t border-b border-blue-500 text-blue-700 mx-auto
          px-4 py-3" role="alert">
              <p class="font-bold"><?= session()->getFlashdata('pesan'); ?></p>
          </div>
        <?php endif; ?>
        <div class="border w-[90%] mx-auto my-4 p-4">
          <?php foreach($data_pengembalian as $dp) ?>
          <p>Id Pengembalian : <?= $dp['id_pengembalian']; ?></p>
          <p>Id Penyewa : <?= $dp['id_penyewa']; ?></p>
          <p>No Ktp : <?= $dp['no_ktp']; ?></p>
          <p>Nama Penyewa : <?= $dp['nama_penyewa']; ?></p>
          <p>Id Plat Mobil : <?= $dp['id_plat_mobil']; ?></p>
          <p>Nama Mobil : <?= $dp['nama_mobil']; ?></p>
          <p>Tanggal Rental : <?= $dp['tanggal_rental']; ?></p>
          <p>Tanggal Kembali : <?= $dp['tanggal_kembali']; ?></p>
          <p>Terlambat : <?= $dp['terlambat']; ?></p>
          <p>Denda : <?= $dp['denda']; ?></p>
        </div>
        <div class="flex my-4">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-auto">
            Back
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>