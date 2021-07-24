<?php
    require './includes/common.php';
    $user_id = $_SESSION["id"];
    $item_id = filter_input(INPUT_GET, 'email');
    $query = "DELETE FROM user_items WHERE user_id = '$user_id' AND item_id = '$item_id'";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    header("location: cart.php");
?>
