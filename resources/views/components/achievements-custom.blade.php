<section class="achievement-section">
    <div class="achievement-inner">

        <!-- LEFT LOGOS -->
        <div class="achievement-left show">
            <div class="logo-row max-w-full gap-6">

                <!-- Meta Partner -->
                <div class="achievement-card">
                    <div class="inner-frame">
                        <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40163.png">
                    </div>
                </div>

                <!-- Meta Certified -->
                <div class="achievement-card">
                    <div class="inner-frame">
                        <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40130.png">
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
                <div class="achievement-card">
                    <div class="inner-frame">
                        <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40163-1.png">
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT TEXT -->
        <div class="achievement-right show">
            <div class="text-wrap">
                <p class="label">OUR ACHIEVEMENTS</p>
                <h2 class="font-outfitserif">
                    A Legacy of
                    <br>Excellence:Our<br>
                    Journey of<br>
                    Achievements
                </h2>
            </div>
        </div>

    </div>
</section>

<style>
    .achievement-section {
        background: #ADC2E6;
        border-top: 1.5px solid #222;
        border-bottom: 1.5px solid #222;
        overflow: hidden;
    }

    .achievement-inner {
        display: flex;
        flex-direction: row;
        min-height: 360px;
    }

    /* LEFT - LOGOS */
    .achievement-left {
        width: 66%;
        border-right: 1.5px solid #222;
        display: flex;
        align-items: center;
        padding: 40px 40px;
        justify-content: center;
    }

    .logo-row {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 40px;
        width: 100%;
        max-width: 100%;
        flex-wrap: nowrap;
    }

    /* CARD BASE */
    .achievement-card {
        width: 140px;
        height: 110px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        transition: .22s cubic-bezier(.2, .7, .2, 1);
        background: transparent;
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
        padding: 5px;
        background: transparent;
    }

    .inner-frame img {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
    }

    /* META CARD */
    /* REMOVED META SPECIFIC STYLES FOR CLEANER LOOK */


    .shopify-logo {
        max-height: 60px;
    }


    /* RIGHT - TEXT */
    .achievement-right {
        width: 34%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 30px;
    }

    .text-wrap {
        max-width: 420px;
        text-align: right;
    }

    .text-wrap h2 {
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
            border-bottom: 1.5px solid #222;
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
