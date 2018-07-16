<section class="merch">
    <h3 class="title">merch</h3>
    <div class="merch__container">
        {foreach from=$merch item=product}
            <div class="merch__item">
                <div class="merch__media">
                    <img class="merch__img" src="{$product[0]}" alt="Product image">
                    <article class="merch__discription">
                        <p class="merch__product margin">{$product[1]}</p>
                        <p class="merch__price margin">{$product[2]}</p>
                        <a class="merch__link margin" href="{$product[3]}" target="_blank">Buy</a>
                    </article>
                </div>
            </div>
        {/foreach}
    </div>
</section>