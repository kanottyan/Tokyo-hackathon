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
          <a class="navbar-brand" href="#"><font color="#ff4500">Easy</font> Parking</a>
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
        <h1><font color="#ff4500">Easy</font> Parking</h1>
        <p>東京が抱える悩み、「バイクを停める場所がない！」民家や土地所有者が、空いてる土地を空いている時間帯だけ貸し出し、好きな場所に駐車できるサービスです。違法駐車は辞めましょう。</p>
      </div>
    </div>

    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img src="/img/niwa.jpg" width="200" height="200">
          <h2>空いている駐車場を探す</h2>
          <p>東京ではなかなかバイクの駐車場が見つからず、つい違法駐車をしてしまうかもしれません。バイクを停めたいときに便利な場所に停めましょう。</p>
          <p><a class="btn btn-default" href="#" role="button">会員登録 &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>空いている時間に、空いている場所を貸してお小遣いを稼ぐ</h2>
          <p>あたなが昼間使っていない駐車場、余っている庭、そのスペースを使ってお小遣いを稼ぐことが出来ます。そしてそれがそのまま我々の東京の問題解決へとつながります。</p>
          <p><a class="btn btn-default" href="#" role="button">場所を登録する &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>オーナーログイン</h2>
          <p>あなたが空いている時間帯を設定しましょう。</p>
          <p><a class="btn btn-default" href="#" role="button">ログイン &raquo;</a></p>
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
