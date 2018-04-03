<?php
    include 'db_connect.php';
    $sql = "SELECT * FROM odakle";
    $result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">
<?php
    include 'head.php';
?>

<body class="bg-light">

    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h2>Checkout form</h2>

        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>

                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Naruci vozilo</h4>
                <form class="needs-validation" novalidate>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="odakle">Odakle:</label>
                            <select class="custom-select d-block w-100" id="odakle" required>
                            <option>Nis</option>
                            <option>Leskovac</option>
                            <option>Doljevac</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dokle">Dokle</label>
                            <select class="custom-select d-block w-100" id="dokle" required>
                            <option>Leskovac</option>
                            <option>Nis</option>
                            <option>Doljevac</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="address">Adresa</label>
                            <input type="text" class="form-control" id="address" placeholder="Vozdova 10" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                    </div>
                    <!--<hr class="mb-4">-->
                    <div class="row">
                        <!--<div class="col-md-6 mb-3">
                            <label for="time">Time</label>
                            <input type="time" class="form-control" id="time" value="12:30" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>-->
                        <div class="col-md-6 mb-3" id="vremeDiv">
                            <label for="vreme">Vreme</label>
                            <select class="custom-select d-block w-100" id="vreme" required>
                            <option>18h</option>
                            <option>19h</option>
                            <option>20h</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="vreme_check_box">Time</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="vreme_check_box" onchange=timeCheckFunction()>
                                <label class="custom-control-label" for="vreme_check_box">Birajte vreme sami</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="address">Broj sedista</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment">Komentar:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2018 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#">Privacy</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Terms</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Support</a>
                </li>
            </ul>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/holder.js"></script>
    <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';

                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');

                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
    </script>
    <script>

            function timeCheckFunction(){
                var timeCheckBox = document.getElementById('vreme_check_box').checked;
                var timeSelect = document.getElementById('vremeDiv')
                if(!timeCheckBox){
                    timeSelect.innerHTML = '<div class="col-md-6 mb-3" id="vremeDiv"><label for="vreme">Vreme</label><select class="custom-select d-block w-100" id="vreme" required><option>18h</option><option>19h</option><option>20h</option></select><div class="invalid-feedback">Please provide a valid state.</div></div>';
                }
                else{
                    timeSelect.innerHTML = '<div class="col-md-6 mb-3"><label for="time">Time</label><input type="time" class="form-control" id="time" value="12:30" required><div class="invalid-feedback">Please enter your shipping address.</div></div>';
                }
                
            }
            

    </script>
</body>

</html>