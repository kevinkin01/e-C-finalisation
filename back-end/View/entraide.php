<div class="panel" data-x-pos="-1"  data-y-pos="0">
    <div class="headframe">
        <div class="head-l">
            <div class="socialg">
                <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social"><img src="View/img/facebookrond.png" alt="facebook"/></a></div>

            </div>
            <span class="panel__zoom1 js-zoom">
                    <div class="cercle1">
                       <div class="logo1"><img src= "View/img/logo-without.png" alt=""/></div>
                    </div>
                </span>
        </div>
        <div style="padding:20px;" class="formulaire">

        </div>
        <div class="head_T">
            <h1>entraide</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <nav class="main-nav">
            <ul>
                <li>
                           <span class="panel__nav panel__nav--right js-right">
                              <div class="smile"><img src="View/img/smile.png" alt="" width="31"/></div>
                              <div class="line">accueil</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right-top js-up js-right">
                              <div class="visit"><img src="View/img/visit.png" alt="" width="35"/></div>
                              <div class="line">presentation</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--up js-up">
                              <div class="whee"><img src="View/img/wheelses.png" alt="" width="32"/></div>
                              <div class="line">ancrage local</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__selected">
                              <div class="hands"><img src="View/img/hands.png" alt="" width="33"/></div>
                              <div class="line">entraide</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right jsleftb" onclick="text(event, 'Culture')">
                              <div class="glasses"><img src="View/img/glasses.png" alt="" width="34"/></div>
                              <div class="line">culture</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right moveP2xM1y">
                              <div class="arbo"><img src="View/img/arbo.png" alt="" width="33"/></div>
                              <div class="line">asbl mapping</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right-down js-down js-right">
                              <div class="location"><img src="View/img/location.png" alt="" width="33"/></div>
                              <div class="line">infos pratiques</div>
                           </span>
                </li>
            </ul>
        </nav>
    </div>
    <!---------------conteneur entraide------------------->
    <div id="conteneur">
        <div class=column_A>
            <div class=zoom>
                <div class="col-lg-1 padbot30 gallery_img lorem" id="grandephoto">
                    <a href="View/images/gallery/murs_512.jpg" data-gal="prettyPhoto[gal]">
                        <i></i>
                        <img src="View/images/gallery/murs_512.jpg" alt="" style="width: 100%;
    height: 100%;" /></a>
                </div>
            </div>

            <script type="text/javascript">
                function afficheGrandePhoto2(imageCliquee) {


                    /* je récupère dans l'attribut alt de l'image cliquée son nom */
                    console.log("afficheGrandePhoto2 : " + imageCliquee.alt);
                    /* URL de la vignette cliquée ? */
                    var URLvignette = imageCliquee.getAttribute("src");
                    console.log("URL de la photo cliquée : " + URLvignette);
                    /* Enlever dans l'URL de ma vignette le "128" et le remplacer par "512" pour avoir l'URL de la grande photo correspondante */

                    /* Modifier l'attribut src de la grande photo */
                    var grandePhoto = document.querySelector("#grandephoto2 img");
                    grandePhoto.setAttribute("src", URLvignette);
                    grandePhoto.setAttribute("alt", imageCliquee.alt);
                }
            </script>
            <div id="global">
                <section>


                </section>
                <section id="vignettes">
                    <ul>
                        <?php

                        foreach ($slider2 as $item1) {

                            ?>


                            <li><img src="<?=$item1['image'];?>" alt="" width="128" height="96" onclick="afficheGrandePhoto2(this);" /></li>
                        <?php } ?>


                    </ul>
                </section>
            </div>
            <div class="imagePara">
                <p>L’ASBL Entraide et Culture, créée en 1983 à Forest par des bénévoles, apporte une aide et un soutien à un public précarisé et fragilisé.</p>
            </div>
        </div>
        <div class=column_B>
            <div id="myDIVentraide"></div>
            <div class="tab">
                <button class="tablinks" onclick="texts(event, 'Entraide')">Entraide</button>
                <button class="tablinks" onclick="texts(event, 'SocialS')">Service social</button>
                <button class="tablinks" onclick="texts(event, 'AideAd')">Aide à domicile</button>
                <button class="tablinks" onclick="texts(event, 'AideA')">Aide alimentaire</button>
                <button class="tablinks" onclick="texts(event, 'VestiaireS')">Vestiaire social</button>

            </div>

            <div id="Entraide" class="tabcontent">
                <div class="titleParaPoleEntraide">Pôle</div>
                <h2><?php
                $take = $listView[2];
                echo $take->getThetitle();
                    ?></h2>
                <div class="paraEntraide">
                    <br>
                    <br>

                    <?php echo $take->getThetext();
                    ?>

                </div>
            </div>
            <div id="SocialS" class="tabcontent">
                <h2><?php
                    $take = $listView[12];
                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraEntraide">

                    <br>
                    <br>

                    <?php echo $take->getThetext();
                    ?>

                </div>
            </div>
            <div id="AideAd" class="tabcontent">
                <h2><?php
                    $take = $listView[3];
                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraEntraide">

                    <br>
                    <br>

                    <?php echo $take->getThetext();
                    ?>

                </div>
            </div>
            <div id="AideA" class="tabcontent">
                <h2><?php
                    $take = $listView[14];
                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraEntraide">

                    <br>
                    <br>
                    <?php echo $take->getThetext();
                    ?>
                </div>
            </div>
            <div id="VestiaireS" class="tabcontent">
                <h2><?php
                    $take = $listView[15];
                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraEntraide">

                    <br>
                    <br>
                    <?php echo $take->getThetext();
                    ?>
                </div>
            </div>

        </div>
    </div>
    <!---------------END conteneur entraide------------------->
</div>