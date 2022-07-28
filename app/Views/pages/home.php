<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<div class="w-[100%]">
  <div class="flex flex-col shadow-xl w-[50%] mx-auto my-8">
    <div class="text-center font-bold text-[30px] my-4">
      <h1>Sistem Informasi Rental Mobil</h1>
    </div>
    <div class="flex flex-row mx-auto my-8">
      <a href="/register">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4">
          Pemilik
        </button>
      </a>
      <a href="/penyewa">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4">
          Penyewa
        </button>
      </a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>