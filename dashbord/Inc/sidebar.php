<div class="span3" id="sidebar">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li <?php echo isset($_SESSION['dash']) ? 'class="active"':''; ?>>
            <a href="index.php"><i class="icon-chevron-right"></i> Tableau de bord</a>
        </li>
        <li <?php echo isset($_SESSION['send-single']) ? 'class="active"':''; ?>>
            <a href="envoi-single.php"><i class="icon-chevron-right"></i> Envoi SMS</a>
        </li>
        <li <?php echo isset($_SESSION['contact']) ? 'class="active"':''; ?>>
            <a href="my-contact.php"><i class="icon-chevron-right"></i> Mes contacts</a>
        </li>
        <li <?php echo isset($_SESSION['contactGroup']) ? 'class="active"':''; ?>>
            <a href="contact-group.php"><i class="icon-chevron-right"></i> Créer un groupe de contacts</a>
        </li>
        <li <?php echo isset($_SESSION['story']) ? 'class="active"':''; ?>>
            <a href="story-reload.php"><i class="icon-chevron-right"></i> Historique de réchargement</a>
        </li>

        <li <?php echo isset($_SESSION['report']) ? 'class="active"':''; ?>>
            <a href="reports.php"><i class="icon-chevron-right"></i> Rapport SMS</a>
        </li>
        <li <?php echo isset($_SESSION['editor']) ? 'class="active"':''; ?>>
            <a href="editor.php"><i class="icon-chevron-right"></i> Editer profile</a>
        </li>
        <li>
            <a href="logout.php"><i class=""></i> Déconnexion</a>
        </li>
<!--        <li>
            <a href="#"><span class="badge badge-success pull-right">731</span> Orders</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-success pull-right">812</span> Invoices</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-info pull-right">2,221</span> Messages</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
        </li>
        <li>
            <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
        </li>
-->    </ul>
</div>
