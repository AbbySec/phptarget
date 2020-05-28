<?php


namespace frontend\components;

use yii\base\Widget;
use yii\helpers\Url;

class DisWidget extends Widget{

    public $photo ;
    public $article;
    public $idea;
    public $movie;
    public $photoupload;
    public $articleupload;
    public $ideaupload;
    public $movieupload;

    public function init() {
        parent::init();
        $this->photo = Url::toRoute('photo/index');
        $this->article = Url::toRoute('article/index');
        $this->idea = Url::toRoute('idea/index');
        $this->movie = Url::toRoute('movie/index');
        $this->photoupload = Url::toRoute('photo/upload');
        $this->articleupload = Url::toRoute('article/upload');
        $this->ideaupload = Url::toRoute('idea/upload');
        $this->movieupload = Url::toRoute('movie/upload');

    }
    public function run()
    {
        echo "<div class=\"container mt-4\" id=\"workin\">
    <h2 class=\"text-center color-primary mb-2 wow fadeInDown animation-delay-4 view-works-1\">
        作品欣赏
    </h2>
    <p class=\"lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4 view-works-1\">
        <span class=\"color-primary\">欢迎来到作品欣赏处，您可以在这里选择您想看的作品，也可以提交您想参赛的作品！</span>
    </p>

    <div class=\"ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4 view-works-1\">
        <div class=\"text-center card-block\">
                    <span class=\"ms-icon ms-icon-circle ms-icon-xxlg color-info\">
                    <i class=\"glyphicon glyphicon-camera\"></i>
                    </span>
            <h4 class=\"color-info\">摄影</h4>
            <p>摄影作品</p>
            <a href=\"$this->photo\" class=\"btn btn-info btn-raised button1 view-works-2\">摄影作品
            </a>
            <a href=\"$this->photoupload\" class=\"btn btn-info btn-raised button1 button1 view-works-2\">
                作品提交
            </a>
        </div>
    </div>
    <div class=\"ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-8 view-works-1\">
        <div class=\"text-center card-block\">
                    <span class=\"ms-icon ms-icon-circle ms-icon-xxlg color-warning\">
                    <i class=\"glyphicon glyphicon-align-center\"></i>
                    </span>
            <h4 class=\"color-warning\">网文</h4>
            <p>网络文章</p>
            <a href=\"$this->article\" class=\"btn btn-warning btn-raised button1 view-works-2\" >网文作品
            </a>
            <a href=\"$this->articleupload\" class=\"btn btn-warning btn-raised button1 button1 view-works-2\">作品提交
            </a>
        </div>
    </div>
    <div class=\"ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-10 view-works-1\">
        <div class=\"text-center card-block\">
                    <span class=\"ms-icon ms-icon-circle ms-icon-xxlg color-success\">
                    <i class=\"glyphicon glyphicon-phone\"></i>
                    </span>
            <h4 class=\"color-success\">创意</h4>
            <p>公益广告&校园文化创意</p>
            <a href=\"$this->idea\" class=\"btn btn-success btn-raised button1 view-works-2\">创意作品
            </a>
            <a href=\"$this->ideaupload\" class=\"btn btn-success btn-raised button1 button1 view-works-2\">作品提交
            </a>
        </div>
    </div>
    <div class=\"ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-6 view-works-1\">
        <div class=\"text-center card-block\">
                    <span class=\"ms-icon ms-icon-circle ms-icon-xxlg  color-danger\">
                    <i class=\"glyphicon glyphicon-play\"></i>
                    </span>
            <h4 class=\"color-danger\">微电影</h4>
            <p class=\"\">微电影作品</p>
            <a href=\"$this->movie\" class=\"btn btn-danger btn-raised button1 view-works-2\">微电影作品
            </a>
            <a href=\"$this->movieupload\" class=\"btn btn-danger btn-raised button1 button1 view-works-2\">
                作品提交
            </a>
        </div>
    </div>
</div>";
    }
}?>