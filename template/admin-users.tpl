{extends file="template/admin-dashboard.tpl"}
{block name="users"}
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
        <tr>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">USER ID</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">USER USERNAME</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">USER MAIL</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;"RIGHTS</th>
        </tr>
        </thead>
        <tbody>
        {foreach $users as $user}
            <tr>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$user.id}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$user.username}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$user.emailadress}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">
                    <form method="post" action="index.php?action=changeadminstate">
                        <input type="number" step="1"  value="{$user.bool_adm}" name="bool_adm_stateform" required>
                        <input type="hidden" value="{$user.id}" name="user_id_stateform">
                        <input type="submit" value="change" name="submit">
                    </form>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{/block}
