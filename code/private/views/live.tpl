<h3 class="title">Live dates</h3>
<div class="table">
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