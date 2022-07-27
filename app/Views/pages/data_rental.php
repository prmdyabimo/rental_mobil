<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="w-[100%]">
  <div class="w-[50%] mx-auto">
    <div class="flex flex-col mx-auto shadow-xl my-8">
      <form action="/Rental/saveDatarental" method="post">
        <div class="text-center font-bold text-[30px] my-4">
          <h1>Data Rental</h1>
        </div>

        <!-- PENYEWA -->
        <?php foreach($data_penyewa as $dp) : ?>
        <?php endforeach ; ?>
        <div class="w-[50%] mx-auto my-4">
          <label for="id_penyewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Id Penyewa</label>
          <input type="number" name="id_penyewa" id="id_penyewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"value="<?= $dp['id_penyewa']; ?>">
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="no_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No KTP</label>
          <input type="number" name="no_ktp" id="no_ktp" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $dp['no_ktp']; ?>">
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="nama_penyewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Penyewa</label>
          <input type="text" name="nama_penyewa" id="nama_penyewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $dp['nama_penyewa']; ?>">
        </div>

        <!-- Mobil -->
        <?php foreach($data_mobil as $dm) : ?>
        <?php endforeach ; ?>
        <div class="w-[50%] mx-auto my-4">
          <label for="nama_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pilih Nama Mobil</label>
          <select name="nama_mobil" id="nama_mobil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <?php foreach($data_mobil as $dm) : ?>
            <option value="<?= $dm['nama_mobil']; ?>"><?= $dm['nama_mobil']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="id_plat_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Id Plat Mobil</label>
          <input type="text" name="id_plat_mobil" id="id_plat_mobil" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"value="<?= $dm['id_plat_mobil']; ?>">
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="harga_sewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Sewa</label>
          <input type="number" name="harga_sewa" id="harga_sewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"value="<?= $dm['harga_sewa']; ?>">
        </div>

        <!-- USER -->
        <div class="w-[50%] mx-auto my-4">
          <label for="tanggal_rental" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal Rental</label>
          <input type="date" name="tanggal_rental" id="tanggal_rental" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="w-[50%] mx-auto my-4">
          <label for="lama_sewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lama Sewa</label>
          <input type="date" name="lama_sewa" id="lama_sewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div hidden class="w-[50%] mx-auto my-4">
          <label for="hari_sewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hari Sewa</label>
          <input type="date" name="hari_sewa" id="hari_sewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
        </div>

        <!-- HASIL -->
        <div hidden class="w-[50%] mx-auto my-4">
          <label for="total_harga_sewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Total Harga Sewa</label>
          <input type="number" name="total_harga_sewa" id="total_harga_sewa" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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