<h3 class="title">photo's</h3>
<section class="gallery">
    {foreach from=$photos item=photo}
        <div class="gallery__container">
            <img class="gallery__photos" src="{$photo}" alt="Image of Aurora">
        </div>
    {/foreach}
</section>