<?= $this->extend('header');  ?>


<?= $this->section('content'); ?>

<section class="pt-1 pb-24 bg-gray-800 grid justify-items-center">
	<div class="container">
		<div class="flex flex-wrap items-center grid justify-items-center">
			<div class="w-1/2 self-center px-10 justify-center">
				<form>
					<div class="mb-6">
						<label for="a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai A</label>
						<input disabled value="<?= $hasilkonstanta ?>" type="input" id="a" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
					</div>
					<div class="mb-6">
						<label for="b" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai B</label>
						<input disabled value="<?= $hasilkoeff ?>" type="input" id="b" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
					</div>
					<div class="mb-6">
						<label for="y" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Y = A + BX</label>
						<input disabled value="<?= $nilaiY; ?>" type="input" id="y" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
					</div>
					<div class="mb-6">
						<label for="pearson" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pearson</label>
						<input disabled value="<?= $pearson; ?>" type="input" id="pearson" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
					</div>
					<div class="mb-6">
						<label for="kd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koefisien Determinasi</label>
						<input disabled value="<?= $kd; ?>" type="input" id="kd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
					</div>
					<div class="mb-6">
						<label for="kesimpulanPearson" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Kesimpulan</label>
						<textarea placeholder="<?= $kesimpulanPearson; ?>" id="kesimpulanPearson" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled></textarea>
					</div>
					<div class="mb-6">
						<label for="kesimpulanDeterminasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Kesimpulan Korelasi</label>
						<textarea placeholder="<?= $kesimpulanDeterminasi; ?>" id="kesimpulanDeterminasi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled></textarea>
					</div>
					<div class="flex">
						<a href="<?= base_url('Hasil/cekhasil/'); ?>" class="mb-5 mx-2 block text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800" type="button">
							Tampilkan Hasil
						</a>
						<a class="mb-5 mx-2 block text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800" type="button">
							Simpan Hasil
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<section class="pt-1 pb-24 bg-gray-800 grid justify-items-center">
	<div class="container">
		<div class="flex flex-wrap items-center grid justify-items-center">
			<div class="w-1/2 self-center px-10 justify-center">
				<div class=" relative overflow-x-auto shadow-md sm:rounded-lg">
					<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
						<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
							<tr>
								<th scope="col" class="px-6 py-3">
									X
								</th>
								<th scope="col" class="px-6 py-3">
									Y
								</th>
								<th scope="col" class="px-6 py-3">
									X²
								</th>
								<th scope="col" class="px-6 py-3">
									XY
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
								<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
									100
								</th>
								<td class="px-6 py-4">
									100
								</td>
								<td class="px-6 py-4">
									100
								</td>
								<td class="px-6 py-4">
									100
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- modal tambah -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
	<div class="relative p-4 w-full max-w-md h-full md:h-auto">
		<!-- Modal content -->
		<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
			<div class="flex justify-end p-2">
				<button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</button>
			</div>
			<form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
				<h3 class="text-xl font-medium text-gray-900 dark:text-white">YAKIN?</h3>

				<button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>

			</form>
		</div>
	</div>
</div>

<?= $this->endSection();  ?>
</body>




</html>