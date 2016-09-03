<?php include('./inc/mail.php'); ?>

<?php include('./inc/header.php'); ?>

<section id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <h1 class="text-center">Kontakti</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 contacts-icons" align="center">
                <i class="glyphicon glyphicon-earphone"></i>
                <h2>Kontakttālrunis</h2><p>+371 29 101 900</p>
            </div>
            <div class="col-sm-6 col-md-4 contacts-icons" align="center">
                <i class="glyphicon glyphicon-envelope"></i>
                <h2>E-pasts</h2><p>info@mainark.lv</p>
                <!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ContactModal">Nosūtīt ziņu</button> -->
            </div>
            <div class="col-sm-6 col-md-4 contacts-icons" align="center">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <h2>Darba laiks</h2>
                <p><strong>Darba dienās</strong> - no 9:00 līdz 18:00<br><strong>Sestdienās, svētdienās</strong> - brīvs</p>
            </div>
            <div class="col-sm-6 col-md-4 contacts-icons" align="center">
                <i class="glyphicon glyphicon-map-marker"></i>
                <h2>Juridiskā adrese</h2>
                <p>Nogāzes iela 2B-47 <br> Ogre, Ogres nov., LV-5001</p>
            </div>
            <div class="col-sm-6 col-md-4 contacts-icons" align="center">
                <i class="glyphicon glyphicon-map-marker"></i>
                <h2>Faktiskā adrese</h2><p>Vienības gatve 20B <br> Rīga, LV-1004</p>
            </div>
            <div class="col-sm-6 col-md-4 contacts-icons" align="center">
                <i class="glyphicon glyphicon-list"></i>
                <h2>Rekvizīti</h2><p><strong>SIA Mainark</strong><br><strong>Reģ.nr.: </strong>LV50103657541<br><strong>A/S SWEDBANK kods: </strong>HABALV22<br><strong>Konts: </strong>LV03HABA0551036383790
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
                <h2 class="modal-title" align="center">Nosūtīt ziņu</h2>
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

