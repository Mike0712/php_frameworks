<?php

/* @var $this yii\web\View */

$this->title = 'Главная страница';

use \app\components\News;
?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="featured_slider">
            <h2 class="featured_title">Главная</h2>
                <?php echo News::widget([
                    'options' => ['class' => 'slick_slider'],
                    'tag'     => 'div',
                    'items'   => $news,
                    'itemTag' => 'div',
                    'itemOptions' => [
                                         'wrapper' => ['class' => 'single_iteam'],
                                         'a'       => ['class' => 'slider_tittle'],
                                         'link'    => 'article'
                                     ]
                ]) ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="left_sidebar">
                <div class="single_widget">
                    <h2>Новости месяца</h2>
                    <ul class="post_nav">
                        <li>
                            <figure class="effect-lily"><a href="pages/single_page.html"><img src="images/270x150x4.jpg" alt=""></a>
                                <figcaption><a href="pages/single_page.html">Заголовок новости</a></figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-8">
            <div class="middle_content">
                <h2>Свежие новости</h2>
                <?php echo News::widget([
                    'options' => ['class' => 'featured_nav'],
                    'tag'     => 'ul',
                    'items'   => $news,
                    'itemTag' => 'li',
                    'figure'  => 'true',
                    'itemOptions' => [
                        'wrapper' => ['class' => 'wow fadeInDown'],
                        'a'       => [],
                        'link'    => 'article'
                    ],
                ]) ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="right_sidebar">
                <div class="single_widget">
                    <h2>Популярные новости</h2>
                    <ul class="ppost_nav wow fadeInDown">

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

                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="recentComent">
                            <ul class="ppost_nav wow fadeInDown">
                                <li>
                                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                                        <div class="media-body"><a class="catg_title" href="pages/single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                                        <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                                        <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                                        <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                                        <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                                        <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                                        <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                                        <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                                        <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
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
</div>