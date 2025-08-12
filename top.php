<?php
/*
Template Name: TOP
*/

get_header();
?>
<!-- メインビジュアル -->
<section class="main-visual">
    <div class="main-container">
        <div class="main-content">
            <h2 class="main-title"><span>飲食店開業のことなら</span><br>当事務所にお任せ下さい</h2>
            <p class="main-description">飲食店営業許可申請から食品衛生責任者の手続きまで、開業に必要な煩雑な手続きを一括サポート。経験豊富な行政書士が、あなたの夢の実現を全力でお手伝いします。</p>
            <div class="main-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="contact-btn">まずは相談する</a>
                <a href="<?php echo home_url('/about'); ?>" class="line-contact-btn">LINEで相談する</a>
            </div>
        </div>
        <div class="main-image">
            <img src="<?php echo get_theme_file_uri('assets/images/common/main-image.png'); ?>" alt="飲食店営業許可申請代行">
        </div>
    </div>
</section>

<!-- こんなお悩みはありませんか -->
<section class="nayami-section">
    <div class="nayami-container"></div>
    <div class="nayami-content">
        <h2 class="section-title fade-in">こんなお悩みはありませんか？</h2>
        <div class="nayami-list-area">
            <ul class="nayami-list">
                <li class="nayami-item">飲食店を開業したいが、許可申請の手続きがわからない</li>
                <li class="nayami-item">食品衛生責任者の資格取得方法がわからない</li>
                <li class="nayami-item">煩雑な書類作成や申請手続きに時間を取られたくない</li>
                <li class="nayami-item">開業後の運営に専念したい</li>
                <li class="nayami-item">行政書士に依頼するメリットが知りたい</li>
                <li class="nayami-item">飲食店を開業したいが、許可申請の手続きがわからない</li>
                <li class="nayami-item">食品衛生責任者の資格取得方法がわからない</li>
                <li class="nayami-item">煩雑な書類作成や申請手続きに時間を取られたくない</li>
                <li class="nayami-item">開業後の運営に専念したい</li>
                <li class="nayami-item">行政書士に依頼するメリットが知りたい</li>
            </ul>
        </div>
    </div>
    </div>
</section>

<!-- 逆三角形セクション -->
<section class="triangle-section">
    <div class="triangle-container">
        <div class="triangle-arrow"></div>
    </div>
</section>


<div class="title02 resolve-title">
    <h2>
        <span class="title-span">そのお悩みを当事務所が<br class="sp-display">解決します！</span>
    </h2>
</div>

<!-- 選ばれる理由セクション -->
<section class="reason-section">
    <div class="reason-container">
        <div class="reason-content">
            <!-- 大きな3つのポイント見出し -->
            <div class="point-header">
                <div class="point-subtitle">
                    <span class="point-slash">\</span>
                    <span class="point-text">依頼する<span class="point-highlight">3つ</span>のメリット</span>
                    <span class="point-slash">/</span>
                </div>
                <h2 class="point-main-title">「どうして行政書士に<br class="sp-display">依頼したほうがいいの？」</h2>
            </div>

            <div class="reason-items">
                <!-- 理由1 -->
                <div class="reason-item fade-in">
                    <div class="reason-number">01</div>
                    <div class="reason-icon">
                        <img src="<?php echo get_theme_file_uri('assets/images/common/reason1.png'); ?>" alt="迅速な納品">
                    </div>
                    <h3 class="reason-title">迅速な手続き</h3>
                    <p class="reason-description">豊富な経験により迅速かつ正確な手続きを行います。短期間でお客様の要求にお応えします。</p>
                </div>

                <!-- 理由2 -->
                <div class="reason-item fade-in">
                    <div class="reason-number">02</div>
                    <div class="reason-icon">
                        <img src="<?php echo get_theme_file_uri('assets/images/common/reason2.png'); ?>" alt="専門的な知識">
                    </div>
                    <h3 class="reason-title">専門的な知識</h3>
                    <p class="reason-description">飲食業界の専門家が確実な情報を提供。最新の法令や手続きにも対応します。</p>
                </div>

                <!-- 理由3 -->
                <div class="reason-item fade-in">
                    <div class="reason-number">03</div>
                    <div class="reason-icon">
                        <img src="<?php echo get_theme_file_uri('assets/images/common/reason3.png'); ?>" alt="柔軟なカスタマイズ">
                    </div>
                    <h3 class="reason-title">柔軟なサポート</h3>
                    <p class="reason-description">お客様の要望に合わせて、カスタマイズ可能なサービスを提供します。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 料金プランセクション -->
<section class="pricing-section">
    <div class="container">
        <div class="pricing-content">
            <div class="pricing-header">
                <p class="pricing-subtitle fade-in">利用用途にあわせて選択できる</p>
                <h2 class="pricing-title fade-in">サービス・料金</h2>
            </div>

            <div class="pricing-plans">
                <!-- プロフェッショナルエディション -->
                <div class="pricing-plan fade-in">
                    <div class="plan-header">
                        <div class="plan-color-bar red"></div>
                        <h3 class="plan-name">飲食店営業許可申請<br>サポート</h3>
                    </div>
                    <div class="plan-description">
                        <p class="plan-subtitle">書類作成から検査立会・許可証受取までの手続き一式を含む</p>
                        <div class="plan-price">
                            <span class="price-amount">55,000</span>
                            <span class="price-unit">円〜</span>
                        </div>
                    </div>
                </div>

                <!-- スタンダードエディション -->
                <div class="pricing-plan fade-in">
                    <div class="plan-header">
                        <div class="plan-color-bar blue"></div>
                        <h3 class="plan-name">飲食店営業許可更新申請<br>サポート
                        </h3>
                    </div>
                    <div class="plan-description">
                        <p class="plan-subtitle">書類作成から検査立会・許可証受取までの手続き一式を含む</p>
                        <div class="plan-price">
                            <span class="price-amount">33,000</span>
                            <span class="price-unit">円〜</span>
                        </div>
                    </div>
                </div>

                <!-- エントリーオフィスエディション -->
                <div class="pricing-plan fade-in">
                    <div class="plan-header">
                        <div class="plan-color-bar green"></div>
                        <h3 class="plan-name">深夜酒類提供<br>飲食店営業届出</h3>
                    </div>
                    <div class="plan-description">
                        <p class="plan-subtitle">書類作成から検査立会・許可証受取までの手続き一式を含む</p>
                        <div class="plan-price">
                            <span class="price-amount">165,000</span>
                            <span class="price-unit">円〜</span>
                        </div>
                    </div>
                </div>

                <!-- エントリービデオエディション -->
                <div class="pricing-plan fade-in">
                    <div class="plan-header">
                        <div class="plan-color-bar yellow"></div>
                        <h3 class="plan-name">風俗営業許可申請<br>サポート</h3>
                    </div>
                    <div class="plan-description">
                        <p class="plan-subtitle">書類作成から検査立会・許可証受取までの手続き一式を含む</p>
                        <div class="plan-price">
                            <span class="price-amount">198,000</span>
                            <span class="price-unit">円〜</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 代表者挨拶セクション -->
<section class="representative-section">
    <div class="container">
        <div class="representative-content">
            <div class="representative-image">
                <img src="<?php echo get_theme_file_uri('assets/images/common/representative.jpg'); ?>" alt="代表者">
            </div>
            <div class="representative-text">
                <h2 class="representative-title">歯科衛生士1,700人以上<br>採用してきた私が対応します。</h2>
                <div class="representative-message">
                    <p>当ホームページをご覧いただきありがとうございます。<br>
                        代表の渡邊 涼介（わたなべ りょうすけ）です。<br>
                        当社は、「すべては患者様と歯科医療従事者の幸せのために」ということをコンセプトに活動しています。<br>
                        院長は、患者様に対して最高の歯科診療提供をすること、スタッフに対して働きやすい職場を提供することに全力を注いでください。<br>
                        採用は、DHを1,700名以上採用してきた私が責任をもって引き受けます。そしてこれから5年以上は採用に苦しむことがない「仕組み」を貴院と一緒に構築していきます。</p>
                </div>
            </div>
        </div>

        <!-- 代表プロフィール -->
        <div class="representative-profile">
            <h3 class="profile-title">代表プロフィール</h3>
            <div class="profile-content">
                <p>GMOインターネットグループ（東証プライム）など、IT業界での人事部長を15年経験した後、国内最大手の審美歯科グループにて歯科衛生士採用のための会社立ち上げ代表取締役を務める。歯科衛生士採用560名、早期離職率10%未満を達成。2022年にデンタルHR総研株式会社を設立。3年で280医院との契約を締結し、応募者数14,000名、採用数1,200名を超える実績を築く。採用成功率99%、定着率97%を誇り、通算で1,700名以上の歯科衛生士採用を達成。個人レベルで公開されている中では国内圧倒的なナンバーワンである。</p>
            </div>
        </div>
    </div>
</section>

<!-- ご依頼の流れセクション -->
<section class="flow-section">
    <div class="container">
        <div class="flow-content">
            <h2 class="section-title fade-in">ご依頼の流れ</h2>
            <div class="flow-steps">
                <!-- STEP 01 -->
                <div class="flow-step fade-in">
                    <div class="step-number">
                        <span class="step-label">STEP</span>
                        <span class="step-num">01</span>
                    </div>
                    <div class="step-content">
                        <h3 class="step-title">お問い合わせ&<br>ヒアリング</h3>
                        <p class="step-description">貴社のインターナルコミュニケーション課題をじっくりヒアリング。</p>
                    </div>
                </div>

                <!-- 矢印 -->
                <div class="flow-arrow">
                    <span>&gt;</span>
                </div>

                <!-- STEP 02 -->
                <div class="flow-step fade-in">
                    <div class="step-number">
                        <span class="step-label">STEP</span>
                        <span class="step-num">02</span>
                    </div>
                    <div class="step-content">
                        <h3 class="step-title">見積もり&<br>ご入金</h3>
                        <p class="step-description">カテゴリー整理、運用体制、企画など、貴社状況に寄り添ってコンサル。</p>
                    </div>
                </div>

                <!-- 矢印 -->
                <div class="flow-arrow">
                    <span>&gt;</span>
                </div>

                <!-- STEP 03 -->
                <div class="flow-step fade-in">
                    <div class="step-number">
                        <span class="step-label">STEP</span>
                        <span class="step-num">03</span>
                    </div>
                    <div class="step-content">
                        <h3 class="step-title">申請代行</h3>
                        <p class="step-description">貴社の社内報システムを納品。設定・更新など操作をレクチャー。</p>
                    </div>
                </div>

                <!-- 矢印 -->
                <div class="flow-arrow">
                    <span>&gt;</span>
                </div>

                <!-- STEP 04 -->
                <div class="flow-step fade-in">
                    <div class="step-number">
                        <span class="step-label">STEP</span>
                        <span class="step-num">04</span>
                    </div>
                    <div class="step-content">
                        <h3 class="step-title">業務完了</h3>
                        <p class="step-description">いよいよ全社公開！実運用開始後も、弊社ディレクターがサポート。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flow-button-wrapper">
        <a href="#" class="flow-intro-button">
            <span class="button-text">WEBから相談(24時間受付中)</span>
            <span class="button-arrow">&gt;</span>
        </a>
    </div>
</section>

<!-- お問い合わせフォームセクション -->
<section class="contact-form-section">
    <div class="container">
        <div class="contact-form-content">
            <div class="contact-form-header">
                <h2 class="contact-form-title fade-in">お問い合わせ</h2>
                <p class="contact-form-subtitle fade-in">内容確認後、担当者より<br class="sp-display">2営業日以内にご連絡いたします。</p>
                <div class="contact-form-notes fade-in">
                    <p class="note-item">※ お問い合わせは、お電話では承っておりません。</p>
                    <p class="note-item">※ 営業目的でのお問い合わせはご遠慮ください。</p>
                </div>
                <div class="line-consultation-button fade-in">
                    <a href="<?php echo home_url('/about'); ?>" class="line-consultation-btn">LINEでの相談はこちら</a>
                </div>
            </div>
            <div class="contact-form fade-in">
                <!-- Contact Form 7 ショートコード（実際のIDに変更してください） -->
                <?php echo do_shortcode('[contact-form-7 id="8c4a2ab" title="コンタクトフォーム 1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>