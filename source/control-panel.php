<?
$pageName = "Control Panel";                     // Set the page header text here
include_once( "content/layout/header.php" );
?>

<?
$recipeList = LoadRecipeList();
?>

<!-- WEBPAGE CODE GOES HERE -->

<h2>Add Recipe</h2>

<form method="post">
    <table class="table">
        
            <tr><th>Name</th><td><input type="text" name="recipe[<?= sizeof($recipeList) ?>][name]" class="form-control"></td></tr>
            <tr><th>URL</th><td><input type="text" name="recipe[<?= sizeof($recipeList) ?>][url]" class="form-control"></td></tr>
            <tr><th>Ingredients</th><td><input type="text" name="recipe[<?= sizeof($recipeList) ?>][ingredients]" class="form-control"></td></tr>
            <tr><th>Commands</th><td><button type="submit" name="update-recipe" class="btn btn-success">Add</button></td></tr>
            <tr><td colspan="2" style="background:#ddd;"></td></tr>

            
        <? foreach ( $recipeList as $index => $recipe ) { ?>
            <tr><th>Name</th><td><input type="text" name="recipe[<?=$index?>][name]" value="<?=$recipe['name']?>" class="form-control"></td></tr>
            <tr><th>URL</th><td><input type="text" name="recipe[<?=$index?>][url]" value="<?=$recipe['url']?>" class="form-control"></td> </tr>
            <tr><th>Ingredients</th><td><input type="text" name="recipe[<?=$index?>][ingredients]" class="form-control" value="<?= Ingredients_ArrayToCommas( $recipe['ingredients'] ); ?>"></td></tr>
            <tr><th>Commands</th>
            <td>
                <p><button type="submit" class="btn btn-warning" name="update-recipe" value="<?=$index?>">Update</button></p>
                <p><button type="submit" class="btn btn-danger" name="remove-recipe" value="<?=$index?>">Remove</button></p>
            </td></tr>
            <tr><td colspan="2" style="background:#ddd;"></td></tr>
        <? } ?>


    </table>
</form>




<pre style="display:none;">
<? print_r( $_POST ); ?>
</pre>


<?
include_once( "content/layout/footer.php" );
?>
