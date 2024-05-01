<?php
	require_once __DIR__ . '/core.php';

    if(!doesStatsModuleExist())
        header('Location: index.php');

	include 'templates/head.php';
	include 'templates/navigation.php';
?>

	<div class="container">
		<main class="rust-stats-container">
			<div class="row">
				<div class="col-12">
					<h2 class="stats-heading">Statistics</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
                    <iframe src="stats/stats.php" style="width:100%;" onload="this.style.height=(this.contentWindow.document.body.scrollHeight+60)+'px';this.style.minHeight='650px';" title="Statistics"></iframe>
				</div>
			</div>
		</main>
	</div>

<?php
	include 'templates/footer.php';
?>