var app = angular.module( "smartBhojanApp", [] );

app.controller( "groceryController", function( $scope, $http ) {
    $scope.initialize = function() {
        loadGroceries();
    }

    loadGroceries = function() {
        path = "content/database/groceries.json";

        //$http.get( path )
            //.then( function( data ) {
                //console.log( data );
            //} );
    }
} );
