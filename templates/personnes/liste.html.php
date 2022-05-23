<h2 class="text-light text-center bg-info"><?= $titre ?></h2>
<div class="container">
    <table class="table table-hover">
        <tr class="bg-secondary">
            <th>N°</th>
            <th>Nom Complet</th>
            <th>Role</th>
            <th>Login</th>
            <th>Password</th>
            <th>Matricule</th>
            <th>Grade</th>
            <th>Sexe</th>
            <th>Adresse</th>
            <th class="text-center">Action</th>
        </tr>
        <?php
        $i = 1;
        foreach ($personnes as $personne) {?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$personne->nom_complet?></td>
                <td><?=$personne->role?></td>
                <td><?=$personne->login?></td>
                <td><?=$personne->password?></td>
                <td><?=$personne->matricule?></td>
                <td><?=$personne->grade?></td>
                <td><?=$personne->sexe?></td>
                <td><?=$personne->adresse?></td>
                <td class="text-center">
                    <button class="btn bg-warning btn-sm">Modifier</button>
                    <button class="btn bg-danger btn-sm">Supprimer</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>