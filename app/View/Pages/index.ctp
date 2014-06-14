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

<!--以下コピペ-->

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Easy Parking</a>
        </div>
        <div class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">
            <li>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="User ID">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">ログイン</button>
              </form>
            </li>
            <li><a href="/signup">会員登録</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Easy Parking</h1>
        <p>東京が抱える悩み、「バイクを停める場所がない！」民家や土地所有者が、空いてる土地を空いている時間帯だけ貸し出し、好きな場所に駐車できるサービスです。違法駐車は辞めましょう。</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h3>バイクを停める場所を探す</h3>
            <p><a class="btn btn-default" href="#" role="button">会員登録 &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h3>空いてる時間に場所を貸してお小遣いを稼ぐ</h3>
          <p>ここに画像</p>
          <p><a class="btn btn-default" href="#" role="button">場所を貸し出す &raquo;</a></p>
       </div>
       <div class="col-md-4">
          <h3>オーナーログイン</h3>
          <p>ここに画像</p>
          <p><a class="btn btn-default" href="#" role="button">ログイン &raquo;</a></p>
       </div>

      <hr>

      <footer>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
