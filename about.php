<?php session_start(); ?>
<!DOCTYPE html>
<html lang='ja'>
    <?php include('views/header.inc.php'); ?>
    <body> 
    <div class="tittle">
        <h2>About</h2>
    </div>
    <div class="content">
        <div class="explain">
            <h3>本サービスについて</h3>
            <p class="text"><span>　グーテンアペティ</span>は、条件を入力すると関連した料理リストを表示するデータベース基盤のサービスです。 現在はミニマルな機能のランダムサービスのみを提供していますが、近いうちに深化した機能を披露する予定です。
会員サービスとしては、お持ちの食料品の一覧を整理できる掲示板を提供しています。 今後は掲示板の情報を利用し、ユーザーにより役に立つ食べ物をおすすめする機能を追加します。</p>
        </div>
        <div class="business">
            <h3>Feasibility Analysis</h3>
            <div class="business__content">
            <div class="image">
                <img src="img/business.jpg" alt="business" width=318 , height=400/>
                <div>
                <div class="text_business">
    <p><strong>- ビッグデータ</strong><br>
    　情報収集技術は、私たちのサービスの核心となり、現在、私たちにとっては最大の課題でもあります。
    </P>
    <p><strong>- コミュニティ拡張</strong><br>
    　おすすめしてもらった食べ物を食べ、写真を撮って共有するなど、ユーザーの参加を引き出す方法を考案し、より多くの情報を蓄積することに努めます。
    </P>
    <p><strong>- トレンド分析</strong><br>
    　サービスを利用する利用者から年齢、年齢、地域、選好度などの情報収集を通じてトレンドを分析し、これを様々なビジネスで活用できる方案を検討します。
    </P>
    <p><strong>- 連携</strong><br>
    　単純にはサービス検索結果の延長線として、飲食店のおすすめ、レシピサイトのおすすめなどをはじめとし、ひいてはキット、おとり寄席、新規サービス、起業コンサルティングなどの可能性を拡大していく方針です。
    </P>
            </div>
        </div>
        </div>
        <div class="partner">
            <h2>一緒に新しい食生活を作って見ませんか？</h2>
            <class="text">ビジネス関連のお問合せは<a href="mailto:chooshinhye@gmail.com" title="HOST Mailaddress">ここをクリック</a>してください</p>
        </div>
    </div>
        <?php include('views/footer.inc.php'); ?>
    </body>
</html>
