<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\assets\AppAsset;
use yii\web\View;

AppAsset::register($this);

// Регистрируем селектор для select2

$script = <<<JS

$('.search_by_ajax').select2({
  
  ajax: {
    url: '/site/search-news',
    dataType: 'json',
    data: function (params) {
      var query = {
        search: params.term,
        type: 'public',
        page: params.page,
      }
      return query;
    },
    processResults: function (data, params) {
      params.page = params.page || 1;  
      return {
        results: data.items,
        pagination: {
                        more: (params.page * 30) < data.total_count
                    }
        }            
      },
      cache: true
    },
    delay: 1500,
    placeholder: 'Поиск по сайту',
    escapeMarkup: function (markup) { return markup; },
    minimumInputLength: 1,
    templateResult: formatRepo,
    templateSelection: formatRepoSelection  
  });
function formatRepo (repo) {
  if (repo.loading) {
    return repo.text;
  }

  var markup = "<div class='select2-result-repository clearfix'>" +
      "<div class='select2-result-repository__meta'>" +
      "<div class='select2-result-repository__title'>" + repo.title + "</div>";
  if (repo.description) {
    markup += "<div class='select2-result-repository__description'>" + repo.title + "</div>";
  }

  markup += "<div class='select2-result-repository__statistics'>" +
      "</div>" +
      "</div></div>";

  return markup;
}

function formatRepoSelection (repo) {
  return repo.title || repo.text;
}

$('.search_by_ajax').on('change',function() {
    var articleId = $(this).children('.search_by_ajax option:selected').val();
    $(this).parent('form').attr('action', '/article/' + articleId);      
})

JS;

$this->registerJs($script, View::POS_END);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a></div>
            <div id="navbar" class="navbar-collapse collapse">
            <?php
            echo Nav::widget([
                'options' => ['class' => 'nav navbar-nav custom_nav'],
                'items' => [
                    ['label' => 'Главная', 'url' => ['/site/index']],
                    ['label' => 'Все новости', 'url' => ['/site/news']],
                    ['label' => 'Контакты', 'url' => ['/site/contact']],
                ],
            ]);
            ?>
            </div>
            <div class="search"><a class="search_icon" href="#"><i class="fa fa-search"></i></a>
            <form id="search_news">
                <select class="search_by_ajax search_bar" name="id" id=""></select>
                <input type="submit" value="Поиск">
            </form>
            </div>
        </div>
    </nav>
</header>
<section id="content">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="topadd_bar"></div>
        </div>
    </div>
    <?= $content ?>
</section>
<footer id="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm3">
                    <div class="footer_widget wow fadeInLeftBig">
                        <h2>Labels</h2>
                        <ul class="labels_nav">
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Slider</a></li>
                            <li><a href="#">Life &amp; Style</a></li>
                            <li><a href="#">Ver</a></li>
                            <li><a href="#">Sports</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm3">
                    <div class="footer_widget">
                        <h2>Popular Post</h2>
                        <ul class="ppost_nav wow fadeInLeftBig">
                            <li>
                                <div class="media"><a href="pages/single_page.html" class="media-left"><img alt="" src="images/70x70.jpg"></a>
                                    <div class="media-body"><a href="pages/single_page.html" class="catg_title">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a href="pages/single_page.html" class="media-left"><img alt="" src="images/70x70.jpg"></a>
                                    <div class="media-body"><a href="#" class="catg_title">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><a href="pages/single_page.html" class="media-left"><img alt="" src="images/70x70.jpg"></a>
                                    <div class="media-body"><a href="#" class="catg_title">Aliquam malesuada diam eget turpis varius</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm3">
                    <div class="footer_widget wow fadeInRightBig">
                        <h2>Flickr Images</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm3">
                    <div class="footer_widget wow fadeInRightBig">
                        <h2>Jetpack Subscription Widget</h2>
                        <form action="#" class="subscribe_form">
                            <p id="subscribe-text">We promise, we will only send you awesome stuff which will make your day!</p>
                            <p id="subscribe-email">
                                <input type="text" placeholder="Email Address" name="email">
                            </p>
                            <p id="subscribe-submit">
                                <input type="submit" value="Submit">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <p class="copyright"><?=date('Y-m-d') ?></p>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>