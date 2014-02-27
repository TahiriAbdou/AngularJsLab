
/*
$(function(){
       
    
   var nzData = 'app/views/search_contact.php';
 
   $.fancybox({
        width: 800,
        height: 315,
        autoSize: false,
        href: nzData,
        type: 'ajax'
    });
});

*/

var app = angular.module('relations',['ngRoute']);

app.controller('RelationsController',function($scope,$http,$sce,$compile){
    
    $scope.relation = {};
    
    //$scope.myHtml = $compile($sce.trustAsHtml("<br><span>{{relation}}</span>"))($scope);
    $scope.myHtml = $sce.trustAsHtml("<br><span>{{relation}}</span>");
    
    $scope.bindme = function(){
        alert('hello');
        $compile($scope.myHtml)($scope);
    }
    
    $scope.$watch('relation',function(){
        $scope.log= $scope.relation;
    });
    
    $http.get('app/controllers/relationsController.php').then(function(data){
        $scope.relations = data.data[0];
    });
    
});