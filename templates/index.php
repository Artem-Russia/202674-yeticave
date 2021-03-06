<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>

        <ul class="promo__list">
            <? foreach($categories as $category):?>
                <li class="<?=$category["class"];?>">
                    <a class="promo__link" href="all-lots.html"><?=strip_tags($category["name"]);?></a>
                </li>
            <? endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <? foreach($lots as $index=>$lot):
             ?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?=($lot["url"]);?>" width="350" height="260" alt="<?=strip_tags($lot["name"]);?>">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?=strip_tags($lot["category"]);?></span>
                        <h3 class="lot__title"><a class="text-link" href="lot.php?id=<?=$index?>"><?=strip_tags($lot["name"]);?></a></h3>

                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?=strip_tags($lot["price"]);?><b class="rub">р</b></span>
                            </div>
                            <div class="lot__timer timer">
                                <?=$lot_time_remaining;?>
                            </div>
                        </div>

                    </div>
                </li>
            <? endforeach; ?>
        </ul>
    </section>
</main>