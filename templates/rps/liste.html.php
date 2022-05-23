<h2 class="text-light text-center bg-info"><?= $titre ?></h2>
<div class="container">
    <table class="table table-hover">
        <tr class="bg-secondary">
            <th>N°</th>
            <th>Nom Complet</th>
            <th>Role</th>
            <th>Login</th>
            <th>Password</th>
            <th class="text-center">Action</th>
        </tr>
        <?php
        $i = 1;
        foreach ($rps as $rp) {?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$rp->nom_complet?></td>
                <td><?=$rp->role?></td>
                <td><?=$rp->login?></td>
                <td><?=$rp->password?></td>
                <td class="text-center">
                    <button class="btn bg-warning btn-sm">Modifier</button>
                    <button class="btn bg-danger btn-sm">Supprimer</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>