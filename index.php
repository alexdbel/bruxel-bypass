<?php include "includes/header.php" ?>

<div class="container">
    <h1 class="text-center">Bruxelles ByPass</h1>

    <?php
        $stores = [
            [
                "name" => "Action",
                "url" => "assets/img/logos/action-logo.png"
            ],
            [
                "name" => "Primark",
                "url" => "assets/img/logos/primark-logo.png"
            ],
            [
                "name" => "HM",
                "url" => "assets/img/logos/h&m-logo.png"
            ],
            [
                "name" => "Zeeman",
                "url" => "assets/img/logos/zeeman-logo.png"
            ],
        ];
    ?>

    <div class="item-container">
        <?php
            foreach($stores as $storeList => $store) { 
                include('includes/item-box.php');
            }
        ?>
    </div>
</div>

<?php include "includes/footer.php" ?>