<?php


namespace frontend\components;

use yii\base\Widget;


class WorkWidget extends Widget {
    public $url;
    public $content;
    public $editor;

    public function init() {
        parent::init();

    }
    public function run() {
        echo  "<div class=\"col-md-3\" onclick=\"javascript:location.href='$this->url'\">
                      <div class=\"card animated flipInX animation-delay-2\">
                        <blockquote class=\"blockquote-avatar withripple\">
                          <img src=\"./images/avatar.png\" alt=\"\" class=\"avatar hidden-xs\">
                            <p>$this->content</p>
                            <footer>$this->editor</footer>
                        </blockquote>
                      </div>
                    </div>";
    }
}?>