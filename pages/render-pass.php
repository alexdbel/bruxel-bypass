<?php include('../includes/header.php') ?>

<?php
// var_dump($_GET);
if (isset($_GET["store"])) {
    include('../includes/store-address.php');
    switch ($_GET["store"]) {
        case "Action":
            $selectedAddress = $actionAddress;
            renderForm();
            break;
        case "Primark":
            $selectedAddress = $primarkAddress;
            renderForm();
            break;
        case "HM":
            $selectedAddress = $hmAddress;
            renderForm();
            break;
        case "Zeeman":
            $selectedAddress = $zeemanAddress;
            renderForm();
            break;
        default:
            header('Location: ../');
    }
} ?>

<?php function renderForm() { ?>
    <div style="max-width: 50rem; margin: 0 auto" class="p-3">
        <h1 class="text-center"><?=$_GET["store"]?></h1>
        <form action="render-store" method="post">
            <input name="store" type="hidden" value=<?= $_GET["store"] ?> />
            <div>
                <label for="">Nom :</label>
                <input class="form-control w-100" name="firstname" placeholder="Votre nom">
            </div>
            <?php if ($_GET["store"] === "Primark") { ?>
                <div>
                    <label for="">Prénom :</label>
                    <input class="form-control w-100" name="lastname" placeholder="Votre prénom">
                </div>
            <?php } ?>
            <label for="">Magasin :</label>
            <div>
                <select name="address" class="w-100 custom-select">
                    <option selected>Choisir une adresse..</option>
                    <?php
                        global $selectedAddress;
                        foreach ($selectedAddress as $address) {
                            echo '<option value="' . $address . '">'. $address . '</option>';
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="">Heure :</label>
                <input type="time" class="form-control w-100" id="hour" name="hour" min="10:30" max="18:00" 
                value=<?php if (date("H:i") > "10:30" && date("H:i") < "18:00") {
                    echo date("H") . ':' . date("i");
                } else { echo '10:30'; }
                ?>>
            </div>
            <p style="text-align: center; font-style: oblique; opacity: 0.5">(cliquez sur l'icon de l'horloge pour modifier l'heure)</p>
            <p class="mt-3 mb-5 text-danger" style="font-weight: 900; text-decoration: underline; text-align: center; font-size: 20px">
                <?php 
                    switch ($_GET["store"]) {
                        case "Action":
                            $alertMessage = "10 minutes";
                            $alertMessage2 = "10:00 , 10:10 , 10:20 ...";
                            break;
                        case "Primark":
                            $alertMessage = "1 heure";
                            $alertMessage2 = "10:00 , 11:00 , 12:00 ...";
                            break;
                        case "HM":
                            $alertMessage = "30 minutes";
                            $alertMessage2 = "10:00 , 10:30 , 11:00 ...";
                            break;
                        case "Zeeman":
                            $alertMessage = "15 minutes";
                            $alertMessage2 = "10:00 , 10:15 , 10:30 ...";
                            break;
                    }
                    echo '/!\ Choississez uniquement les rendez-vous chaque ' . $alertMessage . ' /!\<br/>';
                    echo '/!\ ' . $alertMessage2 . ' /!\ ';
                ?>
            </p>
            <button class="btn btn-primary w-100">Generate</button>
        </form>
        <a href="../" class="mt-3 btn btn-danger w-100">Retour</a>
    </div>
<?php } ?>