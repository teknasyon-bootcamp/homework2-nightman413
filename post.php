<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */
require_once ("functions.php");

if(isset($id) == FALSE){ //eğer id yoksa id'yi 1 olarak alacak.
    $id = 1;
}

if(isset($type) == FALSE){ //eğer type yoksa type'ı "normal" olarak alacak.
    $type = "normal";
}

if(isset($title) == FALSE){ //eğer title yoksa title'ı "title yok" olarak alacak.
    $title = "title yok";
}

switch ($type) { //type'ın aldığı değere göre $color değişkeninin değeri belirleniyor.
    case "urgent":
        $color = "red";
        break;
    case "warning":
        $color = "yellow";
        break;
    case "normal":
        $color = "none";
        break;
}

echo "<div style=background-color:". $color .">";//post ekrana yazdırılıyor.
        getPostDetails($id, $title); 
echo "</div>";







