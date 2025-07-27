<?php include 'db_connect.php' ?>
<style>
   span{
	font-family: monospace;
	font-size:24px;
   }
</style>

<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">	
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
						<center>
							<span><?php echo "Welcome back ". $_SESSION['login_name']."!"  ?></span>
							<br>
							<img src="assets\img\Invoice-amico.png" alt="Admin Page Imgae" height="500px">
						</center>
                    </div>
                    
                </div>
            </div>
	</div>

</div>
<script>
	
</script>