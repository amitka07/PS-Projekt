{extends file="main.tpl"}
{include file='header.tpl'}

{block name=content}
    {include file='header.tpl'}
    <div>
        <h1>Behavior Managment</h1>
        <form action="{$conf->action_url}NazwaAkcji" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="idPsa">
            <input name="idZachowania">
            <select name="dzialanie">
                <option value="insert">Insert</option>
                <option value="delete">Delete</option>
            </select>
            <input type="submit" value="Wyślij" />
        </form>
    </div>

    {include file='messages.tpl'}
{/block}