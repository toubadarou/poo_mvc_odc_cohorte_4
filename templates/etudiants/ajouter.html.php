<h1 class="text-success bg-warning text-center">Formulaire d'ajout des étudiants</h1>
<div class="container">
    <form action="add-etudiant" method="post">
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" name="nomComplet" placeholder="Nom Complet">
            </div>
            <div class="col">
                <input type="email" class="form-control" name="login" placeholder="Login">
            </div>
            <div class="col">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="matricule" placeholder="Matricule">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="sexe" placeholder="Sexe">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="adresse" placeholder="Adresse">
            </div>
        </div>
        <input type="submit" value="Ajouter">
    </form>
</div>