{extends file="template/admin-dashboard.tpl"}
{block name="users"}
    <form action="index.php?action=removeUser" method="POST">
        <input type="number" name="id" placeholder="enter id to remove the user" required>
        <input type="submit" name="removeUserSubmit" value="Remove user">
    </form>
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
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$user.id}
                    <input type="hidden" name="userid" value="{$user.id}">
                </td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$user.username}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$user.emailadress}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">
                    <form method="post" action="index.php?action=changeadminstate">
                        <input type="number" pattern="[01]*"  value="{$user.bool_adm}" name="bool_adm_stateform" required>
                        <input type="hidden" value="{$user.id}" name="user_id_stateform">
                        <input type="submit" value="change" name="submit">
                    </form>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <br>
    <br>
{/block}
