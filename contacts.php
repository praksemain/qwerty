<?php include('./inc/mail.php'); ?>

<?php include('./inc/header.php'); ?>

<section id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <h2 class="text-center">Kontakti</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 contacts-icons" align="center">
                <i class="glyphicon glyphicon-earphone"></i>
                <h3>Kontakttālrunis</h3><p>+371 29 101 900</p>
            </div>
            <div class="col-sm-6 col-md-3 contacts-icons" align="center">
                <i class="glyphicon glyphicon-envelope"></i>
                <h3>E-pasts</h3><p>info@mainark.lv</p>
                <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ContactModal">Nosūtīt ziņu</button> -->
            </div>
            <div class="col-sm-6 col-md-3 contacts-icons" align="center">
                <i class="glyphicon glyphicon-map-marker"></i>
                <h3>Adrese</h3><p><strong>Faktiskā:</strong><br>Vienības gatve 20B <br> Rīga, LV-1004</p>
                <p><strong>Juridiskā:</strong><br>Nogāzes iela 2B-47 <br> Ogre, Ogres nov., LV-5001</p>
            </div>
            <div class="col-sm-6 col-md-3 contacts-icons" align="center">
                <i class="glyphicon glyphicon-list"></i>
                <h3>Rekvizīti</h3><p><strong>SIA "Mainark"</strong><br><strong>Reģ.nr.: </strong>LV50103657541<br><strong>A/S SWEDBANK kods: </strong>HABALV22<br><strong>Konts: </strong>LV03HABA0551036383790
                </p>
            </div>
        </div>
    </div>

    <div id="map"></div>
</section>

<div id="ContactModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" align="center">Nosūtīt ziņu</h3>
            </div>
            <div class="modal-body">
                <form id="ContactForm" class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label class="col-sm-12">Vārds</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">E-pasts</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Kontakttālrunis</label>
                        <div class="col-sm-12">
                            <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Ziņa</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows=7" name="message" id="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12" align="right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Aizvērt</button>
                            <button type="submit" name="submit1"  class="btn btn-primary">Nosūtīt <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('./inc/footer.php'); ?>

