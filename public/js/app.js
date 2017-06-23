var app = angular.module('app', ["xeditable"]);

app.run(function(editableOptions) {
  editableOptions.theme = 'bs3'; // bootstrap3 theme. Can be also 'bs2', 'default'
  editableOptions.activate = 'select';
});

app.controller('mainCtrl', function($scope) {
  $scope.comments = [];

  $scope.customers = [
    { id: 1, name: 'Kobe' },
    { id: 2, name: 'Pui' },
    { id: 3, name: 'Query' }
  ];

  $scope.customer = null;
  $scope.isCustomer = false;
  $scope.comment = '';

  $scope.showCustomer = function($event) {
    $scope.customer = $scope.customers[0];
  }

  $scope.removeCustomer = function($event) {
    $scope.isCustomer = false;
    $scope.customer = null;
  }

  //################## ฟังก์ชั่นแสดง autocomplete ของ customers ##################
  $scope.complete = function(string) {
    var output = [];
    $scope.hidethis = false;
    angular.forEach($scope.customers, function(c) {
      if(c.name.toLowerCase().indexOf(string.toLowerCase()) >= 0) {
        output.push(c)
      }
    });

    $scope.filterCustomer = output;
  }

  $scope.fillTextbox = function(string) {
    $scope.customer = string;
    $scope.hidethis = true;
    $scope.isCustomer = true;
  }

  $scope.orderList = [];
  $scope.products = [
    { id: 1, name: 'GS Battery', price: 1200 },
    { id: 2, name: 'FB Battery', price: 1300 },
    { id: 3, name: '3K Battery', price: 1400 },
    { id: 4, name: 'Panasonic', price: 1500 }
  ];
  $scope.isProduct = false;
  $scope.subTotal = 0;
  $scope.discount = 0;
  $scope.taxRate = 7;
  $scope.tax = 0;
  $scope.total = 0;

  //################## ฟังก์ชั่นแสดง autocomplete ของ products ##################
  $scope.completeProducts = function(string) {
    var output = [];
    $scope.hidethis = false;

    //ดึงรายการ product ทั้งหมดมาแสดงใน autocomplete
    angular.forEach($scope.products, function(product) {
      //filter เฉพาะรายการที่มีชื่อตามคำค้นหา
      if(product.name.toLowerCase().indexOf(string.toLowerCase()) >= 0) {
        output.push(product)
      }
    });

    //ใส่ข้อมูลจากากร filter ในตัวแปรสำหรับแสดงผลใน autocomplete
    $scope.filterProduct = output;
  }

  $scope.fillProductList = function(product) {
    let list = {
      product: product,
      qty: 1,
      disc: 0,
      amount: 0,
    };

    $scope.orderList.push(list);
    //ซ่อน autocomplete
    $scope.hidethis = true;
    //เคลียร์ค่าใน text searchProduct
    $('#searchProduct').val('');

    //คำนวณยอดเงินแต่ละรายการ
    $scope.calculateList(list);
  }

  $scope.calculateList = function(list) {
    //คำนวณยอดเงิน
    let tmpAmount = list.product.price * list.qty;
    //คำนวณยอดส่วนลด
    let tmpDiscount = (tmpAmount * list.disc) / 100;
    list.amount = tmpAmount - tmpDiscount;

    //คำนวณยอดเงินรวมของ Orders
    $scope.calculateOrder();
  }

  $scope.calculateOrder = function() {
    let tmpSubtotal = 0;
    angular.forEach($scope.orderList, function(key) {
      tmpSubtotal = tmpSubtotal + key.amount;
    });

    let tmpDiscount = (tmpSubtotal * $scope.discount) / 100;
    $scope.subTotal = tmpSubtotal;
    $scope.tax = ($scope.subTotal * 7) / 100;
    $scope.total = ($scope.subTotal + $scope.tax) - tmpDiscount;
  }

  $scope.selectText = function(form) {
    var input = form.$editables[0].inputEl;
    input.select();
  }

  $scope.updateQty = function(data) {
    $scope.orderList.qty = data;
  }

  $scope.updateDisc = function(data) {
    $scope.orderList.disc = data;
  }

  // ลบรายการ
  $scope.removeProductList = function(list) {
    let index = $scope.orderList.indexOf(list);
    $scope.orderList.splice(index, 1);
    $scope.calculateOrder();
  }
  // $scope.popover=null;
  // $scope.showEditable = function($event) {
  //   $scope.popover = $event.currentTarget;
  //   let target = $event.target;
  //   $($scope.popover).popover({
  //     html : true,
  //     title: function() {
  //       return $("#popover-head").html();
  //     },
  //     content: function() {
  //       return $("#popover-content").html();
  //     }
  //   });
  //
  //   $($scope.popover).popover("toggle");
  // }
  //
  // $scope.hideEditable = function($event) {
  //   let target = $event.target;
  //   $($scope.popover).popover("hide");
  //   $($scope.popover).on('hidden.bs.popover', function () {
  //     target.text('1');
  //   })
  //   $scope.popover=null;
  // }
});
