<section class="news">
    <h3 class="title">news</h3>

    {*<div class="news__wrapper">*}
        {*<form class="news__form">*}
            {*<input class="news__input" id="search" type="text" name="search">*}
            {*<button class="news__button">Search</button>*}
        {*</form>*}
        {*<div class="clear"></div>*}
    {*</div>*}

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
        <div class="clear"></div>
    {/foreach}

    <div class="news__pagination">
        {if $current_page gt 1}
            <a class="arrow" href="index.php?page=news&pageno={$current_page - 1}"><</a>
        {/if}
      <p class="news__number">{$current_page}</p>
        {if $current_page lt $total_pages}
            <a class="arrow" href="index.php?page=news&pageno={$current_page + 1}"> > </a>
        {/if}
    </div>
</section>