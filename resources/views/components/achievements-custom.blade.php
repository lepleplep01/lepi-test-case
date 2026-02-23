<section class="achievement-section">
        <div class="achievement-inner">

            <!-- LEFT LOGOS -->
            <div class="achievement-left show">
                <div class="logo-row max-w-full gap-8">

                    <!-- Meta Partner -->
                    <div class="achievement-card">
                        <div class="inner-frame">
                            <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40163.png">
                        </div>
                    </div>

                    <!-- Meta Certified -->
                    <div class="achievement-card meta-card">
                        <div class="meta-top">
                            <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40130.png">
                        </div>
                        <div class="meta-bottom">
                            <span>Media</span>
                            <strong>CERTIFIED COMPANY</strong>
                        </div>
                    </div>

                    <!-- TikTok -->
                    <div class="achievement-card">
                        <div class="inner-frame">
                            <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40160.png">
                        </div>
                    </div>

                    <!-- Shopify -->
                    <div class="achievement-card">
                        <div class="inner-frame">
                            <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40161.png"
                                class="shopify-logo">
                        </div>
                    </div>

                    <!-- Google -->
                    <div class="achievement-card google-card">
                        <div class="premier">PREMIER</div>
                        <div class="google-body">
                            <div class="google-word">
                                <span class="g1">G</span>
                                <span class="g2">o</span>
                                <span class="g3">o</span>
                                <span class="g1">g</span>
                                <span class="g4">l</span>
                                <span class="g2">e</span>
                            </div>
                            <strong>Partner</strong>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT TEXT -->
            <div class="achievement-right show">
                <div class="text-wrap">
                    <p class="label">OUR ACHIEVEMENTS</p>
                    <h2>
                        A Legacy of Excellence:<br>
                        Our Journey of<br>
                        Achievements
                    </h2>
                </div>
            </div>

        </div>
    </section>

    <style>
        .achievement-section {
            background: #ADC2E6;
            border-top: 2px solid #222;
            border-bottom: 2px solid #222;
            overflow: hidden;
        }

        .achievement-inner {
            display: flex;
            flex-direction: row;
            min-height: 418px;
        }

        /* LEFT - LOGOS */
        .achievement-left {
            width: 62%;
            border-right: 2px solid #222;
            display: flex;
            align-items: center;
            padding: 40px 30px;
            justify-content: center;
        }

        .logo-row {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 50px;
            width: 100%;
            flex-wrap: nowrap;
        }

        /* CARD BASE */
        .achievement-card {
            width: 160px;
            height: 120px;
            box-shadow: 4px 4px 0 #222;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: .22s cubic-bezier(.2, .7, .2, 1);
            background: white;
            flex-shrink: 0;
        }

        .achievement-card:hover {
            transform: translateY(-5px);
        }

        /* INNER FRAME */
        .inner-frame {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            background: white;
        }

        .inner-frame img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        /* META CARD */
        .meta-card {
            flex-direction: column;
            overflow: hidden;
            padding: 0;
        }

        .meta-top {
            width: 100%;
            height: 55%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #E8EEF5;
            padding: 0;
        }

        .meta-top img {
            width: 65%;
            height: auto;
        }

        .meta-bottom {
            width: 100%;
            height: 45%;
            background: #0866FF;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 8px;
        }

        .meta-bottom span {
            font-size: 11px;
            font-weight: 400;
            line-height: 1;
            margin-bottom: 2px;
        }

        .meta-bottom strong {
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 0.3px;
            line-height: 1;
        }

        /* GOOGLE */
        .google-card {
            display: flex;
            flex-direction: row;
            overflow: hidden;
            padding: 0;
        }

        .shopify-logo {
            max-height: 60px;
        }

        .premier {
            width: 22px;
            background: #EA4335;
            color: white;
            font-size: 8px;
            font-weight: 700;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            justify-content: center;
            writing-mode: vertical-rl;
            text-orientation: mixed;
            transform: rotate(180deg);
        }

        .google-body {
            flex: 1;
            display: flex;
            background: white;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2px;
        }

        .google-word span {
            font-size: 26px;
            font-weight: 700;
        }

        .g1 {
            color: #4285F4;
        }

        .g2 {
            color: #EA4335;
        }

        .g3 {
            color: #FBBC05;
        }

        .g4 {
            color: #34A853;
        }

        .google-body strong {
            font-size: 13px;
            font-weight: 600;
            color: #5F6368;
        }

        /* RIGHT - TEXT */
        .achievement-right {
            width: 38%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 40px;
        }

        .text-wrap {
            max-width: 420px;
            text-align: right;
        }

        .text-wrap h2 {
            font-family: 'DM Serif Display', serif;
            font-size: 36px;
            font-weight: 400;
            line-height: 1.2;
            letter-spacing: normal;
            color: #222;
        }

        .label {
            font-family: 'Outfit', sans-serif;
            letter-spacing: 0.5px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2E1A47;
        }

        /* MOBILE */
        @media(max-width:900px) {
            .achievement-inner {
                flex-direction: column;
            }

            .achievement-left {
                width: 100%;
                border-right: none;
                border-bottom: 2px solid #222;
                padding: 30px 20px;
            }

            .logo-row {
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px;
            }

            .achievement-card {
                width: 140px;
                height: 105px;
            }

            .achievement-right {
                width: 100%;
                justify-content: center;
                padding: 40px 20px;
            }

            .text-wrap {
                text-align: center;
            }

            .text-wrap h2 {
                font-size: 30px;
            }
        }
    </style>