{extends file="main.tpl"}

{block name=content}
    {include file='header.tpl'}
    <div>
        <h1>Behaviors</h1>
        <div>
            {if isset($behaviors)}
                {foreach $behaviors as $behavior}
                    <form action="{$conf->action_url}BehaviorEdit" method="post">
                        <h3>id: {$behavior['BehaviorID']} name: {$behavior['Behavior types']}</h3>  
                        <input name="id" value="{$behavior['BehaviorID']}" hidden="true" />
                        {* <input type="submit" value="Edytuj" /> *}
                    </form>
                {/foreach}
            {/if}
        </div>
    </div>

    {include file='messages.tpl'}
{/block}