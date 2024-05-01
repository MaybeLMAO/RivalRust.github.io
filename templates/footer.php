<footer>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img src="img/<?php echo $config['logo']; ?>" alt="Logo of <?php echo $config['title']; ?>" title="<?php echo $config['title']; ?> Logo">
				<div>
					<span class="copyright">© Copyright <?php echo $config['title']; ?>. All Rights Reserved.</span><br>
					<small><?php echo $config['title']; ?> is not affiliated with, nor endorsed by Facepunch Studios Ltd. All trademarks and images belong to their respective owners.</small>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/linkify.min.js"></script>
<script src="js/linkify-element.min.js"></script>
<script>
    if(document.querySelector('.modal .server-description') !== null) {
        document.querySelectorAll('.modal .server-rules').forEach(function(description) {
            linkifyElement(description, { defaultProtocol: 'https', target: '_blank'}, document);
        });
        linkifyElement(document.querySelector('.modal .server-description'), { protocol: 'https', target: '_blank'}, document);
    }
</script>

</body>

</html>