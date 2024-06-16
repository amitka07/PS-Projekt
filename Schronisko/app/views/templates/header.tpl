<div class=" pure-menu-horizontal bottom-marpure-menugin konik3">
    <a href="{$conf->action_url}" class="button2 pure-menu-heading pure-menu-link">Strona główna</a>
    <a href="{$conf->action_url}personEdit&id={$user->id}" class="button2 pure-menu-heading pure-menu-link" >Mój profil</a>
    {if ($user->privilege == "user")}
        {* <a href="{$conf->action_url}normalUsers" class="button2 pure-menu-heading pure-menu-link">prosze 3</a> *}
    {/if}
    {if ($user->privilege == "admin") OR ($user->privilege == "moderator")}
        <a href="{$conf->action_url}BehaviorShowAll" class="button2 pure-menu-heading pure-menu-link">behaviors</a>
        <a href="{$conf->action_url}BehaviorNew" class="button2 pure-menu-heading pure-menu-link">new behavior</a>
        <a href="{$conf->action_url}DogNew" class="button2 pure-menu-heading pure-menu-link">new dog</a>
        {* <a href="{$conf->action_url}" class="pure-menu-heading pure-menu-link">rents</a> *}
        <a href="{$conf->action_url}showTpl" class="button2 pure-menu-heading pure-menu-link">Change Behavior</a>
    {/if}
    {if ($user->privilege == "admin")}
    <a href="{$conf->action_url}personShowAll" class="button2 pure-menu-heading pure-menu-link">users</a>
    
    {/if}
    <a href="{$conf->action_url}logout" class="button2 pure-menu-heading pure-menu-link">wyloguj</a>
    {* <span  style="float:right;">użytkownik: {$user->login}, rola: {$user->privilege}</span> *}
</div>
{* <nav>
    <li><a href="{$conf->action_url}BehaviorShowAll">mainShowAll</a></li>
</nav> *}