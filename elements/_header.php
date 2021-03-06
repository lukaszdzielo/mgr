<header class="nav--primary sticky-top shadow-sm bg-primary" data-aos="fade-in">
    <div class="navbar navbar-expand-lg py-20 pt-lg-20 pb-lg-0">
        <div class="container">
            <a class="navbar-brand me-auto" href="./#">
                <img src="assets/img/logo.png" alt="#">
            </a>
            <div class="d-none d-sm-block me-20 me-lg-0">
                <a href="#" class="text-white ms-10"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="#" class="text-white ms-10"><i class="fab fa-twitter-square fa-2x"></i></a>
                <a href="#" class="text-white ms-10"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="#" class="text-white ms-10"><i class="fas fa-envelope-square fa-2x"></i></a>
            </div>
            <div class="d-none d-lg-inline-flex text-end text-white">
                <a href="#" class="ms-20 ms-xl-50">Call us on <strong>01234 567890</strong></a>
                <a href="#" class="ms-20 ms-xl-50">Email us <strong>info@loremipsum.co.uk</strong></a>
            </div>
            <!-- Button trigger modal -->
            <div class="d-lg-none ms-30">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="modal" data-bs-target="#header__nav--modal">
                    <div class="toggler-line bg-white"></div>
                    <div class="toggler-line bg-white"></div>
                    <div class="toggler-line bg-white"></div>
                    <div class="toggler-line bg-white"></div>
                </button>
            </div>
        </div>
    </div>
    <div class="navbar navbar-expand-lg p-0">
        <div class="container">
            <div id="header__nav" class="collapse navbar-collapse">
                <ul class="navbar-nav py-10 py-lg-0 w-100 justify-content-lg-end">
                    <?php include '_nav--primary.php' ?>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Modal -->
<div id="header__nav--modal" class="modal modal-right fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="navbar-toggler" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <div class="toggler-line bg-primary"></div>
                    <div class="toggler-line bg-primary"></div>
                    <div class="toggler-line bg-primary"></div>
                    <div class="toggler-line bg-primary"></div>
                </button>
            </div>
            <div class="modal-body">
                <div class="navbar">
                    <ul class="navbar-nav w-100">
                        <?php include '_nav--primary.php' ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>