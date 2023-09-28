<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootcamp#3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />


    <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('asset/css/service.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('asset/css/media.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('asset/css/contact.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('asset/css/footer.css') ?>" />
    
</head>
   <body>
      <?= $this->renderSection("content"); ?>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?= base_url('js/bootstrap.min.css') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        $(document).ready(function () {
            $(".menu-icon").on("click", function () {
                $("nav ul").toggleClass("showing");
                $('nav').addClass('panjang');

            });
        });

        $(window).on("scroll", function () {
            if ($(window).scrollTop() >= 500) {
                $('nav').addClass('blue');
                // $('transform-img img').addClass('bounce');
                transform-img.classList.add("bounce");

                
            }

            else {
                $('nav').removeClass('blue');
                transform-img.classList.remove("bounce");

            }
        })

    </script>

   <body>
</html>