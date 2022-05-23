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
            <th>Sexe</th>
            <th>Adresse</th>
            <th class="text-center">Action</th>
        </tr>
        <?php
        $i = 1;
        foreach ($etudiants as $etudiant) {?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$etudiant->nom_complet?></td>
                <td><?=$etudiant->role?></td>
                <td><?=$etudiant->login?></td>
                <td><?=$etudiant->password?></td>
                <td><?=$etudiant->matricule?></td>
                <td><?=$etudiant->sexe?></td>
                <td><?=$etudiant->adresse?></td>
                <td class="text-center">
                    <button class="btn bg-warning btn-sm">Modifier</button>
                    <button class="btn bg-danger btn-sm">Supprimer</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>