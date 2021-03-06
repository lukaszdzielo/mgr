<?php include 'elements/_html_start.php' ?>

<?php include 'elements/_head.php' ?>

<?php include 'elements/_header.php' ?>

<section class="primary__banner--small py-50 py-lg-100" data-aos="fade-in">
    <div class="background bg-dark">
        <img src="assets/img/image--1.jpg" alt="#1" style="opacity:.3">
    </div><!-- /.background -->
    <div class="content position-relative text-white">
        <div class="container">
            <h1 class="text-white">Blog</h1>
        </div>
    </div><!-- /.content -->
</section>

<?php include 'elements/minibanner.php' ?>

<section class="py-50 py-lg-100 position-relative" data-aos="fade-in">
    <div class="section__background">
        <img src="assets/img/image--2.jpg" alt="#1" style="opacity:.1">
    </div>
    <div class="container position-relative">
        <div class="row g-30 g-lg-60">
            <div class="col">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-30 g-lg-60">
                    <div class="col">
                        <?php include 'elements/card__post.php' ?>
                    </div>
                    <div class="col">
                        <?php include 'elements/card__post.php' ?>
                    </div>
                    <div class="col">
                        <?php include 'elements/card__post.php' ?>
                    </div>
                    <div class="col">
                        <?php include 'elements/card__post.php' ?>
                    </div>
                </div>
                <nav aria-label="Page navigation example" class="mt-30 mt-lg-60">
                    <ul class="pagination justify-content-center m-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- <div class="col-lg-4">
                <aside class="bg-light p-20 rounded">
                    <div class="h3 m-0">Categories</div>
                    <hr>
                    <div class="d-grid gap-15">
                        <a class="btn btn-primary" href="#" role="button">Lorem ipsum dolor sit amet</a>
                        <a class="btn btn-primary" href="#" role="button">Lorem ipsum dolor sit amet</a>
                        <a class="btn btn-primary" href="#" role="button">Lorem ipsum dolor sit amet</a>
                    </div>
                </aside>
            </div> -->
        </div>
    </div><!-- /.container -->
</section>

<?php include 'elements/_footer.php' ?>
<?php include 'elements/_footer-scripts.php' ?>

<?php include 'elements/_html_end.php' ?>