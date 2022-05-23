<h2 class="text-light text-center bg-info"><?= $titre ?></h2>
<div class="container">
    <table class="table table-hover">
        <tr class="bg-secondary">
            <th>N°</th>
            <th>Prénom</th>
            <th>Role</th>
            <th>Login</th>
            <th>Password</th>
            <th class="text-center">Action</th>
        </tr>
        <?php
        $i = 1;
        foreach ($acs as $ac) {?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$ac->nom_complet?></td>
                <td><?=$ac->role?></td>
                <td><?=$ac->login?></td>
                <td><?=$ac->password?></td>
                <td class="text-center">
                    <button class="btn bg-warning btn-sm">Modifier</button>
                    <button class="btn bg-danger btn-sm">Supprimer</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>