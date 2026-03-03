<?php include 'header.php'; ?>

    <section class="hero">
        <?php echo "<h1>Bienvenue chez Taariam</h1>"; ?>
        <p>Découvrez nos offres et profitez de nos services de qualité.<br>
            Mobile, DevOps, cloud, et bien plus encore pour votre entreprise.
        </p>
        <button>Nous contacter</button>
    </section>


    <?php $services = [
        [
            "title" => "Mobile",
            "description" => "Nous créons des applications mobiles performantes et intuitives pour iOS et Android."
        ],
        [
            "title" => "DevOps",
            "description" => "Nous optimisons vos processus de développement et de déploiement pour une efficacité maximale."
        ],
        [
            "title" => "Cloud",
            "description" => "Nous vous aidons à migrer vers le cloud et à gérer vos infrastructures cloud de manière efficace."
        ]
    ]; ?>

    <section class="services" >
        <h2>Nos Services</h2>
    <div class="service-list">
        <?php foreach ($services as $service): ?>
            <div class="service">
                <h3><?php echo $service["title"]; ?></h3>
                <p><?php echo $service["description"]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    </section>

    <?php include 'footer.php'; ?>
