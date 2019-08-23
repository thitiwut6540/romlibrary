<?php
require_once('Connections/con_db.php');
include('function/function.php');


?>
<html lang="en">
<head>
	<?php include '_inc_header.php';?>
</head>
<body>
    <?php include 's_header.php';?>
    <div class="banner_img">
        <div></div>
    </div>
    <div class="container mt-3 mt-lg-5 mb-lg-5">
        <div class="row">
            <div class="col-12 text-center">
                <h5>Service</h5><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 mb-4">
                <a href="monster.php">
                    <div class="btn_service">
                        <div class="text"><i class="fab fa-optin-monster fa-4x fa-fw"></i><br>Monsters</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <a href="equipments.php">
                    <div class="btn_service">
                        <div class="text"><i class="fas fa-user-shield fa-4x fa-fw"></i><br>Equipments</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <a href="#">
                    <div class="btn_service">
                        <div class="text"><i class="far fa-file fa-4x fa-fw"></i><br>Cards</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <a href="#">
                    <div class="btn_service">
                    <div class="text"><i class="fas fa-boxes fa-4x fa-fw"></i><br>item</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <a href="#">
                    <div class="btn_service">
                        <div class="text"><i class="fas fa-cat fa-4x fa-fw"></i><br>Pets</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <a href="#">
                    <div class="btn_service">
                        <div class="text"><i class="fas fa-gopuram fa-4x fa-fw"></i><br>Endless-Tower</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <a href="#">
                    <div class="btn_service">
                        <div class="text"><i class="fas fa-share-alt fa-4x fa-fw"></i><br>Rune</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <a href="#">
                    <div class="btn_service">
                        <div class="text"><i class="fas fa-users fa-4x fa-fw"></i><br>Classes</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <a href="#">
                    <div class="btn_service">
                        <div class="text"><i class="fas fa-map-signs fa-4x fa-fw"></i><br>Maps</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <a href="#">
                    <div class="btn_service">
                        <div class="text"><i class="fab fa-fort-awesome fa-4x fa-fw"></i><br>Guild Dungeon</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <a href="#">
                    <div class="btn_service">
                        <div class="text"><i class="fab fa-cloudsmith fa-4x fa-fw"></i><br>Elementary</div>
                        <div class="overlay darkblue">
                            <div class="text"><i class="fas fa-search fa-4x fa-fw"></i></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="bg_contact border-top py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center"><h5>Premium Bootstrap Themes</h5></div>
                <div class="col-12 text-center"><span>Looking for something more? Try these hand picked premium themes!</span></div>
            </div>
        </div>
    </div>
    <div class="bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="#"><i class="fab fa-line fa-2x fa-fw text-white"></i></a>
                    <a href="#"><i class="fab fa-facebook-square fa-2x fa-fw text-white"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>