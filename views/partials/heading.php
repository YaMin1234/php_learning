<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   form{
      display: inline-block;
   }
    .form-input{
          margin-bottom: 20px;
         }
         .form-input label{
            display:block;
            margin-bottom:10px;
         }
         .form-input input{
            display: block;
            width:100%;
            border-radius: 10px;
            padding:10px 15px;
            border:2px solid black;
        
         }
         .btn{
            border-radius: 10px;
            padding:10px 15px;
            border:2px solid #49beb7;
            background-color: #49beb7 ;
            margin-right:10px;
         }
         .updateBtn{
            border-radius: 10px;
            padding:10px 15px;
            border:2px solid green;
            background-color: green ;
            margin-right:10px;
         }
         .deleteBtn{
            border-radius: 10px;
            padding:10px 15px;
            border:2px solid red;
            background-color: red ;
            margin-right:10px;
         }
</style>
<body>

<?php require "views/components/Navbar.php" ?>