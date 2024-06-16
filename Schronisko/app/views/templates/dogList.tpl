{if isset($dogs)}
    <div class='konik5'>
        {foreach $dogs as $dog}
            <div class='konik4'>
                <img class="image1" height="300px" width="600px" src="{$dog['img']}" />
                <form action="{$conf->action_url}DogEdit" method="post">
                    {if ($user->privilege == "admin") OR ($user->privilege == "moderator")}
                        <h2>ID: {$dog['idDog']}</h2>  
                    {/if}
                    <h2>{$dog['Name']}</h2> 
                    <h4>Lat: {$dog['Age']}</h4> 
                    <h4>Rodzaj Włosów: {$dog['Hair_Type']}</h4>
                    <h4>Rasa: {$dog['Breed']}</h4>
                    <h3>Zachowania:
                        {if isset($behaviors)}
                            {foreach $behaviors as $behavior}
                                {if isset($myBehaviors)}
                                    {foreach $myBehaviors as $myBehavior}
                                        {if $dog['idDog'] === $myBehavior['Dog_idDog']}
                                            {if $behavior['BehaviorID'] === $myBehavior['Behavioral_BehaviorID']}
                                                <li>{$behavior['Behavior types']}</li>
                                            {/if}
                                        {/if}
                                    {/foreach}
                                {/if}
                            {/foreach}
                        {/if}
                    </h3>
                    <input name="id" value="{$dog['idDog']}" hidden="true" />
                    {if ($user->privilege == "admin") OR ($user->privilege == "moderator")}
                        <input class="button1" type="submit" value="Podgląd" />
                    {/if}
                </form>
                {if ($user->privilege == "admin") OR ($user->privilege == "moderator")}
                    <button class="button1" onclick="abortion({$dog['idDog']})">Adopcja bądź zgon</button>
                {/if}
            </div>
        {/foreach}
        
        {* <form action="{$conf->action_url}DogRent" method="post">
            <input name="id" value="{$dog['idDog']}" hidden="true" />
            <input type="submit" value="Wypożycz" />
        </form> *}
    </div>
{/if}

{* paginacja *}
<div class="paggination">
    {$counter}
    {for $key=1 to $counter/2}
        <button class='button1' onclick="sendAjaxRequest({$key-1})">{$key}</button>
    {/for}  
</div>
