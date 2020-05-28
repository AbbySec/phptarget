<?php


namespace frontend\components;

use yii\base\Widget;

class IndexWidget extends Widget{

    public $info1 ;
    public $info2 ;
    public $info3 ;
    public $info4 ;
    public $info5 ;
    public $info6 ;
    public $info7 ;
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        echo "<div class=\"item\"><div class=\"carousel-caption\">
                            <div class=\"ms-hero-material-text-container\">
                                <header class=\"ms-hero-material-title animated slideInLeft animation-delay-5\">
                                    <h1 class=\"animated fadeInLeft animation-delay-15\">$this->info1</h1>
                                    <h2 class=\"animated fadeInLeft animation-delay-18\">$this->info2</h2>
                                </header>
                                <ul class=\"ms-hero-material-list\">
                                    <li class=\"\">
                                        <div class=\"ms-list-icon animated zoomInUp animation-delay-18\">
                            <span class=\"ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp\">
                              <i class=\"glyphicon glyphicon-book\"></i>
                            </span>
                                        </div>
                                        <div class=\"ms-list-text animated fadeInRight animation-delay-19\">$this->info3</div>
                                    </li>
                                    <li class=\"\">
                                        <div class=\"ms-list-icon animated zoomInUp animation-delay-20\">
                            <span class=\"ms-icon ms-icon-circle ms-icon-xlg color-royal shadow-3dp\">
                              <i class=\"glyphicon glyphicon-book\"></i>
                            </span>
                                        </div>
                                        <div class=\"ms-list-text animated fadeInRight animation-delay-21\">$this->info4</div>
                                    </li>
                                    <li class=\"\">
                                        <div class=\"ms-list-icon animated zoomInUp animation-delay-22\">
                            <span class=\"ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp\">
                              <i class=\"glyphicon glyphicon-book\"></i>
                            </span>
                                        </div>
                                        <div class=\"ms-list-text animated fadeInRight animation-delay-23\">$this->info5</div>
                                    </li>
                                </ul>
                                <div class=\"ms-hero-material-buttons text-right\">
                                    <div class=\"ms-hero-material-buttons text-right\">
                                        <a href=\"javascript:void(0);\" class=\"button button-highlight button-pill  animated fadeInLeft animation-delay-24 mr-2\"onclick=\"javascript:location.href='$this->info6'\">
                                            作品提交</a>
                                        <a href=\"#workin\" class=\"button button-highlight button-pill  btn-success btn-raised animated fadeInRight animation-delay-24\"onclick=\"javascript:location.href='$this->info7'\">
                                            作品赏析</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
    }

}?>