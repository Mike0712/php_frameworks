<?php

$this->title = "Новость: {$article['title']}";

?>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-4">
        <div class="left_sidebar">
            <div class="single_widget">
                <h2>Post of the month</h2>
                <ul class="post_nav">
                    <li>
                        <figure class="effect-lily"><a href="single_page.html"><img src="../images/270x150x4.jpg" alt=""></a>
                            <figcaption><a href="single_page.html">It’s Now An Android World- Feel The Power</a></figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="effect-lily"><a href="single_page.html"><img src="../images/270x150x4.jpg" alt=""></a>
                            <figcaption><a href="single_page.html">It’s Now An Android World- Feel The Power</a></figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="effect-lily"><a href="single_page.html"><img src="../images/270x150x4.jpg" alt=""></a>
                            <figcaption><a href="#">It’s Now An Android World- Feel The Power</a></figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="effect-lily"><a href="single_page.html"><img src="../images/270x150x4.jpg" alt=""></a>
                            <figcaption><a href="#">It’s Now An Android World- Feel The Power</a></figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="effect-lily"><a href="single_page.html"><img src="../images/270x150x4.jpg" alt=""></a>
                            <figcaption><a href="single_page.html">It’s Now An Android World- Feel The Power</a></figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="effect-lily"><a href="single_page.html"><img src="../images/270x150x4.jpg" alt=""></a>
                            <figcaption><a href="single_page.html">It’s Now An Android World- Feel The Power</a></figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
            <div class="single_widget">
                <h2>Popular Post</h2>
                <ul class="ppost_nav wow fadeInDown">
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-8">
        <div class="middle_content">
            <ol class="breadcrumb">
                <li><a href="../index.html">Home</a></li>
                <li><a href="#">Technology</a></li>
                <li class="active">Mobile</li>
            </ol>
            <div class="single_page_area">
                <h1><?php echo $article['title'] ?></h1>
                <div class="post_commentbox"><a href="#"><i class="fa fa-user"></i> Wpfreeware</a> <span><i class="fa fa-calendar"></i> 6:49 AM</span> <a href="#"><i class="fa fa-tags"></i> Technology</a></div>
                <div class="single_content">
                    <blockquote><?php echo $article['description'] ?></blockquote>
                    <div class="single_iteam">
                        <img src="<?php echo $article['image'] ?>">
                    </div>
                    <?php echo $article['content'] ?>
                    <?php $names = [] ?>
                    <?php foreach ($article->authors as $author): ?>
                        <?php $names[] = $author->first_name . ' ' . $author->last_name ?>
                    <?php endforeach; ?>
                    <h3>
                        <?php echo implode(', ', $names); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="social_link">
            <ul class="social_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
        <div class="related_post">
            <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
            <ul class="ppost_nav wow fadeInDown">
                <li>
                    <div class="media"><a href="single_page.html" class="media-left"><img alt="" src="../images/70x70.jpg"></a>
                        <div class="media-body"><a href="single_page.html" class="catg_title">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"><a href="single_page.html" class="media-left"><img alt="" src="../images/70x70.jpg"></a>
                        <div class="media-body"><a href="single_page.html" class="catg_title">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"><a href="single_page.html" class="media-left"><img alt="" src="../images/70x70.jpg"></a>
                        <div class="media-body"><a href="single_page.html" class="catg_title">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"><a href="single_page.html" class="media-left"><img alt="" src="../images/70x70.jpg"></a>
                        <div class="media-body"><a href="single_page.html" class="catg_title">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"><a href="single_page.html" class="media-left"><img alt="" src="../images/70x70.jpg"></a>
                        <div class="media-body"><a href="single_page.html" class="catg_title">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
                <li>
                    <div class="media"><a href="single_page.html" class="media-left"><img alt="" src="../images/70x70.jpg"></a>
                        <div class="media-body"><a href="single_page.html" class="catg_title">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <nav class="nav-growpop"><a class="prev" href="#"><span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
            <div><span>Previous Story</span>
                <h3>Child full of grace saviour of the human race</h3>
                <img src="http://lorempixel.com/100/100/" alt=""/></div>
        </a><a class="next" href="#"><span class="icon-wrap"><i class="fa fa-angle-right"></i></svg></span>
            <div><span>Next Story</span>
                <h3>Ancient rulage of grains and the trees of the night</h3>
                <img src="http://lorempixel.com/100/100/" alt=""/></div>
        </a></nav>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="right_sidebar">
            <div class="single_widget">
                <h2>Popular Post</h2>
                <ul class="ppost_nav wow fadeInDown">
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                            <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="single_widget">
                <ul class="nav nav-tabs custom-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Recent Post</a></li>
                    <li role="presentation" class=""><a href="#recentComent" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">Recent Comment</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="mostPopular">
                        <ul class="ppost_nav wow fadeInDown">
                            <li>
                                <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="recentComent">
                        <ul class="ppost_nav wow fadeInDown">
                            <li>
                                <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="single_page.html"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a class="media-left" href="#"><img src="../images/70x70.jpg" alt=""></a>
                                    <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single_widget">
                <h2>Categories</h2>
                <ul>
                    <li class="cat-item"><a href="#">Technology</a></li>
                    <li class="cat-item"><a href="#">Games</a></li>
                    <li class="cat-item"><a href="#">Business</a></li>
                    <li class="cat-item"><a href="#">Gallery</a></li>
                    <li class="cat-item"><a href="#">Slider</a></li>
                    <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                    <li class="cat-item"><a href="#">Sports</a></li>
                </ul>
            </div>
            <div class="single_widget">
                <h2>Category Archive</h2>
                <select class="catgArchive">
                    <option>Select Category</option>
                    <option>Life styles</option>
                    <option>Sports</option>
                    <option>Technology</option>
                    <option>Treads</option>
                </select>
            </div>
            <div class="single_widget">
                <h2>Links</h2>
                <ul>
                    <li><a href="#">Log in</a></li>
                    <li><a href="#">Entries RSS</a></li>
                    <li><a href="#">Comment RSS</a></li>
                    <li><a href="#">Wordpress.org</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

