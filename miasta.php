<?php 
$zapytanie = $_GET['s'];

?>
<html>
<head>
 <meta charset="utf-8">
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
 </head>
 <body>
  Wybierz miasto:
  <div ng-app="myApp" ng-controller="customersCtrl">
  <select>
   <option ng-repeat="osoba in miasta track by $index" value="{{osoba.id}}">{{osoba.miasto}}</option>
  </select>
 </div>
 <script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
                $http.get("http://localhost/wyszukiwarka/szukaj.php?s=<?php echo $zapytanie ?>")
                .success(
                  function(data, status, headers, config){
                        $scope.miasta=data;
                });
        });
  </script>
 </body>
</html>