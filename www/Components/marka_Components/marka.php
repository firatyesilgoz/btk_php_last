<head>
    <link rel="stylesheet" href="Components/marka_Components/_markas.css">
</head>
<div class="marka-container mt-5">
    <div class="our">
        <h1>MARKA</h1>
        <img src="img/<?php echo 'h2.png' ?>" class="h2e" alt="...">
        <p>İz Bırak, Fark Yarat!</p>
    </div>
    <div class="logo-container">
        <div class="marka-row">
            <div class="marka-logo-item marka-col-6 marka-col-md-4 marka-col-lg-2">
                <div class="imageFrame" id="markaList">
                    <img src="img/<?php echo 'marka.png' ?>">
                    <img src="img/<?php echo 'elseve.png' ?>">
                    <img src="img/<?php echo 'elidor.png' ?>">
                    <img src="img/<?php echo 'marka.png' ?>">
                    <img src="img/<?php echo 'elseve.png' ?>">
                    <img src="img/<?php echo 'elidor.png' ?>">
                    <img src="img/<?php echo 'marka.png' ?>">
                    <img src="img/<?php echo 'elseve.png' ?>">
                    <img src="img/<?php echo 'elidor.png' ?>">
                    <img src="img/<?php echo 'elseve.png' ?>">
                    <img src="img/<?php echo 'elidor.png' ?>">
                </div>
            </div>
        </div>
    </div>
    <button id="showMoreBtn" class="show-more-btn">Markaları Göster</button>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    var btn = document.getElementById("showMoreBtn");
    var markaList = document.getElementById("markaList");

    // Buton ilk başta 480px altında görünmeli
    function checkScreenWidth() {
        if (window.innerWidth <= 480) {
            markaList.style.display = "none";
            btn.style.display = "block";  // Butonu göster
        } else {
            markaList.style.display = "flex";
            btn.style.display = "none";   // Butonu gizle
        }
    }

    // Sayfa yüklendiğinde ekran genişliğini kontrol et
    checkScreenWidth();

    // Pencere boyutu değiştiğinde tekrar kontrol et
    window.addEventListener("resize", checkScreenWidth);

    btn.addEventListener("click", function () {
        if (markaList.style.display === "none" || markaList.style.display === "") {
            markaList.style.display = "flex";
            this.textContent = "Markaları Kapat";
        } else {
            markaList.style.display = "none";
            this.textContent = "Markaları Göster";
        }
    });
});
</script>