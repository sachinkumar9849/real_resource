<a id="button"></a>


<!-- mobile menu start  -->
<div class="side-bar">
    <header>
        <div class="close-btn">
            <i class="fa fa-times"></i>
        </div>
    </header>
    <div class="menu_mobile pt-3">



        <div class="item">
            <a class="sub-btn">
                About

                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="about.php" class="sub-item">Introduction</a>
                <a href="nepal_information.php" class="sub-item">Nepal Information</a>

                <a href="message_chairman.php" class="sub-item">Message from Chairman </a>
                <a href="team.php" class="sub-item">Meet the Team </a>

            </div>
        </div>
        <div class="item">
            <a class="sub-btn">
                Recruitment


                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="why-nepalese.php" class="sub-item">Why Nepalease</a>
                <a href="documents.php" class="sub-item">Required Documents</a>
                <a href="recruitment-procedure.php" class="sub-item">Recruitment Procedure</a>
                <a href="terms_conditions.php" class="sub-item">Terms & Conditions</a>


            </div>
        </div>
        <div class="item">
            <a class="sub-btn">
            International Marketing


                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="why-nepalese.php" class="sub-item">UK</a>
                <a href="documents.php" class="sub-item">Osaka</a>
                <a href="recruitment-procedure.php" class="sub-item">Nagoya</a>
                <a href="terms_conditions.php" class="sub-item">Tokyo</a>
                <a href="terms_conditions.php" class="sub-item">Malaysia</a>
                <a href="terms_conditions.php" class="sub-item">Dubai</a>
                <a href="terms_conditions.php" class="sub-item">Saudi Arabia</a>


            </div>
        </div>


    

        <div class="item"><a href="categories.php">Category</a></div>
        <div class="item"><a href="jobs.php"> Jobs</a></div>

        <div class="item"><a href="contact.php">Contact</a></div>


    </div>
</div>
<!-- mobile menu end  -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- <script src="js/jquery-1.12.4.min.js"></script> -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/slick-animation.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/font-awesom.js "></script>
<script src="js/typed.min.js"
    integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
    crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>

</html>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered d-flex align-items-center justify-content-center" role="document">
        <div class="booking_form modal-content ">
            <section class="p-0" id="booknow-page">
                <div class="container p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="book-now_form">
                                <div class="d-flex">
                                    <div class="form_left w-50 p-4">
                                        <div class="check-in-out flex-column">
                                            <div class="input-group_block pt-0">
                                                <label class="label_block  mt-0" for="check-in">Check-in</label>
                                                <input type="date" id="check-in" autocomplete="off"
                                                    class="date-picker input_block">
                                            </div>
                                            <div class="input-group_block">
                                                <label class="label_block" for="check-out">Check-out</label>
                                                <input type="date" id="check-out" autocomplete="off"
                                                    class="date-picker input_block">
                                            </div>
                                        </div>
                                        <div class="check-in-out">
                                            <div
                                                class="select_potion input-group_block check-in-out flex-column align-items-start ">
                                                <label class="label_block" for="room">Country</label>
                                                <select class="input_block slect_input">
                                                    <label class="label_block" for="exampleFormControlSelect1">Room
                                                        Type</label>
                                                    <option>Nepal</option>
                                                    <option>India</option>
                                                    <option>Bhutan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-group_block">
                                            <label class="label_block" for="Type code">Type code</label>
                                            <input type="text" id="Type code" autocomplete="off" class=" input_block">
                                        </div>
                                        <div class="check-in-out">
                                            <div
                                                class="select_potion input-group_block check-in-out flex-column align-items-start ">
                                                <label class="label_block" for="room">Destination </label>
                                                <select class="input_block slect_input">
                                                    <label class="label_block"
                                                        for="exampleFormControlSelect1">Destination</label>
                                                    <option>Nepal</option>
                                                    <option>Bali</option>
                                                    <option>India</option>
                                                    <option>Tibet</option>
                                                    <option>Bhutan</option>
                                                    <option>Dubai</option>
                                                    <option>Thailand</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form_right w-50 bg_blue p-4">
                                        <div class="other">
                                            <div class="input-group_block">
                                                <input type="text" class="input_block" placeholder="Name">
                                            </div>
                                            <div class="input-group_block">
                                                <input class="input_block" type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="other">
                                            <div class="input-group_block">
                                                <input type="text" class="input_block" placeholder="Address">
                                            </div>
                                            <div class="input-group_block">
                                                <input class="input_block" type="number" id="kids" min="0"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="other ">
                                            <div class="input-group_block">
                                                <textarea name="" id="" cols="30" rows="10" class="border-0"
                                                    placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="other">
                                            <div class="input-group_block  ">
                                                <button type="submit"
                                                    class="btn third bg_orang rounded-0 text-white py-2 w-100">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
</div>
</div>