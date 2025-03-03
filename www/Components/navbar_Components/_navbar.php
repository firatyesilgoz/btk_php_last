<head>
    <link rel="stylesheet" href="Components\navbar_Components\_navbarr.css">

</head>
<div class="navbar-container fixed-top">
<div class="navbar-row">
<nav class="navbar navbar-expand-lg  ">


<a class="navbar-brand " href="#">
    <img src="img/<?php echo 'logo.png' ?>" onclick="window.location.href='index.php';" width="300">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>



<div class="collapse navbar-collapse" id="navbarNavDropdown">
    
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php" >ANASAYFA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?hakkımızda" >HAKKIMIZDA</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php?hizmetler">HİZMETLER</a>

        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="contact.php?contact">İLETİŞİM</a>
        </li>

        
    </ul>
</div>
</nav>
</div>

</div>
<script>
    /*/ Sayfa kaydırma animasyonu
    $('a[href^="#"]').on('click', function (e) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            e.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000); // 1000 ms animasyon süresi
        }
    });*/
    
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Aynı sayfa içindeki tıklamalar için smooth scroll
        $('a[href^="#"]').on('click', function(e) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                e.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });

        // Başka sayfadan geldiğinde URL'deki query'yi kontrol et ve smooth scroll yap
        const urlParams = new URLSearchParams(window.location.search);
        const section = urlParams.keys().next().value; // ?hizmetler gibi anahtar alır
        if (section) {
            var target = $('#' + section);
            if (target.length) {
                // Sayfanın tamamen yüklenmesini bekle, sonra smooth scroll yap
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        }
    });
</script>

