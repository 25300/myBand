    {*HOME*}

<section class="home__section">
    <h3 class="title">Queendom is out now!</h3>
    <iframe class="home__section-video" width="700" height="400" src="https://www.youtube.com/embed/wULeXeQkqd0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</section>

<hr class="line">

    {*LIVE*}

<section class="home__live">
    <h3 class="title">Live dates</h3>
    <div class="table home__table">
        <table>
            {foreach from=$live item=data}
                <tr>
                    <td>{$data[0]}</td>
                    <td>{$data[1]}</td>
                    <td>{$data[2]}</td>
                    <td>{$data[3]}</td>
                    <td><a class="ticketlink" href="{$data[4]}" target="_blank">Ticket</a></td>
                </tr>
            {/foreach}
        </table>
    </div>
    <div class="center">
        <a class="seemore" href="index.php?page=live">See more</a>
    </div>
</section>

<hr class="line">

    {*PHOTOS*}

<section class="home__photos">
    <h3 class="title">photo's</h3>
    <section class="home__gallery">
        {foreach from=$photos item=photo}
            <div class="home__gallery-container">
                <img class="home__gallery-photos" src="{$photo}" alt="Image of Aurora">
            </div>
        {/foreach}
    </section>
    <div class="center">
        <a class="seemore" href="index.php?page=photos">See more</a>
    </div>
</section>

<hr class="line">

    {*NEWS*}

<section class="news">
    <h3 class="title">news</h3>
    {foreach from=$news item=item}
        <div class="news__article">
            <div class="news__container">
                <div class="news__info">
                    <h2 class="news__title">{$item[0]}</h2>
                </div>
                <div class="news__info">
                    <p class="news__date">{$item[1]}</p>
                </div>
                <div class="news__row">
                    <p class="news__text">{$item[2]}</p>
                </div>
                <div class="news__column">
                    <img class="news__img" src="{$item[3]}" alt="Image article">
                </div>
                <div class="clear"></div>
                <a class="news__link" href="{$item[4]}" target="_blank">Read more</a>
            </div>
        </div>
    {/foreach}
    <div class="center">
        <a class="seemore" href="index.php?page=news">See more</a>
    </div>
</section>

<hr class="line">

    {*MERCH*}

<section class="merch">
    <h3 class="title">merch</h3>
    <div class="merch__container--home">
        {foreach from=$merch item=product}
            <div class="merch__item">
                <div class="merch__media--home">
                    <img class="merch__img" src="{$product[0]}" alt="Product image">
                    <article class="merch__discription--home">
                        <p class="merch__product margin">{$product[1]}</p>
                        <p class="merch__price margin">{$product[2]}</p>
                        <a class="merch__link margin" href="{$product[3]}" target="_blank">Buy</a>
                    </article>
                </div>
            </div>
        {/foreach}
    </div>
</section>
<div class="center">
    <a class="seemore" href="index.php?page=merch">See more</a>
</div>