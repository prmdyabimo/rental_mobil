<?= $this->extend('template/index1'); ?>

<?= $this->section('content'); ?>

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
<form action="/login/auth" method="post">
  <!-- component -->
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    <?php if(session()->getFlashdata('msg')):?>
    <div class="w-[90%] mx-auto my-4 bg-blue-100 border-t border-b border-blue-500 text-blue-700 mx-auto px-4 py-3" role="alert">
      <p class="font-bold"><?= session()->getFlashdata('msg'); ?></p>
    </div>
    <?php endif;?>
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="email" id="inputForEmail" type="text" value="<?= set_value('email'); ?>">
    </div>
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" name="password" id="inputForPassword" type="password">
    </div>
    <div class="flex items-center justify-between">
      <div class="flex">
          <button type="submit" class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
      </div>
      <!-- <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
        Forgot Password?
      </a> -->
    </div>
  </div>
</form>

    </div>
</div>

<?= $this->endSection(); ?>