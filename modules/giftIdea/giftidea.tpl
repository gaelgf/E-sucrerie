<!-- Block mymodule -->
<div id="giftidea_block_home" class="block">
  <h4>Idée cadeau</h4>
  <div class="block_content" align="center">
    <p>{if isset($url) && isset($imagePath)}
            <a href="{$url[0]}"><img src="{$imagePath[0]}" style="max-width:200px;height:auto;"/></a>
            <a href="{$url[1]}"><img src="{$imagePath[1]}" style="max-width:200px;height:auto;"/></a>
            <a href="{$url[2]}"><img src="{$imagePath[2]}" style="max-width:200px;height:auto;"/></a>
       {else}
           pas renseigné
       {/if}
    </p>   
  </div>
</div>
<!-- /Block mymodule -->