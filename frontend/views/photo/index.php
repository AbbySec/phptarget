<?php
/* @var $this yii\web\View */
use frontend\components\WorkWidget;
use frontend\components\DisWidget;
$this->registerCssFile('@web/css/style2.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/many.css',['depends'=>['frontend\assets\AppAsset']]);
?>
<div class="wrap wrap-danger" id="display-top" class="display-div1">
    <h2 class="text-center no-m">作品集</h2>
    <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--这个DIV是作品一页-->
            <div class="item">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4" onclick="javascript:setTimeout('location.href=\'show.html\'',680)">
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="card animated flipInX animation-delay-2">
                                    <blockquote class="blockquote-avatar withripple">
                                        <img src="<?=\yii\helpers\Url::to('@web')?>/images/avatar.png" alt="" class="avatar hidden-xs">
                                        <div class="photo">
                                            <table>
                                                <tr>
                                                    <td><a href="#" ><img src="<?=\yii\helpers\Url::to('@web')?>/images/测试图片.jpg" style="max-width: 270px; ;height: 140px"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr><td><strong>图片名字</strong></td></tr>
                                                            <tr><td>图片详情</td></tr>

                                                        </table></td></tr>
                                            </table>
                                            <footer>作者姓名</footer>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
</div>

</div>
<?=DisWidget::widget()?>

?>