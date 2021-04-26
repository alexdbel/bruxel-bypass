<?php include('../includes/header.php') ?>

<?php
// var_dump($_POST);
if (isset($_POST["store"])) {
    switch ($_POST["store"]) {
        case "Action":
            action();
            break;
        case "Primark":
            primark();
            break;
        case "HM":
            hm();
            break;
        case "Zeeman":
            zeeman();
            break;
        default:
            header('Location: ../');
    }
}
?>

<?php
function dateToFrench($date, $format) {
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
}
?>

<?php
function action()
{ ?>
    <div style="max-width: 50rem; margin: 0 auto" class="p-3">
        <img src="https://bit.ly/3n7eI8y" alt="Action" />
        <p class="mt-3">Bonjour <?=$_POST["firstname"]?>,</p>
        <p>Votre rendez-vous chez Action a été accepté ! Malheureusement, il n'est pas possible de l'annuler ou de le modifier, même pas via le service client. Êtes-vous empêchés ? Réservez un nouveau créneau horaire.</p>
        <div style="font-size:16px">
            <p><b><?=$_POST["address"]?></b></p>
            <p><b><?=date("d-m-Y")?><br><?=$_POST["hour"]?> - <?=date('H:i', strtotime("+20 minutes", strtotime($_POST["hour"])))?></b></p>
        </div>

        <p>Afin de rendre les courses sur rendez-vous aussi agréables, fluides et sûres que possible pour vous et les clients, nous vous demandons de lire attentivement les informations ci-dessous:</p>
        <ul>
            <li>Le rendez-vous est pour 1 personne, si vous venez avec quelqu'un, il doit également prendre rendez-vous</li>
            <li>Présentez-vous à un employé 5 minutes avant votre rendez-vous pour faire vos courses </li>
            <li>Il existe une file d'attente précise pour Shopping sur rendez-vous, ne pas entrer dans la file d'attente de Click &amp; Collect</li>
            <li>Si vous êtes en retard, nous ne pouvons malheureusement plus vous admettre, merci de prendre un nouveau rendez-vous</li>
            <li>Emportez votre e-mail de confirmation avec vous, imprimé ou sur mobile</li>
            <li>Portez un masque facial et désinfectez vos mains</li>
            <li>Avez-vous des problèmes de santé liés au corona ? Restez à la maison, vous n'avez pas à annuler</li>
            <li>Vous avez 20 minutes pour faire vos courses sur rendez-vous. Assurez-vous que vous êtes à temps, afin que les autres clients aient le même temps pour faire ses courses sur rendez-vous.</li>
            <li>Gardez une distance d'au moins 1,5 mètre</li>
            <li>Un employé est disponible pour vos questions</li>
            <li>Lorsque le temps est écoulé, cela sera annoncé dans le magasin</li>
            <li>Payer à la caisse par carte bancaire ou avec votre mobile, en espèces ou par carte-cadeau est également possible</li>
            <li>Lors de cette visite en magasin, vous pouvez également échanger ou retourner des produits</li>
        </ul>
        <p>Nous sommes heureux de vous accueillir à nouveau dans l'un de nos magasins! <a href="#">Consultez notre gamme sur action.com</a> Vous avez des questions ? Lisez les questions fréquemment posées.</p>
    </div>
<?php }
?>

<?php
function primark()
{ ?>
    <div style="max-width: 50rem; margin: 0 auto" class="p-3">
        <img class="mb-3" style="width: 15rem" src="../assets/img/logos/primark-logo.png" alt="primark banner" />
        <p>
            Hi <?=$_POST["firstname"] . " " . $_POST["lastname"]?><br><br>Merci d'avoir fait votre réservation à Primark <?=strstr($_POST["address"], ',', true)?>.<br>Les détails de votre réservation sont les suivants:
        </p>

        <p style="margin-top: 0px; padding: 15px; line-height: 2; background-color: rgb(0, 175, 219); color: rgb(255, 255, 255);">
            Date : <?=dateToFrench($_POST["hour"], 'd F Y');?><br>
            Heure : <?=$_POST["hour"]?><br>
            Pour discuter : Shopping sur rendez-vous 1 personne<br>
            Lieu : Primark <?=$_POST["address"]?><br><br>
            Ref : 2IX02128
        </p>

        <p style="margin-top: 15px; font-family: Helvetica-Oblique; color: rgb(0, 0, 0); text-align: center;">
        </p>
        <p><strong>À savoir</strong> <br>Un rendez-vous de réservation est valable pour 1 personne.<br>Vous disposez de 50 minutes pour faire vos achats. Veuillez arriver 10 minutes à l'avance et attendre à l'entrée indiquée.<br>Les masques buccaux sont obligatoires dans tous nos magasins.<br>Prenez la confirmation du rendez-vous avec vous (imprimée ou sur votre téléphone).<br><br>Un maximum de 50 clients (y compris les enfants mineurs) peuvent prendre rendez-vous par créneau horaire. Chaque rendez-vous dure 50 minutes et est valable que pour une personne. Un rendez-vous supplémentaire doit être pris pour une personne supplémentaire, y compris les enfants. (Maximum 2 personnes ensemble)<br><br>Nous sommes ravis de vous voir à Primark <?=strstr($_POST["address"], ',', true)?>.</p>
        <p></p>

        <hr style="width: 100%; margin-top: 0px; margin-bottom: 20px; border-width: 1px 0px 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; border-top-style: solid; border-top-color: rgb(0, 175, 219);">

        <p style="margin-top: 0px; color: rgb(0, 0, 0);">
            Voulez-vous reporter ou annuler ce rendez-vous ? Visitez notre site: <a href="#">https://qdi.page.link/EiVgqs</a>
        </p>

    </div>
<?php }
?>

<?php
function hm() { ?>
    <div style="max-width: 50rem; margin: 0 auto">
        <tbody>
            <tr>
                <td>
                    <table width="400" align="center" style="width: 400px; color: rgb(69, 69, 69); font-size: 12px; border-collapse: collapse; background-color: rgb(255, 255, 255); "  cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td style="padding: 10px;"></td>
                            </tr>
                            <tr height="90" style="height: 90px;">
                                <td  height="90" style="height: 90px; text-align: center; padding: 10px 30px 0px;">
                                    <img tabindex="0" role="img" width="90" height="90" style="object-fit: contain; width: 90px; height: 90px; display: inline; margin: 0px;" src="../assets/img/logos/h&m-logo.png" alt="Logo">
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; padding: 20px 30px;">
                                    <div style=" color: rgb(69, 69, 69); font-size: 16px; margin: 0px; padding: 0px;" tabindex="0" role="heading">
                                        <p style="margin: 0px; color: rgb(37, 36, 36); font-size: 14px; padding: 0px;">Confirmed booking for</p>
                                        <p style="font-size: 24px; color: rgb(37, 36, 36); font-weight: bold; margin: 0px; padding: 0px;"><?=$_POST["firstname"]?></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table align="center" cellpadding="0" cellspacing="0" style="text-align: center; background-color: rgb(255, 255, 255); width: 100%; border-collapse: collapse;  color: rgb(69, 69, 69);">
                                        <tbody>
                                            <tr>
                                                <td align="center" style="text-align: center; padding: 0px 40px 24px;">
                                                    <div style=" color: rgb(37, 36, 36); font-size: 14px; margin: 0px; padding: 0px;">
                                                        <div style="font-size: 0px; height: 1px; margin: 0px; border-top: 1px solid rgb(243, 242, 241); width: 100%; line-height: 1px; padding: 0px;">
                                                            &nbsp;</div>
                                                        <p style="margin: 24px 0px 0px; padding: 0px;" tabindex="0" aria-label="H&amp;M - Uccle">H&amp;M - <?=strstr($_POST["address"], '(', true)?></p>
                                                        <p style="width: 40px; height: 30px; margin: 30px auto 0px; padding: 0px;"><img tabindex="0" role="img" width="28" height="30" style="width: 28px; height: 30px; display: inline; margin: 0px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAeCAYAAAA/xX6fAAAAAXNSR0IArs4c6QAABKNJREFUSA2tVn1oW1UUP+claUzb2dlaYV3ZCh1D6UbZJkzGVLahiOIcpNkQZpe2W8c+WhS7plP/CEysKdM/Wpis0qYyJ7ZJh6L4gYoTikOG3UpxozI3J6v9R4utzUv7kneP573kNmmXF5baB+Gee75+95x7zrlBSPtq6tteJaKXFVD2h4LtP6SJLMm99W1uQaITCU+E+gIfWSomBUq6AoM1AFE5ob43nZ+N1oXYTwRlAqE2m56Uocfb+hQpsMdZkH9y9t/oZQBaj4hnUaFeIdArFTOtTsUe0ESskwF3s803NrtyXI+J44TK+cFg+0+ZbOwCYAAErNR0OJWuwGDrOdoj6bzFtK7rQcAUl3RcTUBNCGIXc6tSkhRlpHSluVWjpYjwi0mbK5am1DJTBFhKhNcMKQFc00FP2lDCZwYzu+QJpNeLsOTAFPwTcOU5b6lz6pCUWa066i1s80JE+ftTQa5fSUS/YOCs3zwgH3HfFE1u5RSNqbPqVrayPOW8R4IdbDOGAkYI1M3Mf2heZkGkAE0FqmDgCgtdCzat4qhWWQjvYktAQsDYXdIlMLho8rKZmYBcaKPhvkB1NsV7lbm9vr/MErIwWND4FjrLyl52QG6tYb7TiNUp5R1ayXPmh4OBp7MZLQug56i/0B6fK49rwgE213ioxz9pBfq/AGu8bR5AcYxUdbsGYDNBdBXcdb4RAPygrLDsTFdX81w6+JIAa4+dLFFVMUAkdhozjav8Kjsd5QEe40G+jultQOLdiZnxo+5Dvj2D7wcSI5MFOReNp9FXFImIIX7KdjLAqB3tW8J9HZtK8iobnIWuVwb7Ak860LWWi+dz1lnH3f0jg84P8pwBhQY93GcPM9iHuNb1aH/wrWEjZZOxm/2zM1Ezko97/X+Ggx3Po6K08CC4H+PwSVNTp9PQywmwps63jcHcnMJb6HIdCfn9fHWJjzNbbjzecm+s4d6335GRTkTumE9dToB82gOmQ7Q1h874Z9KdW9F2zD8MiHF+xryGTk6ArL+DUzlT7Kj42jDO9PG9ofGTMiO9CHSJo6/2NPiLc6pSJE4bwM3u7sOWg57Tzn8iAGq8Pk43vcgFdYHr+AbTj4MeXW0CEmKxp761QZ5qwYo2LdTTfs7kIWpc9o4F8uSGX5tu7g/BbZKIDmkOFbiTFCdsFIeG7rrWaVZakcmJ5N23Ir/ofJd/mhv6Kkf5COa7Su71Dg0fCTva4HqwtMhuU2y1Qgg353g+7xJIrqTGHmB6GpG+4girMRp9iffvSXm21XOwbYuIC3768OK50yciliCZnOxrfKNSj2nXgTCKebAx1B34I5Oe5Hn8/jxxW/2ZM7hBQfCEgh3hnKq0v/vN37iwTxvNTBqEeOqskc4Xr8ZAp9/VXgOMo/rOADN0EgN3sXaWfdVrzRfhxkQ1g+4CHRuqNm2femzz7rErV741h0Bj41lH5caq50Qs/hm7eYJ78HpBge3ZkctDUcNtTimV5/AMDNjoy+FTAKLFqFquUI2773byf9Ea7sNC0zliGB1wkFM/JW2XBCiNzTuNa4e43p5hRxU83rj8aZzl3yto6wv1tl+SunL9D3tkzPJul8E3AAAAAElFTkSuQmCC" alt="Date and Time">
                                                        </p>
                                                        <p style="margin: 12px 0px 0px; padding: 0px;" tabindex="0"><?=date("l, F d, Y")?><br>
                                                            <span aria-label="11:00 AM - 11:30 AM" style="margin: 0px; padding: 0px;">
                                                            <?=date("g:i A", strtotime($_POST["hour"])) . ' - ' . date("g:i A", strtotime("+30 minutes", strtotime($_POST["hour"])))?></span>
                                                        </p>
                                                        <p style="font-size: 12px; color: rgb(96, 94, 92); margin: 4px 0px 0px; padding: 0px;" tabindex="0">(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna
                                                        </p>
                                                        <p style="width: 40px; height: 30px; margin: 30px auto 0px; padding: 0px;"><img tabindex="0" role="img" width="20" height="30" style="width: 20px; height: 30px; display: inline; margin: 0px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAeCAYAAAAsEj5rAAAAAXNSR0IArs4c6QAAAwpJREFUSA2dVV1IVEEUnjN3td1bD6ERvpRhEpQGSdBLEvTUQ1mgrggmtAY+1KuuSggbputmQRD1kLn7IBK7az8EEdRD+1AZlGBmUUYPQT8SJATpWq53Oufu3sv13rm75sDunHO+73wzd2bODDBJa+0Y2rg0/9MvhDiK8D78leVoc9hPAcADb0lpcvRS50IubnZgWmigADS1dZ3VBOtFd6sVk9g/OLC+RDRyDQcQBm4K+s+ENon04pgQ7LgBrqUHYPfBp7Ykr4d+E5/TXygU8mjp9Pj/ilEu5VAuaZCvC775nO5F5AgF1tUwV9fAZGgOnNuWEZlZwYR3XWK5JGCw5AHPLk+GLZ/EFXUXAxbnjN+lPBy0HjeuSTYwTYi06LvrZASKAePd47HBiAWPNwaCU7huA5aY1azDNYQKa8S0Ab5U7/AOmX7OqC5XI7iz3+zxrA8VHKe6WQaCEDO4c5od02MCZuxx8kmL45GUjwZQKUvSE4FJMdKiT34nS8TFr2xs626xY/7TPa14xFyWib31gMLjYmWFatbZhBZrCHTv5grL7rIm6jVNCzqJ2QhwJQHt7SF1/u/iJzw6xgXgxs8bxxqeKylWdyqTk6nlPTW1VIfH8mYUADlAcHSkfwLXkLHqct8IruX7AjnuMLCPVeW+YSKYt01joOsEbsQ99yx3BK8xfzJ2cXyVIDkNp4JPsTtI9pobwMvbscgBg69/sulwpdOw19oroHRZuasEk9HwBN6+d6yEfDZyHyaiA0+snFWCBCge3sMAMlaSzEYxTQHWY8ccgvHh8Cw+ETfsRLuPGzgWj0Ze2+MOQSL4itXzOAP9jbAn6D6wPxuUInrIHE1xRDAw/Sq1UFVTW4TVc1iG42BX49FwQoZJZ0hEb+mWy1RO9iQU+6WqvN8eN3zpDAmcfv5YWpL4dvTdGh58ZAjYe9cZEtFZkvC9pNh3xS5i9V1nSKRUKqXt3X/oK+5oM/mc847RmxdekO3W8s6QkhIjYarvZ/iOfKja7o26CRlxevUKNq6XpCjD96Tggf8HYQTysbd5fogAAAAASUVORK5CYII=" alt="Location">
                                                        </p>
                                                        <p style="margin: 12px 0px 0px; padding: 0px;" tabindex="0" aria-label="H&amp;M - Uccle (Chaussée d'Alsemberg 767, 1180 Uccle, Belgium)">
                                                            H&amp;M - <?=$_POST["address"]?> </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0px 40px;">
                                                    <div style="font-size: 0px; height: 1px; margin: 0px; border-top: 1px solid rgb(243, 242, 241); width: 100%; line-height: 1px; padding: 0px;">
                                                        &nbsp; </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 18px 30px 24px;">
                                                    <div style=" color: rgb(96, 94, 92); font-size: 14px; text-align: center; padding: 2px 0px; margin: 0px;">
                                                        <span style="margin: 0px; padding: 0px;">Have a conflict? </span>
                                                    </div>
                                                    <div style=" font-size: 14px; text-align: center; padding: 2px 0px; margin: 0px;">
                                                        <a href="#" target="_blank" style="color: rgb(0, 120, 212); text-decoration: none;">Change your appointment</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center; padding: 20px 30px 10px;  background-color: rgb(225, 223, 221); color: rgb(96, 94, 92);">
                                                    <table style="width: 100%; border-collapse: collapse;  color: rgb(69, 69, 69);">
                                                        <tbody>
                                                            <tr>
                                                                <td style="vertical-align: top; text-align: center;">
                                                                    <div tabindex="0" style="margin: 0px; padding: 0px;">
                                                                        <div style="margin: 0px 10px; padding: 0px; line-height: 20px;">H&amp;M - <?=$_POST["address"]?></div>
                                                                        <div style="margin: 0px 10px; padding: 0px; line-height: 20px;">H&amp;M - <?=$_POST["address"]?></div>
                                                                        <div style="margin: 0px 10px; padding: 0px; line-height: 20px;">0800 - 6655900 &nbsp;&nbsp; <a href="http://www.hm.com/" target="_blank" style="text-decoration: underline; color: rgb(69, 69, 69);">
                                                                                http://www.hm.com/</a> </div>
                                                                        <div style="margin: 0px 10px; padding: 0px; line-height: 20px;"><a href="#" target="_blank" style="text-decoration: underline; color: rgb(69, 69, 69);">Privacy Policy</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center; padding: 20px 30px;  background-color: rgb(225, 223, 221); color: rgb(151, 149, 147);">
                                                    <div style="margin: 0px; padding: 0px;" tabindex="0" aria-label="Powered by Microsoft Bookings">
                                                        Powered by Microsoft Bookings</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </div>
<?php }
?>

<?php
function zeeman() { ?>
    <div style="max-width: 50rem; margin: 0 auto;" class="p-3">
    <tbody><tr>
                <td align="center" valign="top">
                    <table cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td align="center" height="140px">
                                <img src="https://appointments.zeeman.com/logo.png" alt="" style="outline: none; text-decoration: none; display: block;">
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">

                                <h2>Cher/Chère <?=$_POST["firstname"]?>,</h2>
                                <br>
                                Voici la confirmation de votre rendez-vous.<br>
                                <br>
                                <b>Date: </b><?=date("d-n-Y")?><br>
                                <b>Heure: </b><?=date("h:i", strtotime($_POST["hour"])) . ' - ' . date('h:i', strtotime("+15 minutes", strtotime($_POST["hour"])))?><br>
                                <br>
                                <b>Filiale:</b> Brussel Etterbeek<br>
                                <br>
                                <b>Adresse:</b> <br>
                                Waversesteenweg 792<br>
                                Brussel Etterbeek 104<br>
                                <br>
                                Compte tenu des mesures actuelles, nous vous demandons de vous présenter au magasin exactement à l’heure indiquée. Venez seul et portez un masque. Si vous avez des symptômes grippaux, nous vous demandons de ne pas venir et d’annuler votre rendez-vous en appelant votre magasin.<br> 
                                <br>
                                À bientôt!<br>
                                <br>
                                Bien à vous,<br>
                                <br>
                                Brussel Etterbeek<br>
                                <br>
                                <a href="#">Annuler rendez-vous</a><br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                        <td align="center" height="140px">
                        
                        </td>
                    </tr>
                    </tbody></table>
                </td>
               </tr>
        </tbody>
    </div>
<?php }
?>