<html ng-app="fetch">
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>
</head>
<body>

  <div class="ui comments">

    <h3 class="ui dividing header">Comments</h3>
    <div ng-controller="dbCtrl">
      <div class="comment" ng-repeat="students in data ">
        <div class="content">
          <a class="author">{{students.username}}</a>
          <div class="metadata">
            <span class="date">Today at 5:42PM</span>
          </div>
          <div class="text">
            {{students.email}}
          </div>
          <!-- <div class="actions">
            <a class="reply">Reply</a>
          </div> -->
          <br>
        </div>
      </div>
    </div>


      <form class="ui reply form">
        <div class="field">
          <textarea></textarea>
        </div>
        <div class="ui blue labeled submit icon button">
          <i class="icon edit"></i> Add Reply
        </div>
      </form>

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
