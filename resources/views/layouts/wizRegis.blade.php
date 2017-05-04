<html>
    <head>
        <title>Registration @yield('title')</title>
        
    </head>
    <body>
        @section('sidebar')
            <div class="container">
	<div class="row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
        <div id="wid-id-0">
            <header role="heading">
                <h2>Registration For New Travel Agency</h2>
            </header>
            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body">

                    <div class="row">
                        <form id="wizard-1" novalidate="novalidate">
                            <div id="bootstrap-wizard-1" class="col-sm-12">
                                <div class="form-bootstrapWizard">
                                    <ul class="bootstrapWizard form-wizard">
                                        <li class="active" data-target="#step1">
                                            <a href="#tab1" data-toggle="tab" class="active"> <span class="step">1</span> <span class="title">Basic information</span> </a>
                                        </li>
                                        <li data-target="#step2" class="">
                                            <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Billing information</span> </a>
                                        </li>
                                        <li data-target="#step3" class="">
                                            <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Domain Setup</span> </a>
                                        </li>
                                        <li data-target="#step4">
                                            <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Save Form</span> </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <br>
                                        <h3><strong>Step 1 </strong> - Basic Information</h3>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="pager wizard no-margin">
                                                        <li class="previous disabled">
                                                            <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                                        </li>
                                                        <li class="next">
                                                            <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <br>
                                        <h3><strong>Step 2</strong> - Billing Information</h3>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="pager wizard no-margin">
                                                        <li class="previous">
                                                            <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                                        </li>
                                                        <li class="next disabled">
                                                            <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <br>
                                        <h3><strong>Step 3</strong> - Domain Setup</h3>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="pager wizard no-margin">
                                                        <li class="previous">
                                                            <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                                        </li>
                                                        <li class="next disabled">
                                                            <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <br>
                                        <h3><strong>Step 4</strong> - Save Form</h3>
                                        <br>
                                        <h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Complete</strong></h1>
                                        <h4 class="text-center">Click next to finish</h4>
                                        <br>
                                        <br>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="pager wizard no-margin">
                                                        <li class="previous">
                                                            <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                                        </li>
                                                        <li class="next disabled">
                                                            <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->

    </article>
</div>
</div>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>