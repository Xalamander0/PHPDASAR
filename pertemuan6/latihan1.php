<!DOCTYPE html>
<html>
<head>
    <title>latihan array</title>
    <style>
        .kotak {
width: 30px;
height: 30px;
background-color: #BADA55;
text-align: center;
line-height: 30px;
margin: 3px;
float: left;
animation: animasiKotak 2s ease infinite alternate forwards;
transition: 0.5s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        @keyframes animasiKotak{
            0%{
                width: 30px;
                height: 30px;
                background-color: #BADA55;   
            }
            25%{
                width: 30px;
                height: 30px;
                background-color: #ffffff;
            }
            50%{
                width: 60px;
                background-color: #000000;
            }
            100%{
                width: 100px;
                height: 100px;
                background-color: #BADA77;
            }
        }
        </style>
</head>
<body>

<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>
<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
    <div class="kotak"><?= $b; ?></div>
<?php endforeach; ?> 
<div class="clear"></div>
<?php endforeach; ?>




</body>
</html>