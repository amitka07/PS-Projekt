{extends file="main.tpl"}

{block name=content}

    {include file='header.tpl'}
    <div>
        <h1>{if $form->behaviorID}
                Behavior
            {else}
                New Behavior
            {/if}
        </h1>
        <form action="{$conf->action_url}BehaviorSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="behaviorID" value="{$form->behaviorID}" hidden="true" />
            <input name="behavior_type" value="{$form->behavior_type}" />
            <input type="submit" value="Zapisz" />
        </form>
    </div>

    {include file='messages.tpl'}
{/block}