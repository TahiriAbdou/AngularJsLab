 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Angular desu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="assets/fancybox/jquery.fancybox.css" media="screen">
    <link rel="stylesheet" href="assets/css/app.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body ng-app="relations">

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="./" class="navbar-brand">AngularJs Desu</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      </div>
    </div>


      <div id="main" class="container" ng-controller="RelationsController">
        <div class="row ">
            
            <h2 class="sub-header">My relations</h2>
            <div class="clearfix"></div><br>
            <div class="well clearfix">
                <ul class="list-unstyled">
                    <li ng-repeat="rel in relations">
                        <blockquote>
                            #{{$index}} - with <b>{{rel.fname}} {{rel.lname}}</b>
                            <footer>{{rel.description}}</footer>
                        </blockquote>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            
            <a href="#" class="pull-right btn btn-danger btn-xs" ng-click="show=!show">Add relation</a>
            <div class="clearfix"></div>
            <br>
            <div class="holder ng-hide" ng-show="show">
                <ng-include src="'app/views/relation_add_form.php'"></ng-include>
                <div class="clearfix"></div><br>
            </div>
        </div>
                  
          <br>
          <pre>log : {{log?log:'---'}}
          </pre>
          <button ng-click="bindme()">bindme</button>
        <div ng-bind-html="myHtml">
        </div>
      </div>


      <footer class="container">
        <div class="row">
          <div class="col-lg-12">
              <p>AngularJs &copy; <i> <a href="https://github.com/TahiriAbdou">Github</a></i></p>
          </div>
        </div>

      </footer>


    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/angular-route.min.js"></script>
    <script src="assets/fancybox/jquery.fancybox.pack.js"></script>
    <script src="assets/js/app.js"></script>
    
  </body>
</html>
