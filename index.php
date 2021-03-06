<?php include 'elements/_html_start.php' ?>
<?php include 'elements/_head.php' ?>

<?php include 'elements/_header.php' ?>

<?php include 'elements/carousel--slider.php' ?>

<?php include 'elements/section--3boxes.php' ?>

<section class="py-50 py-lg-100 bg-primary position-relative" data-aos="fade-in">
    <div class="section__background">
        <img src="assets/img/image--1.jpg" alt="#1" style="opacity:.1">
    </div>
    <div class="container position-relative">
        <div class="row g-50 align-items-center">
            <div class="col-12 col-lg-4 text-white">
                <div class="h1 text-white">Contact form</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit optio error cum excepturi ullam, veritatis accusamus aliquid nostrum cupiditate illum odio temporibus.</p>
            </div>
            <div class="col">
                <form>
                    <div class="row g-15">
                        <div class="col-12 col-md-4 col-lg">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Full name</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Telephone</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg">
                            <div class="form-floating">
                                <input type="email" class="form-control " id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg d-grid">
                            <button type="submit" class="btn btn-light">Submit</button>
                        </div>
                        <div class="col-12">
                            <div class="form-check form-control-sm py-0 m-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                <label class="form-check-label text-white" for="flexCheckDefault">Don’t miss out! Please tick this box if you would like to receive future offers, promotions & news from B4B. Please see our Privacy Policy for full Ts & Cs.</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container -->
</section>

<?php include 'elements/half__img--left.php' ?>

<section class="py-50 py-lg-100 bg-primary position-relative" data-aos="fade-in">
    <div class="section__background">
        <img src="assets/img/image--2.jpg" alt="#1" style="opacity:.1">
    </div>
    <div class="container position-relative text-center">
        <div class="h1 text-white">Lorem ipsum dolor sit.</div>
        <div class="mt-50 text-white">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam inventore optio recusandae eligendi voluptatem quis sapiente ratione excepturi pariatur incidunt provident rem, illo temporibus, necessitatibus aspernatur quam consequuntur architecto sunt.
        </div>
        <div class="d-grid col-12 col-md-6 col-lg-4 mt-50 mx-auto text-center px-md-5 px-lg-20">
            <a href="#" class="btn btn-light">Contact</a>
        </div>
    </div><!-- /.container -->
</section>

<?php include 'elements/half__img--right.php' ?>

<?php include 'elements/casestudy--short.php' ?>
<?php include 'elements/news--short.php' ?>

<?php include 'elements/_footer.php' ?>
<?php include 'elements/_footer-scripts.php' ?>
<script>
    var swiper = new Swiper('#carousel--slider .swiper-container', {
        spaceBetween: 0,
        parallax: true,
        loop: true,
        effect: 'fade',
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
    });
    var swiper = new Swiper('#testimonials .swiper-container', {
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
        breakpoints: {
            768: {
                spaceBetween: 110,
            },
        },
    });
</script>

<?php include 'elements/_html_end.php' ?>