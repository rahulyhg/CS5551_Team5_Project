<?

$groceryPath = "content/database/groceries.json";
$recipePath = "content/database/recipes.json";

function DisplayError( $message )
{
    echo( "<div class='backend-error'>" . $message . "</div>" );
}

function ReadJson( $path )
{
    $raw = file_get_contents( $path );
    $array = json_decode( $raw, true );
    return $array;
}

function WriteJson( $path, $array )
{
    $raw = json_encode( $array, JSON_PRETTY_PRINT );

    if ( file_put_contents( $path, $raw ) )
    {
        // Success
    }
    else
    {
        // Fail
        DisplayError( "Failed to save grocery list!" );
    }
}

function LoadGroceryList()
{
    global $groceryPath;
    return ReadJson( $groceryPath );
}

function SaveGroceryList( $newList )
{
    global $groceryPath;
    WriteJson( $groceryPath, $newList );
}

function LoadRecipeList()
{
    global $recipePath;
    return ReadJson( $recipePath );
}

function SaveRecipeList( $newList )
{
    global $recipePath;
    return WriteJson( $recipePath, $newList );
}

function RemoveFood( $index )
{
    $list = LoadGroceryList();
    array_splice( $list, $index, 1 );
    SaveGroceryList( $list );
}

function AddFood( $name )
{
    $list = LoadGroceryList();
    array_push( $list, array( "name" => $name ) );
    SaveGroceryList( $list );
}

function RemoveRecipe( $index )
{
    global $recipePath;
    $list = LoadRecipeList( $recipePath );
    $deletedItem = $list[$index];
    array_splice( $list, $index, 1 );
    SaveRecipeList( $list );
    echo( "<p>Removed recipe " . $deletedItem['name'] . "</p>" );
}

function UpdateRecipes()
{
    global $recipePath;
    $oldlist = LoadRecipeList( $recipePath );
    $list = $_POST["recipe"];
    
    foreach ( $list as $key => $recipe )
    {
        $list[$key]["ingredients"] = Ingredients_CommasToArray( $list[$key]["ingredients"] );
    }
    
    SaveRecipeList( $list );
    echo( "<p>Saved recipe updates</p>" );
}

function Ingredients_ArrayToCommas( $ingredients )
{
    return implode( ", ", $ingredients );
}

function Ingredients_CommasToArray( $ingredients )
{
    return explode( ",", $ingredients );
}

if ( isset( $_POST["add-new-food"] ) )
    AddFood( $_POST["new-food-name"] );

if ( isset( $_POST["remove-food-index"] ) )
    RemoveFood( $_POST["remove-food-index"] );

if ( isset( $_POST["remove-recipe"] ) )
    RemoveRecipe( $_POST["remove-recipe"] );

if ( isset( $_POST["update-recipe"] ) )
    UpdateRecipes();

?>
