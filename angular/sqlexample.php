<html ng-app="fetch">
   <head>
   <title>AngularJS GET request with PHP</title>
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>
   </head>

   <body>
   <br>
     <div class="row">
       <div class="container">
         <h1>Angular $http GET Ajax Call</h1>
         <div ng-controller="dbCtrl">
         <input type="text" ng-model="searchFilter" class="form-control">
           <table class="table table-hover">
               <thead>
                   <tr>
                       <th>username</th>
                       <th>email</th>
                   </tr>
               </thead>
               <tbody>
                   <tr ng-repeat="students in data | filter:searchFilter">
                       <!-- <td>{{students.Name}}</td> -->
                       <td>{{students.username}}</td>
                       <td>{{students.email}}</td>
                   </tr>
               </tbody>
           </table>
         </div>
       </div>
     </div>
   </body>

   <script>
       var fetch = angular.module('fetch', []);

       fetch.controller('dbCtrl', ['$scope', '$http', function ($scope, $http) {
           $http.get("/angular/ajax.php")
               .success(function(data){
                   $scope.data = data;
                   console.log(data);
               })
               .error(function() {
                   $scope.data = "error in fetching data";
               });
       }]);

   </script>

   </html>
