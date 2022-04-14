<?= $this->extend('header');  ?>


<?= $this->section('content'); ?>

<section class="pt-1 pb-10 bg-gray-800 grid justify-items-center">
	<div class="container">
		<div class="flex flex-wrap items-center grid justify-items-center">
			<canvas id="myChart1" width="9" height="4"></canvas>
		</div>
	</div>
</section>

<script>
	var x = new Chart(document.getElementById("myChart1"), {
		type: 'scatter',
		data: {
			datasets: [{
				label: "X = Nilai Curah Hujan, Y = Nilai Produksi Padi",
				data: [
					<?php foreach ($list as $l) : ?> {
							x: <?= $l['nilaiX']; ?>,
							y: <?= $l['nilaiY']; ?>
						},
					<?php endforeach; ?>
				],

			}]
		},
		options: {
			responsive: true
		}
	});
</script>




<?= $this->endSection();  ?>