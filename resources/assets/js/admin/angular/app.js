var appAccelaar = window.appAccelaar = angular.module('appAccelaar',['ngResource','ui.router','ui.bootstrap']);

appAccelaar.config(['$stateProvider','$urlRouterProvider',function($stateProvider,$urlRouterProvider){
  $urlRouterProvider.otherwise('/home');
  $stateProvider.state('home',{
    url:'/home',
    templateUrl:'/js/admin/templates/home.html',
    controller: 'homeController'
  })
    .state('internship_settings',{
      url:'/internship_settings',
      templateUrl:'/js/admin/templates/internship-settings.html',
      controller: 'homeInternshipController'
    })
}]);
