<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="bible.png" type="image/gif" sizes="16x16">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Prayer Request</title>
</head>
<body>










    <div class="contactBox py-5">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="text-center pt-4"><i class="fas fa-church fa-2x"></i></h2>
                            <h2 class="text-center pt-2 pb-4"> <strong>Request For Prayer</strong> </h2>

                            <?php 
                                $Msg = "";
                                if(isset($_GET['error']))
                                {
                                    $Msg = " Please Fill in the Blanks ";
                                    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                                }

                                if(isset($_GET['success']))
                                {
                                    $Msg = " Your Prayer Request Has Been Sent ";
                                    echo '<div class="alert alert-success">'.$Msg.'</div>';
                                }
                            
                            ?>
                        </div>
                        <div class="card-body">
                            <form action="process.php" method="post">
                                <input type="text" name="UName" placeholder="Your Name" class="form-control mb-2">
                                <input type="email" name="Email" placeholder="Your Email" class="form-control mb-2">
                                <input type="text" name="Subject" placeholder="Topic Of Your Prayer Request" class="form-control mb-2">
                                <textarea name="msg" class="form-control mb-2" rows = '6' placeholder="Elaborate On Your Prayer Request"></textarea>
                                


                                <button class="btn btn-info" name="btn-send"> Send </button>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 m-auto text-center text-light pt-5">
                <h1 class="blah">Be <span class="l2">joyful</span> in hope,<br><span class="l1">patient</span> in affliction,<br><span class="l3">faithful</span> in prayer</h1>
                <p class="bla">[ Romans 12:12 ]</p>
            </div>

            </div>
        </div>
    </div>




    <div class="text-center pt-2 pb-1 lowerText"> 
        <div class="container">
            <h6><strong>We put faith in our God and through this prayer may God listen to you.</strong></h6>
        </div>
    </div>











    <div class="container py-5 wallBox">
                            
    <h1 class="wall"><i class="fas fa-th-list"></i> PRAYER WALL</h1>

    <h3 class="pb-5">People who requested for prayer.</h3>
    

    <!-- CODE -->
    <?php
        require_once 'db/config.php';
        $sql = "SELECT name FROM prayer";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){
    ?>
                <span class="btn btn-sm btn-secondary"><strong><?php echo $row['name'] ?></strong></span>
    <?php
            }
       }
    ?>
    <!-- CODE -->

    </div>







    <footer>
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-5">
					<h3 class="footerT">Leland Core Ministries.</h3>
					<p>Preaching is declaring God’s truth in Jesus, to the praise of his name God’s truth is declared through the preacher, and it’s meaning is brought home to those who listen.</p>
					<p><a class="btn btn-info btn-sm" href="https://lelandcore.org/">Learn More</a></p>
				</div>
                <div class="col-md-3">
				</div>
                <div class="col-md-4">
					<h2 class="pt-3 name"><span class="rev">Rev.</span> Leland Core</h2>
                    <h5 class="pb-3">Minister Of The Gospel</h5>
				</div>


			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p> 
						<small class="block text-muted">&copy; 2021 | All Rights Reserved.</small> 
						<small class="block text-muted">www.lelandcore.org</small>
					</p>
				</div>
			</div>

		</div>
	</footer>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</body>
</html>