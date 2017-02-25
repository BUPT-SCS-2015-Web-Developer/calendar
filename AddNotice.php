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
                <li><a href="AddMatters.php">添加事件</a></li>
                <li class="active"><a href="AddNotice.php">添加通知</a></li>
               
            </ul>
        </div>
    </nav>

    <div class="container">
        
        <div class="row">
            <form class="col s8 offset-s2" action="AddNotice_work.php">
                <div class="card-panel z-depth-3">
                    <div class="row">
                        <div class="input-field">
                            <input id="notice_id" name="notice_id" type="text" class="validate">
                            <label for="matters_name">活动ID</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <textarea id="notice" name="notice" class="materialize-textarea" length=140></textarea>
                            <label for="notice">通知内容</label>
                        </div>
                    </div>
                    
                    
                   
                    <button class="btn waves-effect waves-light" type="submit" >发布
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