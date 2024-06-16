{block name=smietnik}


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>  
    
        {if isset($smietnik)}
        <table border = '15'>
            {foreach $smietnik as $smieci}
                {* wywolanie smietnika *}
                {* {foreach $smieci as $smietki} *}
                    {*wyswietlanie z tablicy tablic*}
                {* {$smietki}
                {/foreach} *}
                <tr>
                    <td>
                        {$smieci['idDog']}
                    </td>
                    <td>
                        {$smieci['Name']}
                    </td>
                    <td>
                        {$smieci['Breed']}
                    </td>
                    <td>
                        {$smieci['Age']}
                    </td>
                </tr>
            {/foreach}
            </table>
        {/if}
    </body>

    </html>
{/block}