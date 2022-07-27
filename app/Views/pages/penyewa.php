<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<div class="w-[100%]">
  <div class="w-[50%] mx-auto">
    <div class="flex flex-col mx-auto shadow-xl my-8">
      <form action="/Rental/savePenyewa" method="post">
        <div class="text-center font-bold text-[30px] my-4">
          <h1>Data Penyewa</h1>
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="nama_penyewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Penyewa</label>
          <input type="text" name="nama_penyewa" id="nama_penyewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= old('nama_penyewa'); ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('nama_penyewa'); ?>
          </div>
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="no_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No KTP</label>
          <input type="number" name="no_ktp" id="no_ktp" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= old('no_ktp'); ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('no_ktp'); ?>
          </div>
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= old('alamat'); ?>">
        </div>
        <div class="flex my-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-auto">
            Simpan
            </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>