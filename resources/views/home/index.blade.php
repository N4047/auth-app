<x-dashboard-layout>
    <title>{{__('utils.pricing_tables')}}</title>
    <section class="pricing-tables content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center">
                <h1>{{__('home.pick_your_premium')}}</h1>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">{{__('home.basic_plan')}}</div>
                            <div class="price">$3.99 <span class="price-frequency">/ {{__('home.month')}}</span></div>
                        </div>
                        <div class="content">
                            <ul class="features-list">
                                <li>✓ {{__('home.unlimited_tab_containers')}}</li>
                                <li>✓ {{__('home.tab_usage_analitics')}}</li>
                                <li>✓ {{__('home.search_tabs')}}</li>
                            </ul>
                            <div class="button"><a href="#" class="btn btn-outline pricing-btn">
                                    {{__('home.get_started')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="pricing featured">
                        <div class="listing-badges">
                            <span class="featured"> {{__('home.featured')}}</span>
                        </div>
                        <div class="price-header price-header-2">
                            <div class="title"> {{__('home.professional')}}</div>
                            <div class="price">$6.99 <span class="price-frequency">/ {{__('home.month')}}</span></div>
                        </div>
                        <div class="content">
                            <ul class="features-list">
                                <li>✓ {{__('home.unlimited_tab_containers')}}</li>
                                <li>✓ {{__('home.tab_usage_analitics')}}</li>
                                <li>✓ {{__('home.search_tabs')}}</li>
                                <li>✓ {{__('home.sync_devices')}}</li>

                            </ul>
                            <div class="button"><a href="#"
                                    class="btn btn-outline pricing-btn button-theme">{{__('home.get_started')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">{{__('home.basic_plan')}} </div>
                            <div class="price">$41.99 <span class="price-frequency">/ {{__('home.year')}}</span></div>
                        </div>

                        <div class="content">
                            <ul class="features-list">
                                <li>✓ {{__('home.unlimited_tab_containers')}}</li>
                                <li>✓ {{__('home.tab_usage_analitics')}}</li>
                                <li>✓ {{__('home.search_tabs')}}</li>
                            </ul>
                            <div class="button"><a href="#" class="btn btn-outline pricing-btn">
                                    {{__('home.get_started')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </html>

</x-dashboard-layout>

<style>
    /* Your CSS styles here */
    section {
        padding: 60px 0;
        display: flex;
        justify-content: center;
        align-items: center;

    }


    .row {
        display: flex;
        flex-wrap: wrap;
        margin: -15px;
    }

    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }



    .col-sm-12 {
        flex: 0 0 33.333333%;
        max-width: 30.333333%;
        padding: 15px;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .main-title {
        margin-bottom: 50px;
        text-align: center;
    }

    .main-title h1 {
        font-size: 35px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .main-title h2 {
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .main-title p {
        font-size: 18px;
        margin-bottom: 0;
    }

    .pricing {
        text-align: center;
        margin-bottom: 30px;
        position: relative;
        z-index: 9;
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
        border-radius: 20px;
        transition: .1s ease-in;
    }

    .pricing:hover{
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.272);   
    }

    .pricing .price-header {
        width: 100%;

        padding: 35px 20px;
    }

    .pricing .price-header .title {
        margin: 0 0 10px;
        font-size: 20px;
        font-weight: 600;
        color: #37404d;
    }

    .pricing .price-header .price {
        font-size: 35px;
        font-weight: 300;
        margin: 0;
        color: #37404d;
    }

    .pricing .content {
        padding: 20px 20px 30px;

    }

    .pricing .content ul {
        margin: 0 0 20px;
    }

    .pricing .content ul li {
        padding: 8px 0;
        font-size: 16px;
        color: #656565;
    }

    .pricing.featured .listing-badges {
        position: absolute;
        top: 0;
        z-index: 999;
        right: 0;
        width: 100%;
        display: block;
        font-size: 15px;
        padding: 0;
        overflow: hidden;
        height: 100px;
    }

    .pricing.featured .featured {
        float: left;
        transform: rotate(-45deg);
        left: -67px;
        top: 17px;
        position: relative;
        text-align: center;
        width: 200px;
        font-size: 13px;
        margin: 0;
        padding: 7px 10px;
        font-weight: 500;
        color: #fff;
    }

    .pricing.featured .featured {
        background: linear-gradient(to right, #5691e2, #21e1e7, #34c9ea);

    }

    .btn-outline {
        border-radius: 50px;
        border: solid 1px linear-gradient(to right, #5691e2, #21e1e7, #34c9ea);

        color: linear-gradient(to right, #5691e2, #21e1e7, #34c9ea);


        padding: 10px 50px;
    }

    .btn-outline:hover {
        border: solid 1px linear-gradient(to right, #5691e2, #21e1e7, #34c9ea);

        background: linear-gradient(to right, #5691e2, #21e1e7, #34c9ea);

        color: #fff;
    }

    .button-theme {
        background: linear-gradient(to right, #5691e2, #21e1e7, #34c9ea);

        color: #FFF !important;
    }

    .button-theme:hover {
        background: linear-gradient(to right, #5691e2, #21e1e7, #34c9ea);

        color: #fff;
    }

    .pricing-btn {
        padding: 7px 25px 5px;
        border-radius: 2px;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 1.5px;
        text-transform: uppercase;

        padding: 10px 50px;
    }

    .features-list {
        list-style-type: none;
        /* Use list-style-type to remove default bullet points */
        padding-left: 0;
    }

    .features-list {
        list-style-type: none;
        padding-left: 0;
    }

    .features-list li {
        margin-left: 20px;
        margin-bottom: 8px;
        font-size: 16px;
        line-height: 1.5;
    }



    .price-frequency {
        font-size: 14px;
        color: #000000;
        margin-top: 5px;
    }

    .price-frequency span {
        margin: 0 5px;
    }




    @media (max-width: 768px) {
        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>