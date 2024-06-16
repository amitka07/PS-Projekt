{extends file="main.tpl"}

{block name=content}

    {include file='header.tpl'}
    <div>
        <h1>Dog</h1>

        <form action="{$conf->action_url}DogSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="id" value="{$form->dogID}" hidden="true" />
            <label for="name">Imię</label>
            <input name="name" value="{$form->dogName}" />
            <label for="age">Wiek</label>
            <input type="number" max="20" min="0" name="age" value="{$form->dogAge}" />
            <label for="breed">Rasa</label>
            <input name="breed" value="{$form->dogBreed}">
            <label for="color">Rodzaj sierści</label>
            <select name="hair_type">
                <option value="Włosy" {if $form->dogHairType == "Włosy"} selected="true" {/if}>Włosy</option>
                <option value="Śierść" {if $form->dogHairType == "Śierść"} selected="true" {/if}>Śierść</option>
            </select>
            <fieldset>
            <label for="color">Zachowania:</label>
                {if ($form->dogID == "")}
                    {foreach $behaviors->behaviors as $behavior}
                         {strip}
                             <label>
                                 <input type="checkbox" name="behaviors[]" value="{$behavior['BehaviorID']}" />

                                 {$behavior['Behavior types']}
                             </label>
                {/strip}
                    {/foreach}
                {else}
                    {foreach $behaviors as $behavior}
                        {strip}
                            <li>
                                {$behavior}
                            </li>
                        {/strip}
                    {/foreach}
                {/if}
            </fieldset>
            <label for="color">Zdjęcie - wklej link</label>
            <input name="img" value="{$form->dogImage}" />
            <input type="submit" value="Zapisz" />
        </form>
    </div>

    {include file='messages.tpl'}
{/block}