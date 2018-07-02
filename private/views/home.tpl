<section class="home__section">
    <h3 class="title">Queendom is out now!</h3>
    <iframe class="home__section-video" width="700" height="400" src="https://www.youtube.com/embed/wULeXeQkqd0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</section>

<hr class="line">

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
                    <td><a href="{$data[4]}" target="_blank"><button class="button__ticket">Ticket</button></a></td>
                </tr>
            {/foreach}
        </table>
    </div>
    <a class="center" href="index.php?page=live"><button class="button__link">See more</button></a>

</section>
