<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="共通ディスクリプション" />
  <title>PACIFIC MALL DEVELOPMENT</title>
  <link rel="shortcut icon" href="./assets/images/common/favicon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" />
  <script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="./assets/js/bundle.js"></script>
</head>
<body>
  <div class="container">
    <header id="header">
      <div class="header-inner">
        <div class="logo">
          <a class="logo-header" href="/">
            <img src="./assets/images/common/logo-main.svg" class="main-logo" alt="PACIFIC MALL DEVELOPMENT" />
            <img src="./assets/images/common/logo-fixed.svg" class="fixed-logo" alt="PACIFIC MALL DEVELOPMENT" />
          </a>
        </div>
        <button class="toggle-menu js-toggoleNav">
          <span class="toggle-line">メニュー</span>
        </button>
        <div class="header-nav">
          <nav class="global-nav">
            <ul class="menu">
              <li class="menu-item">
                <a class="nav-link active" href="#">ホーム</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">企業情報</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">店舗情報</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">地域貢献活動</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">ニュースリリース</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">お問い合わせ</a>
              </li>
            </ul>
          </nav>
          <form class="search-form" role="search" method="get" action="">
            <div class="search-box">
              <input type="text" class="search-input" name="" placeholder="キーワードを入力してください" />
              <button type="submit" class="button-submit"></button>
            </div>
            <div class="search-buttons">
              <button type="button" class="close-icon js-searchIcon"></button>
              <button type="button" class="search-icon js-searchIcon"></button>
            </div>
          </form>
        </div>
      </div>
    </header>
    <section class="section-contents" id="keyvisual">
      <img src="./assets/images/bg-section-keyvisual.jpg" alt="MAIN IMAGE" />
      <div class="wrapper">
        <h1 class="site-title">Connecting the future.</h1>
        <p class="site-caption">
          私たちパシフィックモール開発は<br />
          世界各地のショッピングモール開発を通じて<br />
          人と人、人と地域を結ぶお手伝いをしています。
        </p>
      </div>
    </section>
    <section class="section-contents" id="shop">
      <div class="wrapper">
        <span class="section-title-en">Shop Information</span>
        <h2 class="section-title">店舗情報</h2>
        <p class="section-lead">パシフィックモール開発が取り組んだ ショッピングモールをご紹介します</p>
        <ul class="shops">
          <li class="shops-item">
            <a class="shop-link" href="#">
              <div class="shop-image">
                <img src="#" alt="" />
              </div>
              <div class="shop-body">
                <p class="name">大手町モール</p>
                <p class="location"></p>
                <div class="buttonBox">
                  <button type="button" class="seeDetail">MORE</button>
                </div>
              </div>
            </a>
          </li>
          <li class="shops-item">
            <a class="shop-link" href="#">
              <div class="shop-image">
                <img src="#" alt="" />
              </div>
              <div class="shop-body">
                <p class="name">タムリンモール</p>
                <p class="location"></p>
                <div class="buttonBox">
                  <button type="button" class="seeDetail">MORE</button>
                </div>
              </div>
            </a>
          </li>
          <li class="shops-item">
            <a class="shop-link" href="#">
              <div class="shop-image">
                <img src="#" alt="" />
              </div>
              <div class="shop-body">
                <p class="name">チャオプラヤモール</p>
                <p class="location"></p>
                <div class="buttonBox">
                  <button type="button" class="seeDetail">MORE</button>
                </div>
              </div>
            </a>
          </li>
          <li class="shops-item">
            <a class="shop-link" href="#">
              <div class="shop-image">
                <img src="#" alt="" />
              </div>
              <div class="shop-body">
                <p class="name">トラファルガーモール</p>
                <p class="location"></p>
                <div class="buttonBox">
                  <button type="button" class="seeDetail">MORE</button>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <div class="section-buttons">
          <button type="button" class="button button-ghost" onclick="javascript:location.href = '#';">
            店舗情報一覧を見る
          </button>
        </div>
      </div>
    </section>
    <section class="section-contents" id="contribution">
      <div class="wrapper">
        <span class="section-title-en">Regional Contribution</span>
        <h2 class="section-title">地域貢献活動</h2>
        <p class="section-lead">人と地域を結ぶ活動を行っております</p>
        <div class="articles">
          <article class="article-card">
            <a class="card-link" href="#">
              <div class="card-inner">
                <div class="card-image">
	                <img src="#" alt="" />
                </div>
                <div class="card-body">
                  <p class="title">街のちびっこダンス大会</p>
                  <p class="excerpt">2018年8月大手町モールにて「街のちびっこダンス大会」を開催しました。近年はダンス教室に通うお子様も多く、お子様同士や親御様同士の交流の場となればと思い企画いたしました。</p>
                  <div class="buttonBox">
                    <button type="button" class="seeDetail">MORE</button>
                  </div>
                </div>
              </div>
            </a>
          </article>
          <article class="article-card">
            <a class="card-link" href="#">
              <div class="card-inner">
                <div class="card-image">
	                <img src="#" alt="" />
                </div>
                <div class="card-body">
                  <p class="title">都市カンファレンス</p>
                  <p class="excerpt">新しい都市の構想を考える LAモールでは2018年8月20日、モール周辺のロサンゼルスの新しい都市構想について、モールにいらっしゃったお客様と考えるカンファレンスを開催いたしました。</p>
                  <div class="buttonBox">
                    <button type="button" class="seeDetail">MORE</button>
                  </div>
                </div>
              </div>
            </a>
          </article>
          <article class="article-card">
            <a class="card-link" href="#">
              <div class="card-inner">
                <div class="card-image">
	                <img src="#" alt="" />
                </div>
                <div class="card-body">
                  <p class="title">タムリンフェスティバル</p>
                  <p class="excerpt">今年もタムリンフェスティバルは大盛況 2018年9月にインドネシアのタムリンホールにて「タムリンフェスティバル」を開催しました。</p>
                  <div class="buttonBox">
                    <button type="button" class="seeDetail">MORE</button>
                  </div>
                </div>
              </div>
            </a>
          </article>
        </div>
        <div class="section-buttons">
          <button type="button" class="button button-ghost" onclick="javascript:location.href = '#';">
            地域貢献活動を見る
          </button>
        </div>
      </div>
    </section>
    <section class="section-contents" id="news">
      <div class="wrapper">
        <span class="section-title-en">News Release</span>
        <h2 class="section-title">ニュースリリース</h2>
        <p class="section-lead">パシフィックモール開発の最新情報をお送りします</p>
        <ul class="news">
          <li class="news-item">
            <a class="detail-link" href="#">
              <time class="time">2019.01.14</time>
              <p class="title">インド 消費者向けアプリのMecha-Indiaと業務提携開始</p>
              <p class="news-text">パシフィックモール株式会社（以下、当社）は、インド共和国（以下、インド）において、Mecha-India（以下、メカ・インディア）との協業を開始します。 Mecha-Indiaは、インドにおける配車サービス大手であり、電 [&hellip;]</p>
            </a>
          </li>
          <li class="news-item">
            <a class="detail-link" href="#">
              <time class="time">2018.12.17</time>
              <p class="title">年末年始休業のお知らせ</p>
              <p class="news-text">お客様　各位 師走の候、貴社ますますご清祥のこととお喜び申し上げます。 平素は格別のご高配を賜り、厚くお礼申し上げます。 さて、本年（平成30年）の年末年始は、下記の通り休業させていただきますので、よろしくお願いいたしま [&hellip;]</p>
            </a>
          </li>
          <li class="news-item">
            <a class="detail-link" href="#">
              <time class="time">2018.11.15</time>
              <p class="title">米国ニューヨーク・パークアベニューモール 美術館 「The Art of Park Ave.」にて、特設イベント「世界の若手美術展」を開催</p>
              <p class="news-text">美術館「The Art of Park Ave.」は、若手芸術家の作品を展示している美術館としてはニューヨーク最大規模で、常時約5,000点の作品を展示しています。 この度、2018年11月30日&#12316;2019年1月31日の [&hellip;]</p>
            </a>
          </li>
        </ul>
        <div class="section-buttons">
          <button type="button" class="button button-ghost" onclick="javascript:location.href = '#';">
            ニュースリリース一覧を見る
          </button>
        </div>
      </div>
    </section>
    <section class="section-contents" id="company">
      <div class="wrapper">
        <span class="section-title-en">Enterprise Information</span>
        <h2 class="section-title">企業情報</h2>
        <p class="section-lead">
          私たちパシフィックモール開発は、<br />
          ショッピングモール開発を通じて新たな価値を創造し<br />
          社会に貢献するグローバルな企業を目指します。
        </p>
        <div class="section-buttons">
          <button type="button" class="button button-ghost" onclick="javascript:location.href = '#';">
            企業情報を見る
          </button>
        </div>
      </div>
    </section>
    <footer class="footer" id="footer">
      <div class="footerContents">
        <div class="footerContents-contact">
          <div class="enterprise-logo">
            <img src="./assets/images/svg/logo-footer.svg" alt="PACIFIC MALL DEVELOPMENT" />
          </div>
          <div class="enterprise-detail">
            <p class="name">パシフィックモール開発株式会社</p>
            <p class="address">
              東京都千代田区大手町0-1-2<br />
              パシフィックモールビルディング18F 
            </p>
          </div>
        </div>
        <div class="footerContents-sitemap">
          <nav class="footer-nav">
            <ul class="menu">
              <li class="menu-item">
                <a class="nav-link" href="#">企業情報</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">会社概要</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">事業紹介</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">沿革</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">店舗情報</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">地域貢献活動</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">ニュースリリース</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">お問い合わせ</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <p class="copyright">
        <small class="copyright-text">&#169; 2019 PACIFIC MALL DEVELOPMENT CO.,LTD.</small>
      </p>
    </footer>
  </div><!-- /.container -->
</body>
</html>
