<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
        #body{

            background-color: #121320;
        }
        .avatar {
            vertical-align: middle;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 10px auto;
            padding: 3px;
            /* border: 5px dashed rgb(220, 144, 22) ; */
            
          }
        
        .container{
        
            height: 100vh;
        
        }
        
        
        .card{
            border:none;
        }
        
        .form-control {
            border-bottom: 2px solid #eee !important;
            border: none;
            font-weight: 600
        }
        
        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #8bbafe;
            outline: 0;
            box-shadow: none;
            border-radius: 0px;
            border-bottom: 2px solid blue !important;
        }
        
        
        
        .inputbox {
            position: relative;
            margin-bottom: 20px;
            width: 100%
        }
        
        .inputbox span {
            position: absolute;
            top: 7px;
            left: 11px;
            transition: 0.5s
        }
        
        .inputbox i {
            position: absolute;
            top: 13px;
            right: 8px;
            transition: 0.5s;
            color: #3F51B5
        }
        
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0
        }
        
        .inputbox input:focus~span {
            transform: translateX(-0px) translateY(-15px);
            font-size: 12px
        }
        
        .inputbox input:valid~span {
            transform: translateX(-0px) translateY(-15px);
            font-size: 12px
        }
        
        .card-blue{
        
            background-color: #492bc4;
        }
        
        .hightlight{
        
            background-color: #5737d9;
            padding: 10px;
            border-radius: 10px;
            margin-top: 15px;
            font-size: 14px;
        }
        
        .yellow{
        
            color: #fdcc49; 
        }
        
        .decoration{
        
            text-decoration: none;
            font-size: 14px;
        }
        
        .btn-success {
            color: #fff;
            background-color: #492bc4;
            border-color:#492bc4;
        }
        
        .btn-success:hover {
            color: #fff;
            background-color:#492bc4;
            border-color: #492bc4;
        }
        
        
        .decoration:hover{
        
            text-decoration: none;
            color: #fdcc49; 
        }</style>
        <title>Fatima Nursery and Primary School</title>
        <meta charset="UTF-8">
        <meta name="description" content="WebUni Education Template">
        <meta name="keywords" content="webuni, education, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon --> 
        <link href="{{asset('img/favicon.png')}}" rel="shortcut icon"/>
        
        <livewire:styles />
        <livewire:dashboard.partials.css />

    
        
    </head>
    <body id="body" class="sb-nav-fixed">

        {{$slot}}

        
    </body>
    <livewire:scripts />
    <livewire:dashboard.partials.js />
</html>
