<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use frontend\models\DisSchool;
use frontend\models\DisMajor;
$this->registerCssFile('@web/css/style2.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/many.css',['depends'=>['frontend\assets\AppAsset']]);
?>
<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <?= \common\widgets\Alert::widget() ?>

        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top-register">
                                <div class="form-top-left-register">
                                    <h3>创意作品提交 | 已经提交？<a href="<?= \yii\helpers\Url::toRoute('idea/print') ?>" target="_blank">打印报名表</a></h3>
                                    <p>请按照下列步骤进行填写:</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="<?= Url::toRoute('idea/upload')?>" method="post" class="registration-form">
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Step 1 / 4</h3>
                                                <p>指导教师信息</p>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][username]" placeholder="老师姓名..." class="form-yourname form-control change" id="yourname">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][phone_num]" placeholder="老师电话..." class="form-your-tel form-control change" id="form-your-tel" >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][business]" placeholder="老师所属职务..." class="form-your-tel form-control change" id="form-your-tel" >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][position]" placeholder="老师职称..." class="form-your-tel form-control change" id="form-your-tel" >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][email]" placeholder="老师邮箱..." class="form-your-tel form-control change" id="form-your-tel" >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][qq_num]" placeholder="老师QQ..." class="form-your-tel form-control change" id="form-your-tel" >
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Step 2 / 4</h3>

                                                <p>作品信息:</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <?=Html::activeDropDownList($model, 'works_class2_id', ArrayHelper::map(\backend\models\DisClass2::find()->where(['class1_id'=>'5'])->all(),'id', 'name'),['class'=>'form-control']);?>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[works_link]" placeholder="网络链接..." class="form-yourname form-control change" id="yourname">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[name]" placeholder="作品名..." class="form-yourname form-control change" id="yourname">
                                            </div>
                                        </div>
                                    </fieldset>


                                    <fieldset>
                              <div class="form-top">
                                <div class="form-top-left">
                                  <h3>Step 3 / 4</h3>
                                    <p>组内其他成员信息：</p>
                                </div>
                                <div class="form-top-right">
                                  <i class="fa fa-key"></i>
                                </div>
                             </div>
                                <div class="form-bottom"> 
                                <h3 id="movie-h3">成员1：</h3>                            
                                    <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][1][DisUser][username]" placeholder="成员姓名..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" name="DisWorksInfo[student][1][DisUser][stu_num]" placeholder="成员学号..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                     <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][1][DisUser][phone_num]" placeholder="成员电话..." class="form-your-tel form-control change" id="form-your-tel" >
                                    </div>                              
                                    <div class="register-div2">
                                     <label  for="form-your-school">&nbsp&nbsp&nbsp成员学院：</label>
                                     <select class="register-select" name="DisWorksInfo[student][1][DisUser][school_id]">
                                     <?php $school = DisSchool::find()->asArray()->all();?>
                                     <?php foreach($school as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php }  ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-major">&nbsp&nbsp&nbsp成员专业：</label>
                                     <?php $major = DisMajor::find()->asArray()->all(); ?>
                                     <select class="register-select" name="DisWorksInfo[student][1][DisUser][major_id]">
                                     <?php foreach($major as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php } ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-grade">&nbsp&nbsp&nbsp成员年级：</label>
                                     <select class="register-select" name="DisWorksInfo[student][1][DisUser][grade]">
                                        <option id="register-select-option" value="1">大一</option>
                                        <option id="register-select-option" value="2">大二</option>
                                        <option id="register-select-option" value="3">大三</option>
                                        <option id="register-select-option" value="4">大四</option>
                                     </select>
                                    </div>  
                                </div>     

                                <div class="form-bottom"> 
                                <h3 id="movie-h3">成员2：</h3>                            
                                    <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][2][DisUser][username]" placeholder="成员姓名..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" name="DisWorksInfo[student][2][DisUser][stu_num]" placeholder="成员学号..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                     <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][2][DisUser][phone_num]" placeholder="成员电话..." class="form-your-tel form-control change" id="form-your-tel" >
                                    </div>                              
                                    <div class="register-div2">
                                     <label  for="form-your-school">&nbsp&nbsp&nbsp成员学院：</label>
                                     <select class="register-select" name="DisWorksInfo[student][2][DisUser][school_id]">
                                     <?php $school = DisSchool::find()->asArray()->all();?>
                                     <?php foreach($school as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php }  ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-major">&nbsp&nbsp&nbsp成员专业：</label>
                                     <?php $major = DisMajor::find()->asArray()->all(); ?>
                                     <select class="register-select" name="DisWorksInfo[student][2][DisUser][major_id]">
                                     <?php foreach($major as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php } ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-grade">&nbsp&nbsp&nbsp成员年级：</label>
                                     <select class="register-select" name="DisWorksInfo[student][2][DisUser][grade]">
                                        <option id="register-select-option" value="1">大一</option>
                                        <option id="register-select-option" value="2">大二</option>
                                        <option id="register-select-option" value="3">大三</option>
                                        <option id="register-select-option" value="4">大四</option>
                                     </select>
                                    </div>  
                                </div>     


                              <div class="form-bottom"> 
                                <h3 id="movie-h3">成员3：</h3>                            
                                    <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][3][DisUser][username]" placeholder="成员姓名..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                  <div class="form-group">
                                    <input type="text" name="DisWorksInfo[student][3][DisUser][stu_num]" placeholder="成员学号..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                     <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][3][DisUser][phone_num]" placeholder="成员电话..." class="form-your-tel form-control change" id="form-your-tel" >
                                    </div>                              
                                    <div class="register-div2">
                                     <label  for="form-your-school">&nbsp&nbsp&nbsp成员学院：</label>
                                     <select class="register-select" name="DisWorksInfo[student][3][DisUser][school_id]">
                                     <?php $school = DisSchool::find()->asArray()->all();?>
                                     <?php foreach($school as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php }  ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-major">&nbsp&nbsp&nbsp成员专业：</label>
                                     <?php $major = DisMajor::find()->asArray()->all(); ?>
                                     <select class="register-select" name="DisWorksInfo[student][3][DisUser][major_id]">
                                     <?php foreach($major as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php } ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-grade">&nbsp&nbsp&nbsp成员年级：</label>
                                     <select class="register-select" name="DisWorksInfo[student][3][DisUser][grade]">
                                        <option id="register-select-option" value="1">大一</option>
                                        <option id="register-select-option" value="2">大二</option>
                                        <option id="register-select-option" value="3">大三</option>
                                        <option id="register-select-option" value="4">大四</option>
                                     </select>
                                    </div>  
                                </div>     

                                <div class="form-bottom"> 
                                <h3 id="movie-h3">成员4：</h3>                            
                                    <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][4][DisUser][username]" placeholder="成员姓名..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" name="DisWorksInfo[student][4][DisUser][stu_num]" placeholder="成员学号..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                     <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][4][DisUser][phone_num]" placeholder="成员电话..." class="form-your-tel form-control change" id="form-your-tel" >
                                    </div>                              
                                    <div class="register-div2">
                                     <label  for="form-your-school">&nbsp&nbsp&nbsp成员学院：</label>
                                     <select class="register-select" name="DisWorksInfo[student][4][DisUser][school_id]">
                                     <?php $school = DisSchool::find()->asArray()->all();?>
                                     <?php foreach($school as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php }  ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-major">&nbsp&nbsp&nbsp成员专业：</label>
                                     <?php $major = DisMajor::find()->asArray()->all(); ?>
                                     <select class="register-select" name="DisWorksInfo[student][4][DisUser][major_id]">
                                     <?php foreach($major as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php } ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-grade">&nbsp&nbsp&nbsp成员年级：</label>
                                     <select class="register-select" name="DisWorksInfo[student][4][DisUser][grade]">
                                        <option id="register-select-option" value="1">大一</option>
                                        <option id="register-select-option" value="2">大二</option>
                                        <option id="register-select-option" value="3">大三</option>
                                        <option id="register-select-option" value="4">大四</option>
                                     </select>
                                    </div>  
                                </div>     

                                <div class="form-bottom"> 
                                <h3 id="movie-h3">成员5：</h3>                            
                                    <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][5][DisUser][username]" placeholder="成员姓名..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" name="DisWorksInfo[student][5][DisUser][stu_num]" placeholder="成员学号..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                     <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][5][DisUser][phone_num]" placeholder="成员电话..." class="form-your-tel form-control change" id="form-your-tel" >
                                    </div>                              
                                    <div class="register-div2">
                                     <label  for="form-your-school">&nbsp&nbsp&nbsp成员学院：</label>
                                     <select class="register-select" name="DisWorksInfo[student][5][DisUser][school_id]">
                                     <?php $school = DisSchool::find()->asArray()->all();?>
                                     <?php foreach($school as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php }  ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-major">&nbsp&nbsp&nbsp成员专业：</label>
                                     <?php $major = DisMajor::find()->asArray()->all(); ?>
                                     <select class="register-select" name="DisWorksInfo[student][5][DisUser][major_id]">
                                     <?php foreach($major as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php } ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-grade">&nbsp&nbsp&nbsp成员年级：</label>
                                     <select class="register-select" name="DisWorksInfo[student][5][DisUser][grade]">
                                        <option id="register-select-option" value="1">大一</option>
                                        <option id="register-select-option" value="2">大二</option>
                                        <option id="register-select-option" value="3">大三</option>
                                        <option id="register-select-option" value="4">大四</option>
                                     </select>
                                    </div>  
                                </div>     

                                <div class="form-bottom"> 
                                <h3 id="movie-h3">成员6：</h3>                            
                                    <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][6][DisUser][username]" placeholder="成员姓名..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" name="DisWorksInfo[student][6][DisUser][stu_num]" placeholder="成员学号..." class="form-yourname form-control change" id="yourname">
                                    </div>
                                     <div class="form-group">
                                      <input type="text" name="DisWorksInfo[student][6][DisUser][phone_num]" placeholder="成员电话..." class="form-your-tel form-control change" id="form-your-tel" >
                                    </div>                              
                                    <div class="register-div2">
                                     <label  for="form-your-school">&nbsp&nbsp&nbsp成员学院：</label>
                                     <select class="register-select" name="DisWorksInfo[student][6][DisUser][school_id]">
                                     <?php $school = DisSchool::find()->asArray()->all();?>
                                     <?php foreach($school as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php }  ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-major">&nbsp&nbsp&nbsp成员专业：</label>
                                     <?php $major = DisMajor::find()->asArray()->all(); ?>
                                     <select class="register-select" name="DisWorksInfo[student][6][DisUser][major_id]">
                                     <?php foreach($major as $key => $value){ ?>
                                        <option id="register-select-option" value="<?=$value['id']?>"><?=$value['name']?></option>
                                        <?php } ?>
                                     </select>
                                    </div>
                                    <div class="register-div2">
                                     <label  for="form-your-grade">&nbsp&nbsp&nbsp成员年级：</label>
                                     <select class="register-select" name="DisWorksInfo[student][6][DisUser][grade]">
                                        <option id="register-select-option" value="1">大一</option>
                                        <option id="register-select-option" value="2">大二</option>
                                        <option id="register-select-option" value="3">大三</option>
                                        <option id="register-select-option" value="4">大四</option>
                                     </select>
                                    </div>  
                                </div>       
                                                            
                          </fieldset>

                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Step 4 / 4</h3>
                                                <p>作品简介：</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-key"></i>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="form-group">
                                                <label id="movie-lable">您的作品信息简介(不超过300字)</label>
                                                <textarea class="form-control" rows="6" id="textarea-movie" name="DisWorksInfo[works_intro]"></textarea>
                                                <br>
                                                <button type="submit" class="btn-sign-up">提交</button>
                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>
?>