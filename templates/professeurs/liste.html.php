<h2 class="text-light text-center bg-info"><?= $titre ?></h2>

<div class="container">
    <table class="table table-hover">
        <tr class="bg-secondary">
            <th>N°</th>
            <th>Prénom</th>
            <th>Rôle</th>
            <th>Grade</th>
            <th class="text-center">Action</th>
        </tr>
        <?php
        $i = 1;
        foreach ($profs as $prof) {?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$prof->nom_complet?></td>
                <td><?=$prof->role?></td>
                <td><?=$prof->grade?></td>
                <td class="text-center">
                    <button class="btn bg-warning btn-sm">Modifier</button>
                    <button class="btn bg-danger btn-sm">Supprimer</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>