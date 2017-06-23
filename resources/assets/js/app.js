var app = angular.module('app', []);

app.controller('mainCtrl', function($scope) {
  $scope.comments = [];
  $scope.customers = [
    { id: 1, name: 'Kobe' },
    { id: 2, name: 'Pui' },
    { id: 3, name: 'Query' }
  ];

  $scope.customer = {};
  $scope.comment = '';

  $scope.products = [
    { id: 1, name: 'GS Battery', price: 1200 },
    { id: 2, name: 'FB Battery', price: 1300 },
    { id: 3, name: '3K Battery', price: 1400 },
    { id: 4, name: 'Panasonic', price: 1500 }
  ];

  $scope.showCustomer = function($event) {
    $scope.customer = $scope.customers[0];
  }

  $scope.removeCustomer = function($event) {
    $scope.customer = null;
  }

  $scope.complete = function(string) {
    var output = [];
    angular.forEach($scope.customers, function(c) {
      if(c.name.toLowerCase().indexOf(string.toLowerCase()) >= 0) {
        output.push(c);
      }
    });

    $scope.filterCustomer = output;
  }

  $scope.fillTextbox = function(string) {
    console.log(string);
    $scope.customer.name = string;
    $scope.hidethis = true;
    console.log($scope.customer);
  }
});
