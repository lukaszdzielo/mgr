<?php include 'elements/_html_start.php' ?>
<?php include 'elements/_head.php' ?>

<?php include 'elements/_header.php' ?>

<section class="primary__banner--small py-50 py-lg-100" data-aos="fade-in">
    <div class="background bg-dark">
        <img src="assets/img/image--1.jpg" alt="#1" style="opacity:.3">
    </div><!-- /.background -->
    <div class="content position-relative text-white">
        <div class="container">
            <h1 class="text-white">Contact</h1>
        </div>
    </div><!-- /.content -->
</section>

<?php include 'elements/minibanner.php' ?>

<section class="py-50 py-lg-100">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 g-30 g-lg-60">
            <div class="col-lg-6" data-aos="fade-right">
                <h2>Lorem ipsum dolor sit.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit optio error cum excepturi ullam, veritatis accusamus aliquid nostrum cupiditate illum odio temporibus, quo distinctio dolorum tenetur mollitia nesciunt asperiores eveniet? Eaque animi accusamus repellendus facilis! Repellendus, cupiditate qui! Porro aliquid numquam, earum expedita delectus repellendus dolore nemo. Nesciunt, minima nisi.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="h3">Contact form</div>
                <form>
                    <div class="row row-cols-1 row-cols-md-2 g-15">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Full name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Telephone</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelect">Services</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Type your message here..." id="floatingTextarea" style="height: 100px"></textarea>
                                <label for="floatingTextarea">Type your message here...</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 d-grid">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-check form-control-sm py-0 m-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">Don’t miss out! Please tick this box if you would like to receive future offers, promotions & news from B4B. Please see our Privacy Policy for full Ts & Cs.</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container -->
</section>

<section id="map" class="w-100" style="height:450px;"></section>

<?php include 'elements/_footer.php' ?>
<?php include 'elements/_footer-scripts.php' ?>
<script>
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var mapOptions = {
            zoom: 14,
            // disableDefaultUI: true, // all options
            // zoomControl: false, // zoom control
            // mapTypeControl: false, // map type
            // scaleControl: false, // scale
            // streetViewControl: false, // street view
            // rotateControl: false, // rotate
            fullscreenControl: false, // full screen control
            scrollwheel: false, // scroll wheel
            // disableDoubleClickZoom: true, // zoom on double click
            // draggable: false, // drag/move

            center: new google.maps.LatLng(51.500699, -0.124605), // coordinates centered
            styles: [],
        };
        // find map with ID
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        // add marker
        var marker1 = new google.maps.Marker({
            position: map.getCenter(),
            icon: {
                path: 'M0-20a7,7,0,0,0-7,7C-7-7.7,0,0,0,0S7-7.7,7-13A7,7,0,0,0,0-20Zm0,9.5A2.48,2.48,0,0,1-2.5-13,2.48,2.48,0,0,1,0-15.5,2.48,2.48,0,0,1,2.5-13,2.48,2.48,0,0,1,0-10.5Z',
                scale: 2,
                fillOpacity: 1,
                fillColor: '#ffffff',
                strokeOpacity: 0,
            },
            map: map,
        });
    }
</script>

<?php include 'elements/_html_end.php' ?>