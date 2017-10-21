<?php


namespace app\components;

use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class News extends Widget
{

    public $options = [];

    public $items = [];

    public $itemOptions = [];

    public $tag = '';

    public $itemTag = '';

    public $figure = false;

    public function init()
    {
        Html::addCssClass($this->options, ['widget' => 'news']);
    }

    public function run()

    {
        return $this->renderItems();
    }

    /**
     * Renders widget items.
     */
    public function renderItems()
    {
        $items = [];
        foreach ($this->items as $id => $item) {
            $items[] = $this->renderItem($item, $id);
        }
        return Html::tag($this->tag, implode("\n", $items), $this->options);
    }

    public function renderItem(array $item, $id)
    {
        if (is_string($item)) {
            return $item;
        }
        if (!isset($item['title'])) {
            throw new InvalidConfigException("The 'title' index is required.");
        }
        $options = ArrayHelper::getValue($this->itemOptions, 'wrapper', []);
        $aOptions = ArrayHelper::getValue($this->itemOptions, 'a', []);
        $link = "/{$this->itemOptions['link']}/{$id}";
        $src = $item['image'];
        $title = $item['title'];
        $content = Html::img($src) . Html::a($title, $link, $aOptions);
        $figure = '';
        if($this->figure){
            $figure = Html::tag('figure', Html::a(Html::img($src), $link, $aOptions), ['class' => 'featured_img']);

            $content = Html::tag('h2', Html::a($title, $link), ['class' => 'article_titile']);
            $content .= Html::tag('p', $item['description']);
        }

        return $figure . Html::tag($this->itemTag, $content, $options);
    }
}