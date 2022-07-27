<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<div class="w-[100%]">
  <div class="w-[50%] mx-auto">
    <div class="flex flex-col mx-auto shadow-xl my-8">
      <form action="/Rental/saveDatarental" method="post">
        <div class="text-center font-bold text-[30px] my-4">
          <h1>Data Pengembalian</h1>
        </div>

        <!-- PENYEWA -->
        <?php foreach($data_rental as $dr) : ?>
        <?php endforeach ; ?>
        <div class="w-[50%] mx-auto my-4">
          <label for="id_penyewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Id Penyewa</label>
          <input type="number" name="id_penyewa" id="id_penyewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled value="<?= $dr['id_penyewa']; ?>">
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="no_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No KTP</label>
          <input type="number" name="no_ktp" id="no_ktp" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled value="<?= $dr['no_ktp']; ?>">
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="nama_penyewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Penyewa</label>
          <input type="text" name="nama_penyewa" id="nama_penyewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled value="<?= $dr['nama_penyewa']; ?>">
        </div>

        <!-- Mobil -->
        <div class="w-[50%] mx-auto my-4">
          <label for="nama_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pilih Nama Mobil</label>
          <select name="nama_mobil" id="nama_mobil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
            <?php foreach($data_rental as $dr) : ?>
            <option value="<?= $dr['nama_mobil']; ?>"><?= $dr['nama_mobil']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="id_plat_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Id Plat Mobil</label>
          <input type="text" name="id_plat_mobil" id="id_plat_mobil" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled value="<?= $dr['id_plat_mobil']; ?>">
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="tanggal_rental" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal Rental</label>
          <input type="date" name="tanggal_rental" id="tanggal_rental" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled value="<?= $dr['tanggal_rental']; ?>">
        </div>

        <!-- USER -->
        <div class="w-[50%] mx-auto my-4">
          <label for="tanggal_rental" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Terlambat</label>
          <input type="number" name="tanggal_rental" id="tanggal_rental" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Keterlambatan">
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="lama_sewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Denda</label>
          <input type="number" name="lama_sewa" id="lama_sewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled value="<?= $denda; ?>">
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