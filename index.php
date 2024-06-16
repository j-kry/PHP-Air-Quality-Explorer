<?php

$cities = json_decode(
    file_get_contents(__DIR__ . '/data/index.json'),
    true
);

?>

<?php require __DIR__ . '/views/header.inc.php' ?>

<ul>
    <?php foreach ($cities as $city) : ?>
    <li>
        <a href="city.php?<?php echo http_build_query(['city' => $city['city']]); ?>">
            <?php echo $city['city'] ?>,
            <?php echo $city['country'] ?>
            (<?php echo $city['flag'] ?>)
        </a>
    </li>
    <?php endforeach; ?>
</ul>

<?php require __DIR__ . '/views/footer.inc.php' ?>