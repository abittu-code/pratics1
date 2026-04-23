<?php
$page = $_GET['page'] ?? 'home';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fregaget Perfumes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>🌸 Fregaget Perfumes</h1>
    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=shop">Shop</a>
        <a href="?page=about">About</a>
        <a href="?page=contact">Contact</a>
    </nav>
</header>

<main>

<?php if ($page == "home") { ?>
    <section class="hero">
        <h2>Luxury Fragrance Collection</h2>
        <p>Experience elegance in every drop</p>
        <a href="?page=shop" class="btn">Shop Now</a>
    </section>

<?php } elseif ($page == "shop") { ?>

    <h2 class="title">Our Perfumes</h2>

    <div class="products">

        <div class="card">
            <h3>Rose Bliss</h3>
            <p>Soft floral fragrance</p>
            <span>$49</span>
        </div>

        <div class="card">
            <h3>Midnight Oud</h3>
            <p>Deep woody luxury</p>
            <span>$89</span>
        </div>

        <div class="card">
            <h3>Ocean Mist</h3>
            <p>Fresh aqua scent</p>
            <span>$59</span>
        </div>

    </div>

<?php } elseif ($page == "about") { ?>

    <h2 class="title">About Us</h2>
    <p class="content">
        Fregaget Perfumes is a premium fragrance brand crafted for elegance and style.
    </p>

<?php } elseif ($page == "contact") { ?>

    <h2 class="title">Contact Us</h2>
    <p>Email: support@fregaget.homes</p>

<?php } else { ?>

    <h2>404 Page Not Found</h2>

<?php } ?>

</main>

<footer>
    <p>© <?php echo date("Y"); ?> Fregaget Perfumes</p>
</footer>

</body>
</html>