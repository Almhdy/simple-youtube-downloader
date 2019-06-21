
<?php 
// extract id from the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $link = $_POST['link'];
  $id = str_replace('?', '&', $link); 
  $id = parse_str($id);
  @$id = $v;
  $file = file_get_contents('https://youtube.com/get_video_info?video_id=' . $id);
  parse_str($file);
  @$time = $length_seconds / 60;
  @$ex = explode(',', $url_encoded_fmt_stream_map);
} 

/* variables */
$pageTitle = 'YouTube Video Downloader';
$pageName = 'home';
$metaName = 'download youtube videos online free';
?>
        <!-- start header -->
        <?php  include 'header.php';  ?>
        
        <!-- start form input -->
        <div class="container">
          <h1 class="text-center text-capitalize">download youtube videos free</h1>
          <form class="main-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="row">
                <input class="form-control col-xs-12 col-sm-9" type="text" name="link" placeholder="type the video url">
                <input class="form-control btn btn-danger col-xs-12 col-sm-3" type="submit" name="send">
              </div>
          </form>
        </div>

       <!-- start download box -->
        <div class="big-box">
          <div class="container">
            <div class="download text-center text-capitalize">
              <div class="info">
                <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
                
                <img src='https://i.ytimg.com/vi/<?php echo $id ?>/0.jpg'>
                <h3 class='title text-capitalize'><b>title:</b> <?php echo $title ?></h3>
                <span class='duration'><b>duration: </b><?php echo round($time, 2) ?> mintues</span>
                <?php  } ?>
              </div>

              <div class="row">
                <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
                    <?php foreach ($ex as $value) { ?>
                  <?php
                  parse_str($value);
                  $GLOBALS['typeS'] = strstr($type,';', true);
                  ?>
                    <div class='col-md-3'>
                      <div class='box'>
                        <span><?php echo $typeS . ' ' . $quality ?></span>
                        <a class='btn btn-danger' href='<?php echo $url . "?title=" . $title ?>'>download</a>
                      </div>
                    </div>
                    <?php } ?>
                <?php } ?>
              </div> 
            </div>
          </div>
        </div>

        <!-- start footer -->
        <?php include('footer.php'); ?>