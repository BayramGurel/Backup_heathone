
<?php global $category ?>
        <?php foreach ($category as $cat): ?>
    <div class="col-sm-4 col-md-3">
        <div class="card">
            <div class="card-body text-center">
                <a href="/category/<?= $cat->id ?>">
                    <img class="product-img img-responsive center-block" src='/img/<?= $cat->picture ?>'/>
                </a>
                <div class="card-title mb-3"><?= $cat->name ?></div>
            </div>

        </div>
    </div>
<?php endforeach; ?>


