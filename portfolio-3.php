<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Calista EPC Pvt Ltd - Best Construction Company in Alappuzha, offering top-quality construction services across Kerala with over 15 years of experience and 100+ successfully completed projects.">
    <meta name="keywords" content="Construction, Alappuzha, Kerala, Building, Renovation, Calista EPC Pvt Ltd">
    <meta name="author" content="Calista EPC Pvt Ltd">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Best Builders in Alappuzha, Best home construction companies in Alappuzha">
    <meta property="og:description" content="Calista EPC Pvt Ltd is a leading construction company in Alappuzha, providing top-quality construction services across Kerala with a track record of over 100 successful projects.">
    <meta property="og:image" content="https://yourwebsite.com/images/logo.webp">
    <meta property="og:url" content="https://yourwebsite.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Calista EPC Pvt Ltd">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Builders in Alappuzha, Best home construction companies in Alappuzha">
    <meta name="twitter:description" content="Calista EPC Pvt Ltd is a leading construction company in Alappuzha, offering exceptional construction services across Kerala with over 15 years of experience and a commitment to quality.">
    <meta name="twitter:image" content="https://yourwebsite.com/images/logo.webp">

    <title>Best Builders in Alappuzha, Best home construction companies in Alappuzha</title>


    <?php include('links.php'); ?>

    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/magnific-popup.min.css">
</head>

<body>


    <div class="page-wrapper">

        <?php include('header.php'); ?>

        <div class="py-lg-5"></div>




        <section class="gallery-area pt-100 pb-70">

            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="portfolio-box">
                            <h4 class="mt-3">Ready to Start Your Project? <br><b>Get in Touch Today!</b></h4>
                            <span><i class="fa fa-phone" aria-hidden="true"> </i>
                                +91 9947093771</span> , 
                            <span> <i class="fa fa-envelope" aria-hidden="true"> </i> 
                                calista.epc07@gmail.com</span>
                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <div class="portfolio-box text-lg-right ">
                        <h4 class="mt-3">LIJO PETER</h4>
                                <p>KUTHIRAPANTHI</p>
                                <p>1500 Sq Ft</p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="container">
                <div class="row justify-content-center">

                    <?php
                    $directory = 'images/portfolio/lijo/';
                    $images = scandir($directory);

                    foreach ($images as $image) {
                        // Skip '.' and '..'
                        if ($image == '.' || $image == '..') {
                            continue;
                        }

                        // Generate HTML for each image
                        echo '<div class="col-lg-4 g-0 col-md-6">';
                        echo '<div class="single-gallery-item">';
                        echo '<a data-fancybox="gallery" href="' . $directory . $image . '">';
                        echo '<img src="' . $directory . $image . '" alt="image">';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>



                </div>
            </div>
        </section>


        <?php include('footer.php'); ?>

    </div>


    <?php include('scripts.php'); ?>

    <script src="js/fancybox.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
</body>

</html>