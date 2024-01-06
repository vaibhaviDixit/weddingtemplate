<nav class="my-2 mx-2 navbar navbar-expand-lg bg-transparent navbar-sticky fixed-top">
    <div class="container px-0 py-2">
        <a class="navbar-brand font-heading fw-bold ps-3 text-primary" href="<?php echo home(); ?>">
            <?= $config['APP_NAME'] ?>
        </a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarList"
            aria-controls="navbarList" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-1 fw-bold"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarList">
            <?php if (url() != route('login')) { ?>

                <ul class="navbar-nav ms-auto me-md-2 mb-2 mb-lg-0 d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#heroSection">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Bride & Groom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">RSVP</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Gallery</a>
                    </li>

                </ul>

            <?php } ?>
        </div>
    </div>
</nav>