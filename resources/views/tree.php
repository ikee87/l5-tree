<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>L</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script src="/bower_components/angular/angular.min.js"></script>
    <script src="/bower_components/angular-tree-control/angular-tree-control.js"></script>

    <link rel="stylesheet" type="text/css" href="/bower_components/angular-tree-control/css/tree-control.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/angular-tree-control/css/tree-control-attribute.css">

    <style>
        body {
            font-family: 'Roboto';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
    <div class="container" ng-app="myApp" ng-controller="myCtrl">
        <h1>Resource</h1>
        <pre>{{ selectedNode }}</pre>
        <div treecontrol="" class="tree-classic" tree-model="treedata" on-selection="showSelected(node)">{{ node.name }}</div>
    </div>
<script !src="">
    var myApp = angular
            .module('myApp', ['treeControl'])
            .controller('myCtrl', ['$scope', '$http', function($scope, $http){
                $scope.showSelected = function(sel) {
                    $scope.selectedNode = sel;
                };
                $http({
                    method: 'GET',
                    url: '/category/tree'
                }).then(function successCallback(response) {
                    // this callback will be called asynchronously
                    // when the response is available
                    $scope.treedata = response.data;
                }, function errorCallback(response) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
            }]);
</script>
</body>
</html>

