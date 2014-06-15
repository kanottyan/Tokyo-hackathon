<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
  throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<?php
if (Configure::read('debug') > 0):
  Debugger::checkSecurityKeys();
endif;
?>
<?php
if (file_exists(WWW_ROOT . 'css' . DS . 'cake.generic.css')):
?>
<p id="url-rewriting-warning" style="backgound-color:#e32; color:#fff;">
  <?php echo __d('cake_dev', 'URL rewriting is not properly configured on your server.'); ?>
  1) <a target="_blank" href="http://book.cakephp.org/2.0/en/installation/url-rewriting.html" style="color:#fff;">Help me configure it</a>
  2) <a target="_blank" href="http://book.cakephp.org/2.0/en/development/configuration.html#cakephp-core-configuration" style="color:#fff;">I don't / can't use URL rewriting</a>
</p>
<?php
endif;
?>


    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><font color="#000000">Easy Parking</font></a>
        </div>
        <div class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">
            <li>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="User ID">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">ログイン</button>
              </form>
            </li>
            <li><a href="/signup">会員登録</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- <div class="col-lg-2"></div> -->
    <!-- <div class="col-lg-8"> -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/first.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/second.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/third.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    <!-- </div> -->
    <!-- <div class="col-lg-2"></div> -->

    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <h2>空いている駐車場を探す</h2>
          <p>東京ではなかなかバイクの駐車場が見つからず、つい違法駐車をしてしまうあなた。バイクを停めたいときに停めたい場所に停めましょう。</p>
          <p><a class="btn btn-primary" href="/search" role="button"><span class="glyphicon glyphicon-search"></span>場所を探す &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

          <h2>空いている時間の<br/>空いている場所を貸す</h2>
          <p>あたなが昼間使っていない駐車場、余っている庭、そのスペースを使ってお小遣いを稼ぐことが出来ます。そしてそれがそのまま違法駐車等の問題解決へとつながります。</p>
          <p><a class="btn btn-primary" href="/addparking" role="button">場所を提供 &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2>オーナーログイン</h2>
          <p>あなたが駐車場jを貸し出せる時間帯を設定しましょう。</p>
          <p><a class="btn btn-primary" href="/signup" role="button">ログイン &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <hr>

      <footer>


      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
