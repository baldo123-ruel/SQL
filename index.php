<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
</head>
<body ng-app="myApp" ng-controller="myCtrl" >
    <div class="container">
         <div class="bg-header">
              <h2 id="title">Shopping</h2>
              <i id="menu2" class="material-icons-outlined"><a href="#menu1">menu</a></i>
              <form action="" method="get">
                  <h2 id="title">Shopping</h2>
                  
                  <input type="text"placeholder="Search items or store" name="" id="">
                  <button type="submit"><i class="material-icons-outlined">search</i></button>
                  <span class="material-icons-outlined">shopping_cart</span>
                  
                    <a href=""ng-click="my()">Signup</a>
                    <a href=""ng-click="myFunc()">Signin</a>
                 
              </form>
              
         </div>
         <div class="hide">
         <div class="lightbox" id="menu1">
            <a href="#"class="close">Close</a>
            <div ng-show="show">
            <h3>Pending to develop ⚠</h3>
           </div>
           <div class="content">
             <a href=""ng-click="my()">Signup</a><br><br>
             <a href=""ng-click="myFunc()">Signin</a>
           </div>
           </div>
        </div>
         <div ng-show="show">
             <h1 style="color: #373A36;position: absolute;margin-left: 40%;margin-top: 10%;">Pending to develop ⚠ </h1>
         </div>
         <div class="login"ng-show="showMe">
             
            <form class="form1"action="" method="post">
                
                 <h3>SHOPPING-LOGIN</h3>
                <div class="from-group">
                 <input type="email" placeholder="Enter Emailaddress" id="">
                </div>
                <div class="from-group">
                  <input type="password" placeholder="Enter Password" id="">
                 </div>
                 
                 <div class="from-group">
                    
                  <button type="submit">LOGIN</button><br>
    
                 </div>
                
                    <input id="check"type="checkbox">
                    <label for=""style="margin-left:-17%">I agree to the terms and conditions.</label>
                    
                
                 
            </form>
            <a href=""style="
            position: absolute;text-decoration:none;
            margin-left:55%;
            margin-top:30%;
            
            "><p style="color: #373A36">Forget password?</p></a>
            
        </div>
        
          
               <div class="imgani">
                    
                    
                    <span id="cart"class="material-icons-outlined">shopping_cart</span>
                    
               </div>
               
          
          <br>
          
          <div class="scroll">
            <h2>Discover</h2>
          <div class="displaypro">
                <img src="./image/img4.jpg" alt="">
                <p>Price : 100$</p>
          </div>
          
          <div class="displaypro">
                <img src="./image/img8.jpg" alt="">
                <p>Price : 100$</p>
         </div>
  
          <div class="displaypro">
                <img src="./image/img4.jpg" alt="">
                <p>Price : 100$</p>
         </div>
         <div class="displaypro">
            <img src="./image/img8.jpg" alt="">
            <p>Price : 100$</p>
     </div>

      <div class="displaypro">
            <img src="./image/img4.jpg" alt="">
            <p>Price : 100$</p>
     </div>
     <div class="displaypro">
        <img src="./image/img8.jpg" alt="">
        <p>Price : 100$</p>
    </div>

     <div class="displaypro">
        <img src="./image/img4.jpg" alt="">
        <p>Price : 100$</p>
    </div>
    <div class="displaypro">
       <img src="./image/img8.jpg" alt="">
       <p>Price : 100$</p>
    </div>

    <div class="displaypro">
       <img src="./image/img4.jpg" alt="">
       <p>Price : 100$</p>
    </div>
    <div class="displaypro">
       <img src="./image/img8.jpg" alt="">
       <p>Price : 100$</p>
    </div>

<div class="displaypro">
    <img src="./image/img4.jpg" alt="">
    <p>Price : 100$</p>
</div>
         </div>
   
         <footer>
             <div class="box">
                 <div class="block">
                   <i id="home"class="material-icons-outlined">home</i>
                   <a id=""href="">Home</a>
                </div>
             </div>
             <div class="box">
                <div class="block">
                  <i id="tags"class="material-icons-outlined">sell</i>
                  <a id=""href="">Tag</a>
               </div>
            </div>
            <div class="box">
                <div class="block">
                  <i id="store"class="material-icons-outlined">store</i>
                  <a id=""href=""> Store</a>
               </div>
            </div>
            <div class="box">
                <div class="block">
                  <i id="person"class="material-icons-outlined">person</i>
                  <a id=""href="">Me</a>
               </div>
            </div>
            <div class="user">
                <img src="./image/ruel.jpg" alt="">
                <p>Owner</p>
                <i></i>
            </div>
         </footer>
    </div>
    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.showMe = false;
            $scope.myFunc = function() {
                $scope.showMe = !$scope.showMe;
            }
            $scope.show = false;
            $scope.my = function() {
                $scope.show = !$scope.show;
            }
           
        });
        </script>
</body>
</html>
