<!-- WIZARD ADD CLIENT -->

<div class="row addNewClient hidden">
    <div class="col-xs-12 getBack">
        <h3 class="btn-getFunctions" id=""><i class="fa fa-angle-left"></i> Back to functions</h3>
        <hr>
    </div>

    <br><br>
    <div class="col-xs-12 text-center">
        <p>
            <b>Ajouter un client :</b>
        </p>
    </div>
    <br><br>

    <!-- FORM -->
    <div class="col-sm-12  functionWizard">
        <form action="sub.php" method="post">
            <!-- NAME -->
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Client name" id="clientName" name="clientName">
                </div>
            </div>

            <!-- PRENOM -->
            <div class="form-group row">
                <label for="clientPrenom" class="col-sm-2 col-form-label">Prénom</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Client" id="clientPrenom" name="clientFisrtname">
                </div>
            </div>

            <!-- ENTREPRISE -->
            <div class="form-group row">
                <label for="clientEntreprise" class="col-sm-2 col-form-label">Entreprise</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Client entreprise" id="clientEntreprise">
                </div>
            </div>

            <!-- URL -->
            <div class="form-group row">
                <label for="clientUrl" class="col-sm-2 col-form-label">Site Web</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Client website" id="clientUrl">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-success" name="submit_client">
                </div>
            </div>
        </form>
    </div>
    <br>
</div>
