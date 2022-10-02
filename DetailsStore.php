<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Details</title>
    <link rel="stylesheet" href="Css/Details.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?v=<?php echo time(); ?>">
</head>

<body>
    <header class="header-contents">
        <div class="Elements">
            <a href="main.php" style="text-decoration: none;">
                <div class="acps3">
                    <h2>Gadget Zone</h2>
                </div>
            </a>
            <div class="video-element">
                <video src="bgvideos/tech4.mp4" muted loop autoplay></video>
            </div>




        </div>

    </header>
    <section class="all-details">
        <div class="enter-userdetails">
            <h2 class="logo-title">User Details</h2>
            <form action="purchase.php" method="POST">
                <div class="data">

                    <input type="text" name="full_name" autocomplete="off" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="data">


                    <input type="number" name="phone_no" autocomplete="off" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="data">
                    <input type="text" name="address" class="address-details" autocomplete="off" class="form-control" placeholder="Address" required>
                </div>
                <button class="make-purchase-button" name="purchase">Proceed</button>
            </form>
        </div>
    </section>
</body>

</html>