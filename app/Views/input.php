<?= $this->extend('header');  ?>


<?= $this->section('content'); ?>

<section class="pt-1 pb-10 bg-gray-800 grid justify-items-center">
	<div class="container">
		<div class="flex flex-wrap items-center grid justify-items-center">
			<div class="w-1/2 self-center px-10 justify-center">
				<form enctype="multipart/form-data" role="form" action="<?= base_url('Input/input'); ?>" method="post" id="input-form">
					<div class="mb-6">
						<label required for="x" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai Curah Hujan</label>
						<input type="input" id="x" name="x" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nilai Curah Hujan">
					</div>
					<div class="mb-6">
						<label for="y" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai Produksi Padi</label>
						<input required type="input" id="y" name="y" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nilai Produksi Padi">
					</div>
					<div class="flex">
						<button class="mb-5 mx-2 block text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800" type="button" data-modal-toggle="authentication-modal">
							Tambah data
						</button>
					</div>
					<!-- modal input manual start -->
					<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
						<div class="relative p-4 w-full max-w-md h-full md:h-auto">
							<!-- Modal content start -->
							<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
								<div class="flex justify-end p-2">
									<button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
										<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
										</svg>
									</button>
								</div>
								<div class="grid justify-items-center py-5">
									<h3 class="text-xl font-medium text-gray-900 dark:text-white">YAKIN?</h3>
								</div>
								<div class="grid justify-items-center py-5 mx-5">
									<button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
								</div>
							</div>
							<!-- modal content end -->
						</div>
					</div>
					<!-- modal input manual end -->
				</form>


				<!-- import excel start -->
				<?= form_open_multipart('Input/importexcel'); ?>
				<div class="flex flex-wrap">
					<button class="mb-5 mx-2 block text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800" type="button" data-modal-toggle="authentication-modal-excel">
						Input data dari excel
					</button>
					<input name="file_excel" class="form-control inline-block h-1/4 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="user_avatar" type="file">
				</div>
				<div id="authentication-modal-excel" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
					<div class="relative p-4 w-full max-w-md h-full md:h-auto">
						<!-- Modal content start -->
						<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
							<div class="flex justify-end p-2">
								<button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
									<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
									</svg>
								</button>
							</div>
							<div class="grid justify-items-center py-5">
								<h3 class="text-xl font-medium text-gray-900 dark:text-white">YAKIN?</h3>
							</div>
							<div class="grid justify-items-center py-5 mx-5">
								<button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
							</div>
						</div>
						<!-- modal content end -->
					</div>
				</div>
				<!-- modal input manual end -->
				</form>
				<?= form_close(); ?>
				<!-- import excel end -->
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
								<th scope="col" class="px-6 py-3">
									<span class="sr-only">Edit</span>
								</th>
								<th scope="col" class="px-6 py-3">
									<span class="sr-only">Delete</span>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($list as $l) : ?>
								<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
									<td class="px-6 py-4">
										<?= $l['nilaiX']; ?>
									</td>
									<td class="px-6 py-4">
										<?= $l['nilaiY']; ?>
									</td>
									<td class="px-6 py-4">
										<?= $l['nilaiXkuadrat']; ?>
									</td>
									<td class="px-6 py-4">
										<?= $l['nilaiXY']; ?>
									</td>
									<td class="px-0 py-4 text-right">
										<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
									</td>
									<td class="pr-5 py-4 text-right">
										<a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>





<?= $this->endSection();  ?>
</body>




</html>