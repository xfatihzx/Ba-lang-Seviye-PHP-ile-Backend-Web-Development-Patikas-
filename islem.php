<?php

if (isset($_POST["number"])) {
    $number = $_POST["number"];

    if($number == "")
    {
        echo "form alanını boş Bırakmayın !"."<br>" . "<br>";
        echo "<strong>". " Yeniden Girişe Yönlendiriliyorsunuz " ."</strong>";
        header('Refresh:2 ; URL=index.php');
    }else{
        if ($number % 3 == 0) {
            echo "${number}, 3 ile tam bölünüyor";
            header('Refresh:2 ; URL=index.php');
        }else {
            $farkKontrol = $number;
            $farkKontrol++;
            while ($farkKontrol % 3 !== 0) {
                $farkKontrol++;
            }
            echo "${number} Sayısı 3 İle Tam Bölünemiyor ve Girdiğin Değere En Yakın 3 İle Tam Bölünen Sayı:
			${farkKontrol}";
            header('Refresh:10 ; URL=index.php');
        }
    }
}



?>