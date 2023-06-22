<!DOCTYPE html>
<html>
<head>
    <title>Liste des comptes</title>
</head>
<body>
    <h1>Liste des comptes</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Role ID</th>
            <th></th>
        </tr>
        <?php
        include_once('../controlleurs/Admin_controlleur.php');
        // Récupérer tous les éléments d'entretien
        $accounts = CategoryGestionnaire::getAllAccount();
        ?>

        <?php foreach ($accounts as $account){ ?>
        <tr>
            <td><?php echo $account['id']; ?></td>
            <td><?php echo $account['username']; ?></td>
            <td><?php echo $account['first_name']; ?></td>
            <td><?php echo $account['last_name']; ?></td>
            <td><?php echo $account['mail']; ?></td>
            <form action="Admin_controlleur.php?action=updateRoles&user_id=<?=$account['id']?>" method="post">
            <td>
            <?php
                foreach (CategoryGestionnaire::GetRoles() as $role){
                    if (CategoryGestionnaire::getUserRoles($account['id'], $role["id"]) ){
                    echo '<input type="checkbox" name="role'.$role["id"].'" id="role'.$account["id"].$role["id"].'" value="'.$role["id"].'" checked="yes"> <label for="role'.$account["id"].$role["id"].'">'.$role["title"] . "</label> ";
                    } else {
                    echo '<input type="checkbox" name="role'.$role["id"].'" id="role'.$account["id"].$role["id"].'" value="'.$role["id"].'"> <label for="role'.$account["id"].$role["id"].'">'.$role["title"] . "</label> ";
                    }
                }
            ?>    
            </td>
            <td><input type="submit" value="Mettre à jour"></td>
            </form>
            <td>
                <?php if($account['deleted']==0){?>
                <a href="Admin_controlleur.php?action=deleteCompte&id=<?=$account['id']?>">Supprimer</a>
                <?php } else{ ?>
                <a href="Admin_controlleur.php?action=restoreCompte&id=<?=$account['id']?>">Restaurer</a>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
