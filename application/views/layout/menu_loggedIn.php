<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="fa-solid fa-house"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <?php echo anchor('Logout', '<i class="fas fa-user-plus"></i> Logout', ['class' => 'nav-link']) ?>
            </li>
        </ul>

    </div>
</nav>
<?php
