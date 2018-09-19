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

if ( isset( $_POST["add-new-food"] ) )
    AddFood( $_POST["new-food-name"] );

if ( isset( $_POST["remove-food-index"] ) )
    RemoveFood( $_POST["remove-food-index"] );

?>
