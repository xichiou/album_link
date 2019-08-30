<{if $block.col=='0'}>
    <{foreach from=$block.links item=web}>
        <div style="float: left; text-align: center; width: 130px; height: <{if $block.height}><{$block.height}><{else}><{$web.height}><{/if}>px; overflow: hidden;">
        <{$web.pic}>
        <{if $web.title or $web.url}>
            <{if $web.title}><p style="font-size: 12px;height: 15px; overflow: hidden;"><{$web.title}></p><{/if}>
            <{if $web.url}><p style="font-size: 11px; height: 15px; overflow: hidden;"><{$web.url}></p><{/if}>
        <{/if}>
        </div>
    <{/foreach}>
    <div style='clear:both;'></div>
<{else}>

    <{assign var="i" value=0}>
    <{assign var="total" value=1}>
    <{foreach from=$block.links item=web}>

      <{if $i==0}>
          <div class="row">
      <{/if}>

      <div class="col my-2" id="item_album_link_<{$web.link_sn}>">
        <div class="card">
          <div class="AlbumLink">
            <a href="<{$web.url}>" style="display:block; width:100%;height:100%; background: url('<{$web.pic}>') center center / cover no-repeat #252a44;">
              <div style="font-size: 1.1em; font-weight:normal; color:#FFFFFF; position:absolute; bottom:2px; left:10px; text-shadow: 1px 1px 0 #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 0px -1px 0 #000, 0px 1px 0 #000, -1px 0px 0 #000, 1px 0px 0 #000;"><{$web.title}></div>
            </a>
          </div>
        </div>
      </div>

      <{assign var="i" value=$i+1}>
          <{if $i == $block.col || $total==$block.count}>
              </div>
              <{assign var="i" value=0}>
          <{/if}>
      <{assign var="total" value=$total+1}>
    <{/foreach}>

<{/if}>

<div style="text-align:right;">
    [ <a href="<{$xoops_url}>/modules/album_link/index.php?cate_sn=<{$block.cate_sn}>">more...</a> ]
</div>