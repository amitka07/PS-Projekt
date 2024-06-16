{if isset($users)}
    {foreach $users as $result}
        <div>
            <div>
                {$result['FirstName']}
            </div>
            <div>
                {$result['Surname']}
            </div>
            <div>
                {$result['Mail']}
            </div>
            <form action="{$conf->action_url}personEdit" method="post"
                class="pure-form pure-form-aligned bottom-margin">
                <input name="id" value={$result['UserID']} hidden="true" />
                <input type="submit" value="Edytuj">
            </form>
            <form action="{$conf->action_url}personDelete" method="post"
                class="pure-form pure-form-aligned bottom-margin">
                <input name="id" value={$result['UserID']} hidden="true" />
                <input type="submit" value="Zbanuj">
            </form>
        </div>
    {/foreach}
{/if}

