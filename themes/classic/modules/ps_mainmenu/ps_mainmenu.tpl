{assign var=_counter value=0}
{function name="menu" nodes=[] depth=0 parent=null parenN=null}
  {if $nodes|count}
    {foreach from=$nodes item=node}
      <ul id="menu">
        <li class="parent"><a href="#"> {$node.label}</a>
          <ul class="child">
            {foreach from=$node.children item=nodex}
              {if $nodex.children|count}
                <li class="parent">
                  <a href="#"> {$nodex.label}<span class="expand">»</span></a>
                  <ul class="child">
                    {foreach from=$nodex.children item=nodey}
                      <li><a href="#">{$nodey.label} </a></li>
                    {/foreach}
                  </ul>
                </li>
              {else}
                <li><a href="#"> {$nodex.label}</a></li>
              {/if}
            {/foreach}
          </ul>
        </li>
      </ul>
    {/foreach}
  {/if}

{/function}



<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
  {menu nodes=$menu.children}
  <div class="clearfix"></div>
  <style>
    .parent {
      display: block;
      position: relative;
      float: left;
      line-height: 30px;
      background-color: #4FA0D8;
      border-right: #CCC 1px solid;
    }

    .parent a {
      margin: 10px;
      color: #FFFFFF;
      text-decoration: none;
    }

    .parent:hover>ul {
      display: block;
      position: absolute;
    }

    .child {
      display: none;
    }

    .child li {
      background-color: #E4EFF7;
      line-height: 30px;
      border-bottom: #CCC 1px solid;
      border-right: #CCC 1px solid;
      width: 100%;
    }

    .child li a {
      color: #000000;
    }

    ul {
      list-style: none;
      margin: 0;
      padding: 0px;
      min-width: 10em;
    }

    ul ul ul {
      left: 100%;
      top: 0;
      margin-left: 1px;
    }

    li:hover {
      background-color: #95B4CA;
    }

    .parent li:hover {
      background-color: #F0F0F0;
    }

    .expand {
      font-size: 12px;
      float: right;
      margin-right: 5px;
    }
  </style>
</div>