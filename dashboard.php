<?php include("header.php")?>

        <div class="page-body">
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Dashboard
                                <small>Admin panel</small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends -->

            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-dashboard">
                                    <div class="d-flex">
                                        <img class="flex-shrink-0 me-3" src="assets/images/dashboard-icons/document.png" alt="Generic placeholder image">
                                        <div class="text-end">
                                            <h4 class="mt-0 counter font-primary">2569</h4>
                                            <span>New projects</span>
                                        </div>
                                    </div>
                                    <div class="dashboard-chart-container">
                                        <div id="line-chart-sparkline-dashboard1" class="flot-chart-placeholder line-chart-sparkline"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-dashboard">
                                    <div class="d-flex">
                                        <img class="flex-shrink-0 me-3" src="assets/images/dashboard-icons/operator.png" alt="Generic placeholder image">
                                        <div class="text-end">
                                            <h4 class="mt-0 counter font-secondary">346</h4>
                                            <span>New Clients</span>
                                        </div>
                                    </div>
                                    <div class="dashboard-chart-container">
                                        <div id="line-chart-sparkline-dashboard2" class="flot-chart-placeholder line-chart-sparkline"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-dashboard">
                                    <div class="d-flex">
                                        <img class="flex-shrink-0 me-3" src="assets/images/dashboard-icons/chat.png" alt="Generic placeholder image">
                                        <div class="text-end">
                                            <h4 class="mt-0 counter font-success">026</h4>
                                            <span>Message</span>
                                        </div>
                                    </div>
                                    <div class="dashboard-chart-container">
                                        <div id="line-chart-sparkline-dashboard3" class="flot-chart-placeholder line-chart-sparkline"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-dashboard">
                                    <div class="d-flex">
                                        <img class="flex-shrink-0 me-3" src="assets/images/dashboard-icons/like.png" alt="Generic placeholder image">
                                        <div class="text-end">
                                            <h4 class="mt-0 counter font-info">9563</h4>
                                            <span>New Likes</span>
                                        </div>
                                    </div>
                                    <div class="dashboard-chart-container">
                                        <div id="line-chart-sparkline-dashboard4" class="flot-chart-placeholder line-chart-sparkline"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Top Sale</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left "></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="top-sale-chart">
                                    <canvas  id="myLineCharts"></canvas>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
    &lt;div class=&quot;top-sale-chart&quot;&gt;&lt;canvas id=&quot;myLineCharts&quot;&gt;&lt;/canvas&gt;&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card default-widget-count">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="me-3 left b-primary">
                                        <div class="bg bg-primary"></div>
                                        <i class="icon-user"></i>
                                    </div>
                                    <div class="align-self-center">
                                        <h4 class="mt-0 counter">2560146</h4>
                                        <span>Happy Clients </span>
                                        <i class="icon-user icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card default-widget-count">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="me-3 left b-secondary">
                                        <div class="bg bg-secondary"></div>
                                        <i class="icon-package"></i>
                                    </div>
                                    <div class="align-self-center">
                                        <h4 class="mt-0 counter">95314</h4>
                                        <span>Order Complate </span>
                                        <i class="icon-package icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card default-widget-count">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="me-3 left b-success">
                                        <div class="bg bg-success"></div>
                                        <i class="icon-money"></i>
                                    </div>
                                    <div class="align-self-center">
                                        <h4 class="mt-0 counter">1035976</h4>
                                        <span>Early income </span>
                                        <i class="icon-money icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                <!-- <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
    &lt;div class=&quot;support-ticket&quot;&gt;
        &lt;div class=&quot;row table-responsive-sm&quot;&gt;
            &lt;table class=&quot;table table-bordernone&quot;&gt;
                &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;td class=&quot;pt-0&quot;&gt;
                        &lt;div class=&quot;bg-primary left&quot;&gt;A&lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                        &lt;span class=&quot;pt-0&quot;&gt;Aredo jeko&lt;/span&gt;
                        &lt;h6 class=&quot;pt-0&quot;&gt;25 july 2019&lt;/h6&gt;
                    &lt;/td&gt;
                    &lt;td class=&quot;pt-0&quot;&gt;
                        &lt;p&gt;Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been&lt;/p&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;
                        &lt;div class=&quot;bg-secondary left&quot;&gt;C&lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                        &lt;span&gt;Aredo jeko&lt;/span&gt;
                        &lt;h6&gt;25 july 2019&lt;/h6&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                        &lt;p&gt;Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been&lt;/p&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td class=&quot;pb-0&quot;&gt;
                        &lt;div class=&quot;bg-success left&quot;&gt;H&lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                        &lt;span&gt;Aredo jeko&lt;/span&gt;
                        &lt;h6&gt;25 july 2019&lt;/h6&gt;
                    &lt;/td&gt;
                    &lt;td class=&quot;pb-0&quot;&gt;
                        &lt;p&gt;Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been&lt;/p&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends -->
        </div>
        <!--Page Body Ends-->
    </div>
    <!--Page Body Ends-->

<?php include("footer.php")?>