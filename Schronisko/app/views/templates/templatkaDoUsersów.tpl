{extends file="main.tpl"}
{block name=content}
{include file='header.tpl'}
<h1>Users List</h1>
<table border = '10'>
{if isset($users)}
    {foreach $users as $result}
        <tr>
            <td>
                {$result['FirstName']}
            </td>
            <td>
                {$result['Surname']}
            </td>
            <td>
                {$result['Mail']}
            </td>
        </tr>
    {/foreach}
{/if}
</table>
{/block}