<?
$pageName = "Grocery List";                     // Set the page header text here
include_once( "content/layout/header.php" );
?>

<?
$groceryList = LoadGroceryList();
?>

<!-- WEBPAGE CODE GOES HERE -->

<form method="post">
    <div class="view-list">
        <? foreach ( $groceryList as $index => $grocery ) { ?>

            <p> <button type="submit" name="remove-food-index" value="<?=$index?>">X</button> <?=$grocery["name"] ?> </p>
            
        <? } ?>
        
        <div class="add-new-item">
            <input type="text" placeholder="Food name" name="new-food-name">
            <button type="submit" name="add-new-food">Add</button>
        </div>

    </div>
</form>


<?
include_once( "content/layout/footer.php" );
?>

<pre>
<? print_r( $_POST ); ?>
</pre>
