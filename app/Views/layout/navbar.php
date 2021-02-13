<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/">MyApps</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/pages/contact'); ?>">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Task
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= base_url('/agenda'); ?>">Agenda</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url('/pic'); ?>">PIC</a>
                </div>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Sandeza
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url('/corporate'); ?>">Corporate</a>
                    <a class="dropdown-item" href="<?= base_url('/division'); ?>">Division</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url('/sandeza'); ?>">List Migrate Sandeza</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav mr-1 mt-2 mt-lg-0">
            <?php if (logged_in()) : ?>
            <a class="btn btn-primary nav-link" href="<?= base_url('/logout'); ?>"><span
                    class="fas fa-sign-out-alt"></span>
                Logout</a>
            <?php else : ?>
            <a class="btn btn-primary nav-link" href="<?= base_url('/login'); ?>"><span
                    class="fas fa-sign-in-alt"></span>
                Login</a>
            <?php endif; ?>
        </ul>
    </div>
    </div>
</nav>