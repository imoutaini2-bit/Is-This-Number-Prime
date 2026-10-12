<!DOCTYPE html>
<html lang="en">
<head>
    <title>Is This Number Prime</title>
</head>
<body>
    <?php
        function IsThisNumberPrime($angka){
            if ($angka <=1){
                return "$angka bukan bilangan prima, angkanya harus lebih dari 1!";
            }
            $i = 2;
            while (true){
                if ($i >= $angka){
                    return "$angka adalah bilangan prima";
                }else{
                    $sisa_bagi = $angka % $i;
                    if ($sisa_bagi != 0){
                        $i = $i + 1;
                    }else{
                        return "$angka bukan bilangan prima, karena bisa dibagi $i";
                    }
                }
            }
        }
        echo IsThisNumberPrime(5);
    ?>
</body>
</html>