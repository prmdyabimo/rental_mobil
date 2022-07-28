<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<div class="w-[100%]">
  <div class="w-[50%] mx-auto">
    <div class="flex flex-col mx-auto shadow-xl my-8">
      <form action="/Rental/savePemilik" method="post">
        <div class="text-center font-bold text-[30px] my-4">
          <h1>Daftar Mobil</h1>
        </div>
        <?php if(session()->getFlashdata('pesan')) : ?>
          <div class="w-[50%] bg-blue-100 border-t border-b border-blue-500 text-blue-700 mx-auto
          px-4 py-3" role="alert">
              <p class="font-bold"><?= session()->getFlashdata('pesan'); ?></p>
          </div>
        <?php endif; ?>
        <div class="w-[50%] mx-auto my-4">
          <label for="id_plat_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Id Plat Mobil</label>
          <input type="text" name="id_plat_mobil" id="id_plat_mobil" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <div class="invalid-feedback">
            <?= $validation->getError('id_plat_mobil'); ?>
          </div>
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="nama_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Mobil</label>
          <input type="text" name="nama_mobil" id="nama_mobil" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <div class="invalid-feedback">
            <?= $validation->getError('nama_mobil'); ?>
          </div>
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="jenis_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis Mobil</label>
          <input type="text" name="jenis_mobil" id="jenis_mobil" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <div class="invalid-feedback">
            <?= $validation->getError('jenis_mobil'); ?>
          </div>
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="tahun_produksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tahun Produksi</label>
          <input type="number" name="tahun_produksi" id="tahun_produksi" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <div class="invalid-feedback">
            <?= $validation->getError('tahun_produksi'); ?>
          </div>
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="harga_sewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Sewa</label>
          <input type="number" name="harga_sewa" id="harga_sewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <div class="invalid-feedback">
            <?= $validation->getError('harga_sewa'); ?>
          </div>
        </div>
        <div class="flex my-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-auto">
            Simpan
            </button>
        </div>
      </form>
      <form action="/login/logout" method="post">
        <div class="flex my-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-auto">
            Logout
            </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>