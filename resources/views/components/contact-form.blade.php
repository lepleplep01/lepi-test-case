<section class="py-16 md:py-24 bg-white">
    <div class="max-w-[1300px] mx-auto px-4">
        <div class="section-know-more">
            <div class="knowmore-inner">
                <div class="knowmore-image">
                    <img decoding="async" src="https://bolehdicoba.com/wp-content/uploads/2024/07/Group-40387-4.png"
                        alt="Want to know more?">
                </div>
                <div class="knowmore-text">
                    <div class="knowmore-title">
                        <h4 class="title">Want to know more?</h4>
                    </div>
                    <div class="knowmore-description">
                        <p class="description">Fill out this form below & consult with us!</p>
                    </div>
                    <div class="knowmore-form">
                        <form action="#" id="form_send_email" class="space-y-4">
                            <div class="form-group grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex flex-col">
                                    <label for="first_name">Your Name</label>
                                    <input type="text" id="first_name" name="first_name" placeholder="Your Name"
                                        class="form-control" required="required">
                                </div>
                                <div class="flex flex-col">
                                    <label for="brand_name">Brand Name</label>
                                    <input type="text" id="brand_name" name="brand_name" placeholder="Brand Name"
                                        class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group flex flex-col">
                                <label for="wa_number">WhatsApp Number</label>
                                <input type="text" id="wa_number" name="wa_number" placeholder="WhatsApp Number"
                                    class="form-control" required="required">
                            </div>
                            <div class="form-group flex flex-col">
                                <label for="industry">Industry</label>
                                <select name="industry" id="industry" class="form-select" required="required">
                                    <option value="" selected="selected">Select Options</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Home and Living">Home and Living</option>
                                    <option value="FMCG">FMCG</option>
                                    <option value="FnB">FnB</option>
                                    <option value="Moms and Baby">Moms and Baby</option>
                                    <option value="Accesories">Accesories</option>
                                    <option value="Corporate">Corporate</option>
                                    <option value="Services">Services</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group flex flex-col">
                                <label for="services">Services</label>
                                <select name="services" id="services" class="form-select" required="required">
                                    <option value="">Any services you're interested in?</option>
                                    <option value="Digital Advertising">Digital Advertising</option>
                                    <option value="Creative Content & Liveshopping">Creative Content & Liveshopping
                                    </option>
                                    <option value="Website Development & Maintenance">Website Development & Maintenance
                                    </option>
                                    <option value="Search Engine Optimization">Search Engine Optimization</option>
                                    <option value="Growth-Hack Consultation">Growth-Hack Consultation</option>
                                    <option value="Digital Marketing Training">Digital Marketing Training</option>
                                </select>
                            </div>
                            <div class="form-group flex flex-col">
                                <label for="get_information">How do you know BDD?</label>
                                <select name="get_information" id="get_information" class="form-select"
                                    required="required">
                                    <option value="">Select Options</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="TikTok">TikTok</option>
                                    <option value="Search Engine">Search Engine</option>
                                    <option value="WhatsApp Blasting">WhatsApp Blasting</option>
                                    <option value="Offline Events">Offline Events</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="knowmore-form-btn">
                                    <button id="send_email" class="btn btn-branding-secondary">
                                        Consult Now
                                        <svg class="w-5 h-5 inline-block ml-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="result"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .section-know-more {
            background-color: #FFFFFF;
            border: 2px solid #222222;
            border-radius: 24px;
            margin: 0 auto;
            max-width: 1300px;
            width: 100%;
            overflow: hidden;
        }

        .knowmore-inner {
            max-width: 1140px;
            margin: 70px auto 60px;
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }

        .knowmore-image {
            position: relative;
            flex: 1 0 0;
            margin-top: 30px;
        }

        .knowmore-image img {
            width: 100%;
            height: auto;
        }

        .knowmore-text {
            flex: 1 0 0;
        }

        .knowmore-title {
            margin-bottom: 15px;
        }

        .knowmore-title .title {
            color: #222222;
            font-family: 'Outfit', sans-serif;
            font-size: 36px;
            font-weight: 400;
            line-height: normal;
            margin: 0;
        }

        .knowmore-description {
            margin-bottom: 30px;
        }

        .knowmore-description .description {
            color: #222222;
            font-family: 'Outfit', sans-serif;
            font-size: 16px;
            font-weight: 300;
            line-height: normal;
            margin: 0;
        }

        .knowmore-form .form-group {
            margin-bottom: 15px;
        }

        .knowmore-form label {
            color: #222222;
            font-family: 'Outfit', sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: normal;
            margin-top: 0;
            margin-bottom: 10px;
            display: block;
        }

        .knowmore-form .form-control,
        .knowmore-form .form-select {
            color: #222;
            font-family: 'Outfit', sans-serif;
            font-size: 16px;
            font-weight: 300;
            line-height: normal;
            margin: 0;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #BABABA;
            background-color: #fff;
            transition: all 0.2s;
            width: 100%;
        }

        .knowmore-form .form-control:focus,
        .knowmore-form .form-select:focus {
            outline: none;
            border-color: #222;
        }

        .knowmore-form-btn {
            margin: 25px 20px 0 0;
            text-align: right;
        }

        .knowmore-form-btn .btn {
            background-color: #FFB14C;
            color: #222;
            font-family: 'Outfit', sans-serif;
            font-size: 18px;
            font-weight: 600;
            padding: 12px 35px;
            border-radius: 12px;
            border: 2px solid #222;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            box-shadow: none;
        }

        .knowmore-form-btn .btn:hover {
            background-color: #E8A145;
            box-shadow: 4px 4px 0px 0px #222;
            color: #000;
            transform: translate(-4px, -4px);
        }

        @media (max-width: 1200px) {
            .knowmore-inner {
                margin-left: 30px;
                margin-right: 30px;
            }
        }

        @media (max-width: 750px) {
            .section-know-more {
                border-width: 2px 0 0;
                border-radius: 0;
                margin-top: 0;
                margin-bottom: 0;
                padding: 0 15px;
                border-color: #222;
            }

            .knowmore-inner {
                max-width: none;
                margin: 50px auto 0;
                padding-bottom: 50px;
                gap: 0;
                flex-direction: column;
            }

            .knowmore-image {
                display: none;
            }

            .knowmore-title .title {
                font-size: 24px;
                line-height: 28px;
                text-align: center;
            }

            .knowmore-description .description {
                font-size: 14px;
                text-align: center;
            }

            .knowmore-form-btn {
                margin: 30px 0 0 0;
                text-align: center;
            }

            .knowmore-form-btn .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</section>
