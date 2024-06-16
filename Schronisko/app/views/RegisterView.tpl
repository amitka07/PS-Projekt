{extends file="main.tpl"}
{block name=content}
    <form action="{$conf->action_url}register" method="post" class="pure-form pure-form-aligned bottom-margin">
        <h1>Rejestracja do systemu</h1>
        <fieldset>
            <div class="pure-control-group">
                <label for="id_login">name: </label>
                <input id="id_login" type="text" name="name" />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">surname: </label>
                <input id="id_pass" type="text" name="surname" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">mail: </label>
                <input id="id_pass" type="text" name="mail" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">password: </label>
                <input id="id_pass" type="password" name="pass" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">password repeat: </label>
                <input id="id_pass" type="password" name="pass2" /><br />
            </div>
            <div class="pure-controls">
                <input type="submit" value="zarejestruj" class="pure-button pure-button-primary" />
            </div>
        </fieldset>
    </form>
    <a href="{$conf->action_url}login">Masz już konto? zaloguj się!</a>

    {include file='messages.tpl'}

{/block}