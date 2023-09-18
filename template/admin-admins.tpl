{extends file="template/admin-dashboard.tpl"}
{block name="admins"}
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
        <tr>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">Admin ID</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">Admin USERNAME</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;"RIGHTS</th>
        </tr>
        </thead>
        <tbody>
        {foreach $admins as $admin}
            <tr>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$admin.id}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$admin.username}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$admin.bool_adm}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{/block}
