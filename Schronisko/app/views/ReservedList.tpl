{extends file="main.tpl"}

{block name=content}
    {include file='header.tpl'}
    <div>
        <h1>Reservejszons</h1>

        <div>
            {if isset($dogs)}
                {foreach $dogs as $dog}
                    <form action="{$conf->action_url}ApproveDog" method="post">
                        <div><img height="300px" width="300px" src="{$dog['img']}" />
                            <h2>{$dog['Name']} - {$dog['Age']}</h2>
                            <h3>Hair_Type: {$dog['Hair_Type']}</h3>
                            <h3>Breed: {$dog['Breed']}</h3>
                            <h3>Behaviors:
                                {if isset($behaviors)}
                                    {foreach $behaviors as $behavior}
                                        <li>{$behavior['Behavior Types']}</li>
                                    {/foreach}
                                {/if}
                            </h3>
                            <input name="id" value="{$dog['idDog']}" hidden="true" />
                            <input type="submit" value="Przyznaj pieska" />
                        </div>
                    </form>
                {/foreach}
            {/if}
        </div>
    </div>

    {include file='messages.tpl'}
{/block}