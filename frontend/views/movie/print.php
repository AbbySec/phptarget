<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <style media=print>.PageNext{page-break-after: always;}</style>
    <style>
        <!--
        /* Font Definitions */
        @font-face
        {font-family:宋体;
            panose-1:2 1 6 0 3 1 1 1 1 1;}
        @font-face
        {font-family:"Cambria Math";
            panose-1:2 4 5 3 5 4 6 3 2 4;}
        @font-face
        {font-family:等线;
            panose-1:2 1 6 0 3 1 1 1 1 1;}
        @font-face
        {font-family:仿宋_GB2312;}
        @font-face
        {font-family:楷体_GB2312;}
        @font-face
        {font-family:"\@宋体";
            panose-1:2 1 6 0 3 1 1 1 1 1;}
        @font-face
        {font-family:"\@等线";
            panose-1:2 1 6 0 3 1 1 1 1 1;}
        @font-face
        {font-family:"\@仿宋_GB2312";}
        @font-face
        {font-family:"\@楷体_GB2312";}
        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {margin:0cm;
            margin-bottom:.0001pt;
            text-align:justify;
            text-justify:inter-ideograph;
            font-size:10.5pt;
            font-family:等线;}
        h1
        {mso-style-link:"标题 1 字符";
            margin-top:17.0pt;
            margin-right:0cm;
            margin-bottom:16.5pt;
            margin-left:0cm;
            text-align:justify;
            text-justify:inter-ideograph;
            line-height:240%;
            page-break-after:avoid;
            font-size:22.0pt;
            font-family:等线;}
        p.MsoHeader, li.MsoHeader, div.MsoHeader
        {mso-style-link:"页眉 字符";
            margin:0cm;
            margin-bottom:.0001pt;
            text-align:center;
            layout-grid-mode:char;
            border:none;
            padding:0cm;
            font-size:9.0pt;
            font-family:等线;}
        p.MsoFooter, li.MsoFooter, div.MsoFooter
        {mso-style-link:"页脚 字符";
            margin:0cm;
            margin-bottom:.0001pt;
            layout-grid-mode:char;
            font-size:9.0pt;
            font-family:等线;}
        span.1
        {mso-style-name:"标题 1 字符";
            mso-style-link:"标题 1";
            font-weight:bold;}
        span.a
        {mso-style-name:"页眉 字符";
            mso-style-link:页眉;}
        span.a0
        {mso-style-name:"页脚 字符";
            mso-style-link:页脚;}
        .MsoChpDefault
        {font-family:等线;}
        /* Page Definitions */
        @page WordSection1
        {size:595.3pt 841.9pt;
            margin:72.0pt 90.0pt 72.0pt 90.0pt;
            layout-grid:15.6pt;}
        div.WordSection1
        {page:WordSection1;}
        -->
    </style>

</head>

<body lang=ZH-CN style='text-justify-trim:punctuation'>

<div class=WordSection1 style='layout-grid:15.6pt'>

    <h1 align=center style='text-align:center'>微电影作品申报表</h1>

    <div align=center>

        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=582
               style='width:436.35pt;border-collapse:collapse'>
            <tr style='height:32.85pt'>
                <td width=176 colspan=2 style='width:131.8pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:32.85pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>作品名称</span></p>
                </td>
                <td width=406 colspan=3 style='width:304.55pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:32.85pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?php echo json_decode($model->works_intro)[0] ?></span></p>
                </td>
            </tr>
            <tr style='height:26.9pt'>
                <td width=76 rowspan=3 style='width:56.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:26.9pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>作品</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>信息</span></p>
                </td>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.9pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>类别</span></p>
                </td>
                <td width=406 colspan=3 style='width:304.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.9pt'>
                    <p class=MsoNormal align=center style='text-align:center;text-indent:12.0pt;
  line-height:27.0pt'>
                        <span lang=EN-US style='font-size:14.0pt;font-family:宋体'>
                            <?=$model->getWorksClass2()->one()['name']?>
                        </span>
                    </p>
                </td>
            </tr>
            <tr style='height:28.15pt'>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.15pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>网络链接</span></p>
                </td>
                <td width=406 colspan=3 style='width:304.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.15pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$model->works_link?></span></p>
                </td>
            </tr>
            <tr style='height:28.15pt'>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.15pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>时长</span></p>
                </td>
                <td width=129 style='width:96.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.15pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$model->works_time?></span></p>
                </td>
                <td width=111 style='width:83.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.15pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>点击率</span></p>
                </td>
                <td width=167 style='width:124.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.15pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$model->click_rate?></span></p>
                </td>
            </tr>
            <tr style='height:28.5pt'>
                <td width=76 rowspan=4 style='width:56.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:28.5pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt;letter-spacing:-.5pt'>申</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt;letter-spacing:-.5pt'>报</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt;letter-spacing:-.5pt'>人</span></p>
                </td>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.5pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>姓名</span></p>
                </td>
                <td width=129 style='width:96.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.5pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$user->username?></span></p>
                </td>
                <td width=111 style='width:83.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.5pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>手机</span></p>
                </td>
                <td width=167 style='width:124.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.5pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$user->phone_num?></span></p>
                </td>
            </tr>
            <tr style='height:27.8pt'>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.8pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>院系专业</span></p>
                </td>
                <td width=129 style='width:96.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.8pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$user_school?></span></p>
                </td>
                <td width=111 style='width:83.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.8pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>年级</span></p>
                </td>
                <td width=167 style='width:124.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.8pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$user->grade?></span></p>
                </td>
            </tr>
            <tr style='height:27.8pt'>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.8pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>学校名称</span></p>
                </td>
                <td width=406 colspan=3 style='width:304.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.8pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$user->university?></span></p>
                </td>
            </tr>
            <tr style='height:28.65pt'>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>地址邮编</span></p>
                </td>
                <td width=406 colspan=3 style='width:304.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$user->address?></span></p>
                </td>
            </tr>
            <tr style='height:28.65pt'>
                <td width=76 rowspan=2 style='width:56.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>指<span style='letter-spacing:-.5pt'>导</span></span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>教师</span></p>
                </td>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>姓名</span></p>
                </td>
                <td width=129 style='width:96.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$teacher->username?></span></p>
                </td>
                <td width=111 style='width:83.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>手机</span></p>
                </td>
                <td width=167 style='width:124.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$teacher->phone_num?></span></p>
                </td>
            </tr>
            <tr style='height:28.65pt'>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>部门职务</span></p>
                </td>
                <td width=129 style='width:96.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$teacher->business?></span></p>
                </td>
                <td width=111 style='width:83.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>职称</span></p>
                </td>
                <td width=167 style='width:124.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:28.65pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$teacher->position?></span></p>
                </td>
            </tr>
            <tr style='height:27.0pt'>
                <td width=76 rowspan=7 style='width:56.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>其他</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>成员</span></p>
                </td>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>姓名</span></p>
                </td>
                <td width=129 style='width:96.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>院系专业</span></p>
                </td>
                <td width=111 style='width:83.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>年级</span></p>
                </td>
                <td width=167 style='width:124.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>手机</span></p>
                </td>
            </tr>
            <?php if(count($guser)==0){?>
                <tr style='height:27.0pt'>
                    <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                        <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'>
                        <span lang=EN-US style='font-size:14.0pt;font-family:宋体'>
                        </span>
                        </p>
                    </td>
                    <td width=129 style='width:96.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                        <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'>
                        <span lang=EN-US style='font-size:14.0pt;font-family:宋体'>
                        </span>
                        </p>
                    </td>
                    <td width=111 style='width:83.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                        <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'>
                        <span lang=EN-US style='font-size:14.0pt;font-family:宋体'>
                        </span>
                        </p>
                    </td>
                    <td width=167 style='width:124.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                        <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'>
                        <span lang=EN-US style='font-size:14.0pt;font-family:宋体'>
                        </span>
                        </p>
                    </td>
                </tr>

            <?php }?>
            <?php foreach ($guser as $k => $v){ ?>
            <tr style='height:27.0pt'>
                <td width=100 style='width:75.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'>
                        <span lang=EN-US style='font-size:14.0pt;font-family:宋体'><?=$v['username']?>
                        </span>
                    </p>
                </td>
                <td width=129 style='width:96.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'>
                        <span lang=EN-US style='font-size:14.0pt;font-family:宋体'>
                            <?=$v['user_school']?>
                        </span>
                    </p>
                </td>
                <td width=111 style='width:83.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'>
                        <span lang=EN-US style='font-size:14.0pt;font-family:宋体'>
                            <?=$v['grade']?>
                        </span>
                    </p>
                </td>
                <td width=167 style='width:124.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.0pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'>
                        <span lang=EN-US style='font-size:14.0pt;font-family:宋体'>
                            <?=$v['phone_num']?>
                        </span>
                    </p>
                </td>
            </tr>
            <?php } ?>
        </table>

    </div>
    <div class="PageNext"></div>
    <p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
    <span lang=EN-US style='font-size:10.5pt;font-family:等线'><br clear=all
                                                                 style='page-break-before:always'>
</span>

    <p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>

    <p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>

    <div align=center>

        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=582
               style='width:436.35pt;border-collapse:collapse'>
            <tr style='height:184.35pt'>
                <td width=76 style='width:56.65pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:184.35pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt;letter-spacing:1.6pt'>作</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt;letter-spacing:1.6pt'>品</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt;letter-spacing:1.6pt'>简</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt;letter-spacing:1.6pt'>介</span></p>
                </td>
                <td width=506 valign=top style='width:379.7pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:184.35pt'>
                    <p class=MsoNormal align=left style='text-align:left;line-height:27.0pt'><span
                            style='font-size:14.0pt;font-family:楷体_GB2312'>（限</span><span lang=EN-US
                                                                                          style='font-size:14.0pt'>300</span><span style='font-size:14.0pt;font-family:
  楷体_GB2312'>字以内）</span></p>
                    <p class=MsoNormal align=left style='text-align:left;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'><?php echo json_decode($model->works_intro)[1] ?></span></p>
                    <p class=MsoNormal align=left style='text-align:left;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt'>&nbsp;</span></p>
                </td>
            </tr>
            <tr style='height:190.15pt'>
                <td width=76 style='width:56.65pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:190.15pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            style='font-size:14.0pt'>学校网络文化建设管理部门意见</span></p>
                </td>
                <td width=506 valign=top style='width:379.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:190.15pt'>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'></span></p>
                    <p class=MsoNormal align=left style='text-align:left;line-height:27.0pt'><span
                            lang=EN-US>&nbsp;</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US style='font-size:14.0pt;font-family:宋体'>&nbsp;</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US>&nbsp;</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US>&nbsp;</span></p>
                    <p class=MsoNormal align=center style='text-align:center;line-height:27.0pt'><span
                            lang=EN-US>&nbsp;</span></p>
                    <p class=MsoNormal align=left style='text-align:left;line-height:27.0pt'><span
                            style='font-size:14.0pt'>负责人：</span></p>
                    <p class=MsoNormal align=left style='text-align:left;line-height:27.0pt'><span
                            style='font-size:14.0pt'>签章：</span></p>
                    <p class=MsoNormal align=left style='text-align:right;line-height:27.0pt'><span
                            style='font-size:14.0pt'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日&nbsp;&nbsp;</span></p>
                </td>
            </tr>
        </table>

    </div>

    <p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>

</div>

</body>

</html>
?>