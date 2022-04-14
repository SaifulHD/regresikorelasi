<?= $this->extend('header');  ?>


<?= $this->section('content'); ?>

<section class="pt-1 pb-10 bg-gray-800 grid justify-items-center">
	<div class="container">
		<div class="flex flex-wrap items-center grid justify-items-center">
			<div class="w-1/2 self-center px-10 justify-center">
				<form enctype="multipart/form-data" role="form" action="<?= base_url('Hasil/hasilramalan'); ?>" method="post" id="input-form">
					<div class="mb-6">
						<label for="curahhujan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai Curah Hujan</label>
						<input required type="input" id="curahhujan" name="curahhujan" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nilai Curah Hujan">
					</div>
					<div class="flex">
						<button class="mb-5 mx-2 block text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800" type="submit">
							APA HASILNYAAA...?
						</button>
					</div>
				</form>
				<div class="mb-6">
					<label for="y" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai Produksi</label>
					<input value="<?= $nilaiRamalan; ?>" type="input" id="y" name="y" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nilai Y">
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection();  ?>
</body>




</html>