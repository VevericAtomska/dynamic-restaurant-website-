<div class="logo">
    <img src="<?= DIR_IMAGES . 'cipriani-logo.png' ?>" />
</div>

<div class="uvod">
    <h1 class="naslov">Dobrodošli u Cipriani restoran</h1>

    <div class="dobrodoslica">
        Prvi Cipriani restoran otvorio je svoja vrata u Švedskoj 1996.
        godine<br />
        sa vizijom da pomeša vrednosti koje povezuju istočne i zapadne
        civilizacije. <br />
        novativan meni zasnovan na internacionalnoj kuhinji, atmosfera
        šik
        <br />
        noćnog kluba i upečatljiv muzički ugođaj učinili su da Cipriani
        <br />
        ubrzo postane omiljeno mesto za sve one koji žele da budu
        viđeni.
        <br />
    </div>
</div>

<div class="galerija" >
    <img class="slika"
         src="https://media-cdn.tripadvisor.com/media/photo-m/1280/1d/4b/80/16/cipriani-saint-tropez.jpg">
    <img class="slika"
         src="https://media-cdn.tripadvisor.com/media/photo-m/1280/1d/4b/80/49/cipriani-saint-tropez.jpg">
    <img class="slika"
         src="https://media-cdn.tripadvisor.com/media/photo-m/1280/1d/4b/80/7b/cipriani-saint-tropez.jpg">
    <img class="slika"
         src="https://media-cdn.tripadvisor.com/media/photo-m/1280/1d/4b/80/bd/cipriani-saint-tropez.jpg">
</div>


<div id="overlay">
    <span class="zatvori" onclick="closeModal()">X</span>
    <div class="modal">
        <img id="lightbox"
             src="https://media-cdn.tripadvisor.com/media/photo-m/1280/1d/4b/80/bd/cipriani-saint-tropez.jpg">
    </div>
</div>
<script>
 <?= include  ( DIR_JS . 'slike.js' )?>
</script>


