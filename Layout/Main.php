<main>
    <div class="container my-4">

        <div class="row row-cols-4 my-4">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $product->image ?>" alt="">
                        <div class="card-text text-center p-3">
                            <h4 class="my-2"><?php echo strtoupper($product->tipo_prodotto) ?></h4>
                            <div class="py-1"><?php echo ucfirst(strtolower($product->tipo_animale)) ?></div>
                            <div class="py-1">Quantità <?php echo $product->quantita ?></div>
                            <div class="py-1">Prezzo € <?php echo $product->getFinalPrice($user, $product->prezzo) ?></div>
                            <div class="py-1">
                                <?php
                                try {
                                    echo 'Stock: ' . $product->in_stock();
                                } catch (Exception $e) {
                                    echo "Stock: " . $e->getMessage();
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>