<?php
function anahead_ustkismi($title){
    echo '<!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>'.$title.'</title>
    
        <link rel="stylesheet" href="css/proje.css">
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    </head>';
}

    function girisbas(){
        echo'
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kullanıcı Girişi</title>
        <link rel="stylesheet" href="css/giris.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    </head>';
    }


function kitapbas(){ 
echo'
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kitaplar</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/kitaplar1.css">
    </head>
    ';
}

function sairbas(){
    echo'
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Şairlerimiz</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="css/sairler1.css">
    </head>';
    }

    function anaorta_kismi(){
        echo'
        <body>
            <header>
                <div id="logo">ŞİİRHANE</div>
                <nav>
                    <ul>
                        <li>
                            <a href=""> En Sevilenler </a>
                                <ul>
                                    <li><a href="siir1.php">Ne Güzel Şey Hatırlamak Seni</a></li>
                                    <li><a href="siir2.php">Göğe Bakma Durağı</a></li>
                                    <li> <a href="siir3.php">Desem Ki </a></li>
                                </ul>
                        </li>
                    <a href="sairler.php"> Şairler </a>
                    <a href="kitaplar.php"> Kitaplar </a>
                    </ul>
                </nav>
                <a href="giris.php" id="menu-button"> Giriş Yap / Üye Ol </a>
            </header>
        ';
    }

    function anaicerik(){
        echo'
        <div id="icerik">
        <h1>
            Şiir Sayfamıza Hoşgeldiniz!
        </h1>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. A explicabo ea quo unde corrupti asperiores necessitatibus, cumque illum quidem pariatur aliquid totam eligendi dolor eveniet deleniti, earum recusandae impedit nobis.
        </p>
        </div>
        </body>
        </html>
        ';
    }
    function girisyap(){
        echo'
        <body>
            <div class="container">
                <h2>Kullanıcı Girişi</h2>
                <form action="login.php" method="post">
                    <label for="username">Kullanıcı Adı:</label>
                    <input type="text" id="username" name="username" required>
        
                    <label for="password">Şifre:</label>
                    <input type="password" id="password" name="password" required>
        
                    <button type="submit">Giriş Yap</button>
                </form>
            </div>
        </body>
        </html>';
        }

        function kitapadi(){
            session_start();
            require_once "functions.php";
            $baglanti = baglan();
            $sorgu = "SELECT * FROM kitaplar";
            $sonuc = mysqli_query($baglanti,$sorgu);
            echo"
            <body>
                <section id='kitaplar'>
                    <div class='container'>
                        <h3> Kitaplar </h3>
                            <div>
            ";
            if($sonuc){
                while($satir = mysqli_fetch_assoc($sonuc)){
                    echo
                    "
                    <div class='card'>
                        <img src='".$satir["kitap"]."' alt='' class='img-set'>
                    </div>
                    ";
                }
            }            
            echo"
                            </div>
                        </div>
                    </section>
                </body>
            </html>";
        }

        function sairadi(){
            session_start();
            require_once "functions.php";
            $baglanti = baglan();
            $sorgu = "SELECT * FROM sairler";
            $sonuc = mysqli_query($baglanti,$sorgu);
            echo"
            <body>
                <section id='sairler'>
                    <div class='container'>
                        <h3> Şairler </h3>
                            <div>
            ";
            if($sonuc){
                while($satir = mysqli_fetch_assoc($sonuc)){
                    echo
                    "
                    <div class='card'>
                        <img src='".$satir["resim"]."' alt='' class='img-set'>
                        <h5 class='baslikcard'>".$satir["baslik"]."</h5>
                        <p>".$satir["yazi"]." </p>
                        
                    </div>
                    ";
                }
            }            
            echo"
                            </div>
                        </div>
                    </section>
                </body>
            </html>";
        }
    
function siirbas($title){
    echo'
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$title.'</title>

    <link rel="stylesheet" href="css/siir1.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">

</head>';
}

function siir1(){
    echo'
    <body>
    <div id="siir">
        <h1>Ne Güzel Şey Hatırlamak Seni</h1>
        <p>
        Ne güzel şey hatırlamak seni:
        ölüm ve zafer haberleri içinden,
        hapiste
        ve yaşım kırkı geçmiş iken...

        Ne güzel şey hatırlamak seni:
        bir mavi kumaşın üstünde unutulmuş olan elin
        ve saçlarında
        vakur yumuşaklığı canımın içi İstanbul toprağının...
        İçimde ikinci bir insan gibidir
        seni sevmek saadeti...
        Parmakların ucunda kalan kokusu sarduya yaprağının,
        güneşli bir rahatlık
        ve etin daveti:
        kıpkızıl çizgilerle bölünmüş
        sıcak koyu bir karanlık...

        Ne güzel şey hatırlamak seni,
        yazamak sana dair,
        hapiste sırt üstü yatıp seni düşünmek:
        filanca gün, falanca yerde söylediğin söz,
        kendisi değil
        edasındaki dünya...

        Ne güzel şey hatırlamak seni.
        Sana tahtadan birşeyler oymalıyım yine:
        bir çekmece
        bir yüzük,
        ve üç metre kadar ince ipekli dokumalıyım.
        Ve hemen
        fırlayarak yerimden
        penceremde demirlere yapışarak
        hürriyetin sütbeyaz maviliğine
        sana yazdıklarımı bağıra bağıra okumalıyım...

        Ne güzel şey hatırlamak seni:
        ölüm ve zafer haberleri içinde,
        hapiste
        ve yaşım kırkı geçmiş iken...
        </p>
    </div>
    
</body>
</html>
    ';
}
function siir2(){
    echo' 
    <body>
    <div id="siir">
        <h1>Göğe Bakma Durağı</h1>
        <p>
            İkimiz birden sevinebiliriz göğe bakalım
            Şu kaçamak ışıklardan şu şeker kamışlarından
            Bebe dişlerinden güneşlerden yaban otlarından
            Durmadan harcadığım şu gözlerimi al kurtar
            Şu aranıp duran korkak ellerimi tut
            Bu evleri atla bu evleri de bunları da
            Göğe bakalım
            
            Falanca durağa şimdi geliriz göğe bakalım
            İnecek var deriz otobüs durur ineriz
            Bu karanlık böyle iyi afferin Tanrıya
            Herkes uyusun iyi oluyor hoşlanıyorum
            Hırsızlar polisler açlar toklar uyusun
            Herkes uyusun bir seni uyutmam bir de ben uyumam
            Herkes yokken biz oluruz biz uyumayalım
            Nasıl olsa sarhoşuz nasıl olsa öpüşürüz sokaklarda
            Beni bırak göğe bakalım
            
            Senin bu ellerinde ne var bilmiyorum göğe bakalım
            Tuttukça güçleniyorum kalabalık oluyorum
            Bu senin eski zaman gözlerin yalnız gibi ağaçlar gibi
            Sularım ısınsın diye bakıyorum ısınıyor
            Seni aldım bu sunturlu yere getirdim
            Sayısız penceren vardı bir bir kapattım
            Bana dönesin diye bir bir kapattım
            Şimdi otobüs gelir biner gideriz
            Dönmiyeceğimiz bir yer beğen başka türlüsü güç
            Bir ellerin bir ellerim yeter belliyelim yetsin
            Seni aldım bana ayırdım durma kendini hatırlat
            Durma kendini hatırlat.
        </p>
    </div>
    
</body>
</html> ';
}
function siir3(){
    echo '
    <body>
    <div id="siir">
        <h1>Desem Ki</h1>
        <p>
         Desem ki vakitlerden bir nisan akşamıdır
        Rüzgarların en ferahlatıcısı senden esiyor
        Sende seyrediyorum denizlerin en mavisini
        Ormanların en kuytusunu sende görmekteyim
        Senden kopardım çiçeklerin en solmazını
        Toprakların en bereketlisini sende sürdüm
        Sende tattım yemişlerin cümlesini
        Desem ki sen benim için,
        Hava kadar lazım,
        Ekmek kadar mübarek,
        Su gibi aziz bir şeysin;
        Nimettensin, nimettensin.
        Desem ki...
        İnan bana sevgilim inan
        Evimde şenliksin, bahçemde bahar;
        Ve soframda en eski şarap.
        Ben sende yaşıyorum,
        Sen bende hüküm sürmektesin.
        Bırak ben söyleyeyim güzelliğini,
        Rüzgarla nehirlerle, kuşlarla beraber.
        Günlerden sonra bir gün,
        Şayet sesimi fark edemezsen
        Rüzgarların nehirlerin kuşların sesinden,
        Bil ki ölmüşüm.
        Fakat yine üzülme müsterih ol
        Kabirde böceklere ezberletirim güzelliğini
        Ve neden sonra
        Tekrar duyduğun gün sesimi gök kubbede
        Hatırla ki mahşer günüdür
        Ortalığa düşmüşüm seni arıyorum
        </p>
    </div>
    
</body>
</html>
    ';
}
?>