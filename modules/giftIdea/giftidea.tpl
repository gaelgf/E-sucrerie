<!-- Block mymodule -->
<div id="giftidea_block_home" class="block">
  <h4>Idée cadeau</h4>
  <div class="block_content" align="center">
    <p>{if isset($products) && $products}
            <a href="{$products[0].link}"><img src="{$link->getImageLink($products[0].link_rewrite, $products[0].id_image)}" style="max-width:200px;height:auto;"/></a>
            <a href="{$products[0].link}"><img src="{$link->getImageLink($products[1].link_rewrite, $products[1].id_image)}" style="max-width:200px;height:auto;"/></a>
            <a href="{$products[0].link}"><img src="{$link->getImageLink($products[2].link_rewrite, $products[2].id_image)}" style="max-width:200px;height:auto;"/></a>
       {else}
           pas renseigné
       {/if}
    </p>   
  </div>
</div>
<!-- /Block mymodule -->