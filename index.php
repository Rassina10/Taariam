<?php include 'data.php'; ?>

<?php include 'header.php'; ?>

    <section class="hero">
        <?php echo "<h1>Bienvenue chez Taariam</h1>"; ?>
        <p>Découvrez nos offres et profitez de nos services de qualité.<br>
            Mobile, DevOps, cloud, et bien plus encore pour votre entreprise.
        </p>
        <button>Nous contacter</button>
    </section>

    <section class="services" >
        <h2>Nos Services</h2>
    <div class="service-list">
        <?php foreach ($services as $service): ?>
            <div class="service">
                <h3><?php echo $service->title; ?></h3>
                <p><?php echo $service->description; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    </section>

    <?php include 'footer.php'; ?>
