<?php
//views/homes/index.php
require_once 'helpers/Helper.php';
?>
<!--    Movies-->
<section id="main-container" class="main-container">
    <div class="slider movie-items">
        <div class="container">
            <div class="row">
                <div class="social-link">
                    <p>Follow us: </p>
                    <a href="#"><i class="ion-social-facebook"></i></a>
                    <a href="#"><i class="ion-social-twitter"></i></a>
                    <a href="#"><i class="ion-social-googleplus"></i></a>
                    <a href="#"><i class="ion-social-youtube"></i></a>
                </div>
                <div  class="slick-multiItemSlider">
                    <?php
                    $link = mysqli_connect("localhost", "root", "", "cinema");
                    mysqli_query($link,'set names utf8');
                    $sql = 'select * from `movies` where `movie_type` = 2 order by `id` DESC limit 12';
                    $query = mysqli_query($link, $sql);
                    while($result = mysqli_fetch_assoc($query)) {
                    ?>
                        <div class="movie-item">
                            <div class="mv-img">
                                <a href="#">
                                    <img src="assets/images/uploads/slider2.jpg" alt="" width="285" height="437">
                                </a>
                            </div>
                            <div class="title-in">
                                <div class="cate">
                                    <span class="yell"><a href="#">action</a></span>
                                </div>
                                <h6><a href="?mod=detail&film_id=<?php echo $result['id'] ?>" title="<?php echo $result['name'] ?>"><?php echo $result['name'] ?></a></h6>
                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="movie-item">
                        <div class="mv-img">
                            <a href="#">
                                <img src="assets/images/uploads/slider1.jpg" alt="" width="285" height="437">
                            </a>
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="blue"><a href="#">Sci-fi</a></span>
                            </div>
                            <h6><a href="#">Interstellar</a></h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="movie-items">
        <div class="container">
            <div class="row ipad-width">
                <div class="col-md-8">
                    <!--in theater-->
                    <div class="title-hd">
                        <h2>in theater</h2>
                        <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                    </div>
                    <div class="tabs">
                        <ul class="tab-links">
                            <li class="active"><a href="#tab1">#Popular</a></li>
                            <li><a href="#tab2"> #Coming soon</a></li>
                            <li><a href="#tab3">  #Top rated  </a></li>
                            <li><a href="#tab4"> #Most reviewed</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab4" class="tab">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/in theater-->


                    <!--on tv-->
                    <div class="title-hd">
                        <h2>on tv</h2>
                        <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                    </div>
                    <div class="tabs">
                        <ul class="tab-links-2">
                            <li><a href="#tab21">#Popular</a></li>
                            <li class="active"><a href="#tab22"> #Coming soon</a></li>
                            <li><a href="#tab23">  #Top rated  </a></li>
                            <li><a href="#tab24"> #Most reviewed</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab21" class="tab">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab22" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab23" class="tab">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab24" class="tab">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Interstellar</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The revenant</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">The walk</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="assets/images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">Die hard</a></h6>
                                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/on tv-->
                </div>
                <!--spotlight celebrities-->
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="ads">
                            <img src="assets/images/uploads/ads1.png" alt="" width="336" height="296">
                        </div>
                        <div class="celebrities">
                            <h4 class="sb-title">Spotlight Celebrities</h4>
                            <div class="celeb-item">
                                <a href="#"><img src="assets/images/uploads/ava1.jpg" alt="" width="70" height="70"></a>
                                <div class="celeb-author">
                                    <h6><a href="#">Samuel N. Jack</a></h6>
                                    <span>Actor</span>
                                </div>
                            </div>
                            <div class="celeb-item">
                                <a href="#"><img src="assets/images/uploads/ava2.jpg" alt="" width="70" height="70"></a>
                                <div class="celeb-author">
                                    <h6><a href="#">Benjamin Carroll</a></h6>
                                    <span>Actor</span>
                                </div>
                            </div>
                            <div class="celeb-item">
                                <a href="#"><img src="assets/images/uploads/ava3.jpg" alt="" width="70" height="70"></a>
                                <div class="celeb-author">
                                    <h6><a href="#">Beverly Griffin</a></h6>
                                    <span>Actor</span>
                                </div>
                            </div>
                            <div class="celeb-item">
                                <a href="#"><img src="assets/images/uploads/ava4.jpg" alt="" width="70" height="70"></a>
                                <div class="celeb-author">
                                    <h6><a href="#">Justin Weaver</a></h6>
                                    <span>Actor</span>
                                </div>
                            </div>
                            <a href="#" class="btn">See all celebrities<i class="ion-ios-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--/spotlight celebrities-->
            </div>
        </div>
    </div>
    <!-- latest new v1 section-->
</section>