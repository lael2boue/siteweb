<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");

$_SESSION['send-single'] = "envoi-single.php";
?>


<!DOCTYPE html>
<html class="no-js">

<head>
    <?php
    //  FICHIER CSS ET JS
    require_once 'Inc/head.php';
    ?>
</head>

<body>
<?php
// BARRE DE NAVIGATION
include_once 'Inc/navbar.php';
?>
<div class="container-fluid">
    <div class="row-fluid">

        <?php
        //  MENU LATTERAL
        include_once 'Inc/sidebar.php';
        ?>
        <!--/span-->
        <div class="span9" id="content">

            <?php
            // REDUIRE / AGRANDIR
            include_once 'Inc/reduire.php';
            ?>

            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Envoyez vos sms ici</div>
                    </div>

                    <div class="block-content collapse in">
                        <div class="span12">
                            <form class="form-horizontal" method="get" action="authsms.php">
                                <fieldset>
                                    <legend class="text-center" style="color: #006dcc; font-weight: 600;">SMS-Notifier garantit la transmission de vos SMS</legend>
                                    
                                    <!-- NUMERO ET MESSAGES -->
                                    <div class="row">
                                        <div class="span8">
                                            <div class="control-group">
                                                <label class="control-label" for="date01">No Destinataire(s)</label>
                                                <div class="controls">
                                                    <textarea name="recipient"  class="input-xlarge textarea form-control" id="date01" style="width: 85%; height: 70px" placeholder="Ex : 22507001122,22505667788,22541223355,..."></textarea>
        <!--                                            <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>-->
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="textarea2">Message</label>
                                                <div class="controls">
                                                    <textarea name="message" class="input-xlarge textarea" placeholder="Entrer votre texte ..." style="width: 85%; height: 150px"></textarea>
                                                    <label style="margin-top: 10px;">Nombre de SMS : 1 &DoubleLongLeftRightArrow; Nombre de caractères : 56</label>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <!--<div class="clearfix"></div>-->
                                        
                                        <!-- CONTACT ET GROUPE DE CONTACT -->
                                        <div class="span4">
                                            <ul class="nav nav-tabs">
                                                <li class=""><a data-toggle="tab" href="#"></a></li>
                                                <li class="active"><a data-toggle="tab" href="#contact">Contacts</a></li>
                                                <li><a data-toggle="tab" href="#groupeContact">Groupe de contacts</a></li>
                                            </ul>

                                            <!-- CONTACTS -->
                                            <div class="tab-content">
                                                <div id="contact" class="tab-pane fade in active" style="height: 200px; overflow: auto;">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nom & Prénom</th>
                                                                <th>No Téléphone</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="checkbox" class="checkbox"></td>
                                                                <td>Boué Melaine</td>
                                                                <td>22577105410</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="checkbox"></td>
                                                                <td>Yao Sylvère</td>
                                                                <td>22507716971</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="checkbox"></td>
                                                                <td>Lael Deboue</td>
                                                                <td>22546367314</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="checkbox"></td>
                                                                <td>Boué Melaine</td>
                                                                <td>22577105410</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="checkbox"></td>
                                                                <td>Yao Sylvère</td>
                                                                <td>22507716971</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="checkbox"></td>
                                                                <td>Lael Deboue</td>
                                                                <td>22546367314</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>                                                
                                                </div>

                                                <!-- GROUPE DE CONTACT -->
                                                <div id="groupeContact" class="tab-pane fade">
                                                    <div id="contact" class="tab-pane fade in active" style="height: 200px; overflow: auto;">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Groupe</th>
                                                                    <th>Nombre de contact</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input type="checkbox" class="checkbox"></td>
                                                                    <td>Croix Rouge</td>
                                                                    <td>256</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="checkbox" class="checkbox"></td>
                                                                    <td>Honda</td>
                                                                    <td>1200</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="checkbox" class="checkbox"></td>
                                                                    <td>Coopérative</td>
                                                                    <td>872</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="checkbox" class="checkbox"></td>
                                                                    <td>Assurace</td>
                                                                    <td>28</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="checkbox" class="checkbox"></td>
                                                                    <td>Banque</td>
                                                                    <td>1021</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="checkbox" class="checkbox"></td>
                                                                    <td>Sport</td>
                                                                    <td>103</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>                                                
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="clearfix"></div>
                                    </div>    
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary bouton_envoyer_message">Envoyer SMS</button>
                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                                    
                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>


        </div>
    </div>
    <hr>
    <?php
        include 'Inc/footer.php';
    ?>
</div>
<!--/.fluid-container-->

<?php
//  FICHIER JS
include_once 'Inc/scriptJS.php';
?>

</body>

</html>


<?php
session_destroy();
?>
