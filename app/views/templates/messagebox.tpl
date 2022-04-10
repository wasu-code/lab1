{if ($messages->isMessage())}
    {if ($messages->isError())}
        <h3> Wystąpiły błędy:</h4>
        <ol id="id_errors">
            {foreach $messages->getErrors() as $err }
                {strip} <!--usunięcie nadmiarowych białych znaków-->
                    <li>{$err}</li>
                {/strip}
            {/foreach}
        </ol>
        <script>document.getElementById("id_errors").scrollIntoView();</script>
    {/if}
    
    {if ($messages->isInfo())}
        <h3> Informacje:</h4>
        <ol id="id_infos">
            {foreach $messages->getInfos() as $inf }
                {strip} <!--usunięcie nadmiarowych białych znaków-->
                    <li>{$inf}</li>
                {/strip}
            {/foreach}
        </ol>
        <script>document.getElementById("id_infos").scrollIntoView();</script>
    {/if}
{/if}