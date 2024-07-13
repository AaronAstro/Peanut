<?php

require_once 'config.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Retrieve username 
    $sql = "SELECT `name` FROM `user_form` WHERE `id` = $user_id";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $result = mysqli_fetch_assoc($query);
        $_SESSION['user_name'] = $result['name'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('templates/header.php'); ?>

<section class="main-section">
    <div class="welcome-img" style="
    background-image: url('images/banner22.png');">
        <div class="wrapper">
            <div class="say-hello">
                <h1>Droxford Farm</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Optio ab officiis eveniet debitis, nostrum
                    ea quaerat. Eos, odio pariatur expedita vitae
                    reprehenderit est sint ipsa iure repellat,
                    corporis sequi fugit?
                </p>
                <a href="" class="shop-now">Shop Now</a>
            </div>
        </div>
    </div>



    <div class="wrapper">
        <div class="insider-row">
            <div class="info">
                <h1>Droxford Farm Insider</h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aperiam doloremque illum minus! Incidunt voluptatem tempora ad,
                    quas unde ducimus recusandae ullam quis. Eveniet, accusantium
                    odit illum nostrum minus consequatur nobis.
                </p>
                <a href="">Learn more ></a>
            </div>
            <img src="images/insider.png" alt="">

        </div>

    </div>
</section>

<hr style="color: darkgrey; margin:0; padding:0;">
<div class="wrapper items-for-footer">
    <div class="box box1">
        <img src="images/contact-icon.png" alt="" class="icon">
        <h3>Contact us</h3>
        <p>Our support team is here to help by phone or email.</p>
        <a href="">Learn More ></a>
    </div>
    <div class="box box2">
        <img src="images/insider-icon.png" alt="" class="icon icon2">
        <h3>Droxford Insider</h3>
        <p>Satisfaction will always be our goal, and protection - our promise.</p>
        <a href="">Learn More ></a>
    </div>
    <div class="box box3">
        <img src="images/shop-icon.png" alt="" class="icon">
        <h3>Shope</h3>
        <p>Sell quality products that people use every day.</p>
        <a href="">Learn More ></a>
    </div>
</div>
<hr style="color: grey; margin:0; padding:0;">


<?php require_once('templates/footer.php');
?>

</html>