
<section class="pojemnik">




    <article>
    <header>
    <h1>Example: <?php echo $example->getNumber() ?></h1>
    <h2><?php echo $example->getTitle() ?></h2>
    <p>
    <?php echo $example->getLead() ?>
    </p>
    </header>


    <?php echo $example->getContents() ?>


    <footer>
    <?php echo $example->getUpdatedAt() ?>
    </footer>

    </article>

</section>