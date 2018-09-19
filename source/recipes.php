<?
$pageName = "Recipes";                     // Set the page header text here
include_once( "content/layout/header.php" );
?>

<?
$recipeList = LoadRecipeList();
?>

<!-- WEBPAGE CODE GOES HERE -->

<form method="post">
    <div class="view-list">
        <ul>
        <? foreach ( $recipeList as $index => $recipe ) { ?>

            <li>
                <a href="<?=$recipe['url']?>"><?=$recipe["name"]?></a>
                <ul>
                    <? foreach ( $recipe['ingredients'] as $ingredient ) { ?>
                    <li><?= $ingredient ?></li>
                    <? } ?>
                </ul>
            </li>
            
        <? } ?>
        </ul>
    </div>
</form>


<?
include_once( "content/layout/footer.php" );
?>
