<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/icon-font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>添加新的活动</title>
</head>
<body>
    
    <nav>
        <div class="nav-wrapper teal">
            <a href="#" class="brand-logo">此处为Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="AddSeries.php">申请系列活动</a></li>
                <li class="active"><a href="AddMatters.php">添加事件</a></li>
                <li><a href="AddNotice.php">添加通知</a></li>
               
            </ul>
        </div>
    </nav>

    <div class="container">
        
        <div class="row">
            <form class="col s8 offset-s2" method="post" action="AddMatters_work.php">
                <div class="card-panel z-depth-3">
                    <div class="row">
                        <div class="input-field">
                            <input id="matters_name" type="text" class="validate" name="mName">
                            <label for="matters_name">活动名称</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="matters_organization" type="text" class="validate" name="Oname">
                            <label for="matters_organization">活动组织单位</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>上传海报图片</span>
                                <input type="file" name="poster">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="posterName">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>
                            <input class="with-gap" name="group1" type="radio" id="blue" value="blue"/>
                            <label class="col s6 blue-text"   for="blue">路演类</label>
                        </p>
                        <p>
                            <input class="with-gap" name="group1"  type="radio" id="orange" value="orange"/>
                            <label class="col s6 orange-text" for="orange">宣讲类</label>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <input class="with-gap" name="group1"   type="radio" id="red" value="red" />
                            <label class="col s6 red-text" for="red">比赛类</label>
                        </p>
                        <p>
                            <input class="with-gap" name="group1" type="radio"  id="green" value="green"/>
                            <label class="col s6 green-text" for="green">其他</label>
                        </p>
                    </div>

                    <div class="row">
                        <div class="input-field">
                            <input id="matters_locate" type="text" class="validate" name="mLocate">
                            <label for="matters_locate">活动地点</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="SID" type="text" class="validate" name="SID">
                            <label for="SID">所属系列活动ID</label>
                        </div>
                    </div>
                    <div class="row">
                        <label>活动日期</label>
                        <input type="date" class="datepicker" name="date">
                    </div>
                    <div class="row">
                        <label>活动时间</label>
                        <input type="time" class="timepicker" name="time">
                    </div>

                   <div class="input-field">
                        <textarea id="notice" class="materialize-textarea" length=255 name="detail"></textarea>
                        <label for="notice">活动简介</label>
                    </div>
                    <div class="row">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>上传活动二维码</span>
                                <input type="file" name="QRcode">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="QRname">
                            </div>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">提交
                    </button>

                </div>    
            </form>
            
        </div> 
    </div>
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

    
</body>
</html> 
<script>

    $('.datepicker').pickadate({
  monthsFull: [ '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月' ],
  monthsShort: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
  today: '今日',
  clear: '清除',
  close: '关闭',
  format: 'yyyy-mm-dd',
  formatSubmit: 'yyyy/mm/dd',
  closeOnSelect: true,
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 3, // Creates a dropdown of 15 years to control year
  min: new Date()
                        });
</script>