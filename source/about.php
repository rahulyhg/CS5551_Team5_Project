<?
$pageName = "Grocery List";                     // Set the page header text here
include_once( "content/layout/header.php" );
?>

<?
$groceryList = LoadGroceryList();
?>

<!-- WEBPAGE CODE GOES HERE -->

<div class="row">
    <div class="col-md-6">
        <img src="content/graphics/team/team1.jpg" title="An image of Poonam, Tejaswi, Priyanka, and Rachel" class="fit-container">
    </div>
    <div class="col-md-6">
        <img src="content/graphics/team/team2.jpg" title="An image of Rachel, Priyanka, Tejaswi, and Poonam" class="fit-container">
    </div>
</div>

<h1>Team Pani Puri is...</h1>

<p>Poonam Kankariya, Priyanka Vinayak Gaikwad, Rachel Singh, Tejaswi Ayyadapu</p>

<?
include_once( "content/layout/footer.php" );
?>
