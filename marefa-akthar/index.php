<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Marefa Akthar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'blocks/layouts/head-resourses.php'?>
</head>
<body>
    <?php include 'blocks/layouts/topheader.php'?>
    <div class="logo text-center my-5">
        <a href="#">
            <img src="assets/images/logo.png" alt="logo">
        </a>
    </div>
    <?php include 'blocks/layouts/header.php'?>

    <!-- Home  -->
    <?php include 'blocks/home/home.php'?>

    <!-- section-tow  -->
    <div class="section-tow border-top py-5">
        <div class="container">
            <div class="row d-flex">
                <div class="col-8 p-0">
                    <?php include 'blocks/home/collection.php' ?>
                </div>
                <div class="col-4">
                    <?php include 'blocks/home/moreread.php' ?>
                </div>
            </div>
        </div>
    </div>


    <!-- video pannel -->
    <?php include 'blocks/home/videopannel.php' ?>

    <?php include 'blocks/layouts/footer.php'?>

    <?php include 'blocks/layouts/foot-resourses.php'?>
</body>
</html>