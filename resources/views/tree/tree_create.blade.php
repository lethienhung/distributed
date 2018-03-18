<head>
    <meta charset="utf-8" />
    <title>Metronic Admin Theme #4 | Material Design Form Controls</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #4 for material design bootstrap inputs, input groups, custom checkboxes and radio controls and more"
        name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"
    />
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html">
                    <img src="posts/layouts/layout4/img/logo-light.png" alt="logo" class="logo-default" /> </a>
                <div class="menu-toggler sidebar-toggler">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
            <!-- END RESPONSIVE MENU TOGGLER -->

            <!-- BEGIN PAGE TOP -->
            <div class="page-top">

            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item start ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start ">
                                <a href="index.html" class="nav-link ">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">Dashboard 1</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="dashboard_2.html" class="nav-link ">
                                    <i class="icon-bulb"></i>
                                    <span class="title">Dashboard 2</span>
                                    <span class="badge badge-success">1</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="dashboard_3.html" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Dashboard 3</span>
                                    <span class="badge badge-danger">5</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">Features</h3>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">UI Features</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="ui_metronic_grid.html" class="nav-link ">
                                    <span class="title">Metronic Grid System</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_colors.html" class="nav-link ">
                                    <span class="title">Color Library</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_general.html" class="nav-link ">
                                    <span class="title">General Components</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_buttons.html" class="nav-link ">
                                    <span class="title">Buttons</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_buttons_spinner.html" class="nav-link ">
                                    <span class="title">Spinner Buttons</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_confirmations.html" class="nav-link ">
                                    <span class="title">Popover Confirmations</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_sweetalert.html" class="nav-link ">
                                    <span class="title">Bootstrap Sweet Alerts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_icons.html" class="nav-link ">
                                    <span class="title">Font Icons</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_socicons.html" class="nav-link ">
                                    <span class="title">Social Icons</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_typography.html" class="nav-link ">
                                    <span class="title">Typography</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_tabs_accordions_navs.html" class="nav-link ">
                                    <span class="title">Tabs, Accordions & Navs</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_timeline.html" class="nav-link ">
                                    <span class="title">Timeline 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_timeline_2.html" class="nav-link ">
                                    <span class="title">Timeline 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_timeline_horizontal.html" class="nav-link ">
                                    <span class="title">Horizontal Timeline</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_tree.html" class="nav-link ">
                                    <span class="title">Tree View</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <span class="title">Page Progress Bar</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="ui_page_progress_style_1.html" class="nav-link "> Flash </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="ui_page_progress_style_2.html" class="nav-link "> Big Counter </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_blockui.html" class="nav-link ">
                                    <span class="title">Block UI</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_bootstrap_growl.html" class="nav-link ">
                                    <span class="title">Bootstrap Growl Notifications</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_notific8.html" class="nav-link ">
                                    <span class="title">Notific8 Notifications</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_toastr.html" class="nav-link ">
                                    <span class="title">Toastr Notifications</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_bootbox.html" class="nav-link ">
                                    <span class="title">Bootbox Dialogs</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_alerts_api.html" class="nav-link ">
                                    <span class="title">Metronic Alerts API</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_session_timeout.html" class="nav-link ">
                                    <span class="title">Session Timeout</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_idle_timeout.html" class="nav-link ">
                                    <span class="title">User Idle Timeout</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_modals.html" class="nav-link ">
                                    <span class="title">Modals</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_extended_modals.html" class="nav-link ">
                                    <span class="title">Extended Modals</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_tiles.html" class="nav-link ">
                                    <span class="title">Tiles</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_datepaginator.html" class="nav-link ">
                                    <span class="title">Date Paginator</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_nestable.html" class="nav-link ">
                                    <span class="title">Nestable List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-puzzle"></i>
                            <span class="title">Components</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="components_date_time_pickers.html" class="nav-link ">
                                    <span class="title">Date & Time Pickers</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_color_pickers.html" class="nav-link ">
                                    <span class="title">Color Pickers</span>
                                    <span class="badge badge-danger">2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_select2.html" class="nav-link ">
                                    <span class="title">Select2 Dropdowns</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_select.html" class="nav-link ">
                                    <span class="title">Bootstrap Select</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_multi_select.html" class="nav-link ">
                                    <span class="title">Bootstrap Multiple Select</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_multiselect_dropdown.html" class="nav-link ">
                                    <span class="title">Bootstrap Multiselect Dropdowns</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_select_splitter.html" class="nav-link ">
                                    <span class="title">Select Splitter</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_clipboard.html" class="nav-link ">
                                    <span class="title">Clipboard</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_typeahead.html" class="nav-link ">
                                    <span class="title">Typeahead Autocomplete</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_tagsinput.html" class="nav-link ">
                                    <span class="title">Bootstrap Tagsinput</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_switch.html" class="nav-link ">
                                    <span class="title">Bootstrap Switch</span>
                                    <span class="badge badge-success">6</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_maxlength.html" class="nav-link ">
                                    <span class="title">Bootstrap Maxlength</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_fileinput.html" class="nav-link ">
                                    <span class="title">Bootstrap File Input</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_touchspin.html" class="nav-link ">
                                    <span class="title">Bootstrap Touchspin</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_form_tools.html" class="nav-link ">
                                    <span class="title">Form Widgets & Tools</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_context_menu.html" class="nav-link ">
                                    <span class="title">Context Menu</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_editors.html" class="nav-link ">
                                    <span class="title">Markdown & WYSIWYG Editors</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_code_editors.html" class="nav-link ">
                                    <span class="title">Code Editors</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_ion_sliders.html" class="nav-link ">
                                    <span class="title">Ion Range Sliders</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_noui_sliders.html" class="nav-link ">
                                    <span class="title">NoUI Range Sliders</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_knob_dials.html" class="nav-link ">
                                    <span class="title">Knob Circle Dials</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">Form Stuff</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="form_controls.html" class="nav-link ">
                                    <span class="title">Bootstrap Form
                                        <br>Controls</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_controls_md.html" class="nav-link ">
                                    <span class="title">Material Design
                                        <br>Form Controls</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_validation.html" class="nav-link ">
                                    <span class="title">Form Validation</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_validation_states_md.html" class="nav-link ">
                                    <span class="title">Material Design
                                        <br>Form Validation States</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_validation_md.html" class="nav-link ">
                                    <span class="title">Material Design
                                        <br>Form Validation</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_layouts.html" class="nav-link ">
                                    <span class="title">Form Layouts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_repeater.html" class="nav-link ">
                                    <span class="title">Form Repeater</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_input_mask.html" class="nav-link ">
                                    <span class="title">Form Input Mask</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_editable.html" class="nav-link ">
                                    <span class="title">Form X-editable</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_wizard.html" class="nav-link ">
                                    <span class="title">Form Wizard</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_icheck.html" class="nav-link ">
                                    <span class="title">iCheck Controls</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_image_crop.html" class="nav-link ">
                                    <span class="title">Image Cropping</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_fileupload.html" class="nav-link ">
                                    <span class="title">Multiple File Upload</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_dropzone.html" class="nav-link ">
                                    <span class="title">Dropzone File Upload</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-bulb"></i>
                            <span class="title">Elements</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="elements_steps.html" class="nav-link ">
                                    <span class="title">Steps</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_lists.html" class="nav-link ">
                                    <span class="title">Lists</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_ribbons.html" class="nav-link ">
                                    <span class="title">Ribbons</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_overlay.html" class="nav-link ">
                                    <span class="title">Overlays</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_cards.html" class="nav-link ">
                                    <span class="title">User Cards</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  active open">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-briefcase"></i>
                            <span class="title">Tables</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  active open">
                                <a href="table_static_basic.html" class="nav-link ">
                                    <span class="title">Basic Tables</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_static_responsive.html" class="nav-link ">
                                    <span class="title">Responsive Tables</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_bootstrap.html" class="nav-link ">
                                    <span class="title">Bootstrap Tables</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <span class="title">Datatables</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="?p=" class="nav-link nav-toggle">
                            <i class="icon-wallet"></i>
                            <span class="title">Portlets</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="portlet_boxed.html" class="nav-link ">
                                    <span class="title">Boxed Portlets</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_light.html" class="nav-link ">
                                    <span class="title">Light Portlets</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_solid.html" class="nav-link ">
                                    <span class="title">Solid Portlets</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_ajax.html" class="nav-link ">
                                    <span class="title">Ajax Portlets</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_draggable.html" class="nav-link ">
                                    <span class="title">Draggable Portlets</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Charts</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="charts_amcharts.html" class="nav-link ">
                                    <span class="title">amChart</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_flotcharts.html" class="nav-link ">
                                    <span class="title">Flot Charts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_flowchart.html" class="nav-link ">
                                    <span class="title">Flow Charts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_google.html" class="nav-link ">
                                    <span class="title">Google Charts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_echarts.html" class="nav-link ">
                                    <span class="title">eCharts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_morris.html" class="nav-link ">
                                    <span class="title">Morris Charts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <span class="title">HighCharts</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="charts_highcharts.html" class="nav-link "> HighCharts </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="charts_highstock.html" class="nav-link "> HighStock </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="charts_highmaps.html" class="nav-link "> HighMaps </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1>Material Design Form Controls
                            <small>material design bootstrap inputs, input groups, custom checkboxes and radio controls and more</small>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->

                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE BREADCRUMB -->
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Form Stuff</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet light bordered" id="tree_create_form">
                            <div class="portlet-title">
                                <div class="caption font-red-sunglo">
                                    <i class="icon-settings font-red-sunglo"></i>
                                    <span class="caption-subject bold uppercase"> Line Inputs</span>
                                </div>

                            </div>
                            <create-tree></create-tree>
                        </div>
                        <template id="create_tree_template">
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" id="form_control_1" v-model="name" placeholder="Enter your name">
                                        <label for="form_control_1">Tree Name</label>
                                        <span class="help-block">Some help goes here...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" id="form_control_1" v-model="treeId" placeholder="Enter your email">
                                        <label for="form_control_1">Tree ID</label>
                                        <span class="help-block">Some help goes here...</span>
                                    </div>
                                    <div class="form-group form-md-line-input has-success">
                                        <input type="text" class="form-control" id="form_control_1" v-model="locationLat" placeholder="Success state">
                                        <label for="form_control_1">Location lat</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-success">
                                        <input type="text" class="form-control" id="form_control_1" v-model="locationLong" placeholder="Warning state">
                                        <label for="form_control_1">Location Long</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-error">
                                        <input type="text" class="form-control" id="form_control_1" v-model="age" placeholder="Error state">
                                        <label for="form_control_1">Tree Age</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <input type="text" class="form-control" id="form_control_1" v-model="capacity" placeholder="Info state">
                                        <label for="form_control_1">Lượng nước cần tưới</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <select class="form-control" v-model="category" id="form_control_1">
                                            <option value="Cây to">Cây to</option>
                                            <option value="Cây Nhỏ">Cây nhỏ</option>
                                        </select>
                                        <label for="form_control_1">Category</label>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <textarea class="form-control" v-model="note" rows="3" placeholder="Enter more text"></textarea>
                                        <label for="form_control_1">Note</label>
                                    </div>

                                </div>
                                <div class="form-actions noborder">
                                    <button type="button" class="btn blue" @click="createTree">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                                <ul v-for="tree in treeList">
                                    <li>@{{tree.name}}</li>
                                </ul>
                            </div>
                        </template>
                        <!-- END SAMPLE FORM PORTLET-->
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-red-sunglo">
                                    <span class="caption-subject bold uppercase"> Input Groups & Icons</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form role="form">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group form-md-line-input has-success">
                                                    <div class="input-icon">
                                                        <input type="text" class="form-control" placeholder="Left icon">
                                                        <label for="form_control_1">Regular input</label>
                                                        <span class="help-block">Some help goes here...</span>
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-md-line-input has-warning">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Warning state">
                                                    <label for="form_control_1">Warning input</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-md-line-input has-error">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Email Address">
                                                        <label for="form_control_1">Input Group</label>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group form-md-line-input has-success">
                                                    <div class="input-icon">
                                                        <input type="text" class="form-control" placeholder="Left icon">
                                                        <label for="form_control_1">Regular input</label>
                                                        <span class="help-block">Some help goes here...</span>
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-md-line-input has-error">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Email Address">
                                                        <span class="help-block">Some help goes here...</span>
                                                        <label for="form_control_1">Input Group1</label>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-md-line-input has-error">
                                                    <div class="input-group">
                                                        <div class="input-group-control">
                                                            <input type="text" class="form-control" placeholder="Placeholder">
                                                            <label for="form_control_1">Input Group</label>
                                                        </div>
                                                        <span class="input-group-btn btn-right">
                                                            <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                                <li>
                                                                    <a href="javascript:;">Action</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">Another action</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">Something else here</a>
                                                                </li>
                                                                <li class="divider"> </li>
                                                                <li>
                                                                    <a href="javascript:;">Separated link</a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-success">
                                            <div class="input-icon right">
                                                <input type="text" class="form-control" placeholder="Right icon">
                                                <label for="form_control_1">Input With Hint</label>
                                                <span class="help-block">Some help goes here...</span>
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Email Address">
                                                <label for="form_control_1">Input Group</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-error">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Email Address">
                                                <label for="form_control_1">Input Group</label>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-warning">
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control">
                                                <span class="help-block">Some help goes here...</span>
                                                <span class="input-group-addon">.00</span>
                                                <label for="form_control_1">Input Group</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-warning">
                                            <div class="input-group">
                                                <span class="input-group-btn btn-left">
                                                    <button class="btn blue-madison" type="button">Go!</button>
                                                </span>
                                                <div class="input-group-control">
                                                    <input type="text" class="form-control edited" placeholder="Placeholder">
                                                    <label for="form_control_1">Input Group</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-error">
                                            <div class="input-group">
                                                <div class="input-group-control">
                                                    <input type="text" class="form-control" placeholder="Placeholder">
                                                    <label for="form_control_1">Input Group</label>
                                                </div>
                                                <span class="input-group-btn btn-right">
                                                    <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li>
                                                            <a href="javascript:;">Action</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">Another action</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">Something else here</a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <span class="input-group-btn btn-left">
                                                    <button class="btn red-intense" type="button">Go!</button>
                                                </span>
                                                <div class="input-group-control">
                                                    <input type="text" class="form-control" placeholder="Input group">
                                                    <span class="help-block">Some help goes here...</span>
                                                    <label for="form_control_1">Input Group</label>
                                                </div>
                                                <span class="input-group-btn btn-right">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li>
                                                            <a href="javascript:;">Action</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">Another action</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">Something else here</a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-btn btn-left">
                                                    <button class="btn red-intense" type="button">Go!</button>
                                                </span>
                                                <div class="input-group-control">
                                                    <input type="text" class="form-control input-sm" placeholder=".input-sm">
                                                    <label for="form_control_1">Small Input Group</label>
                                                </div>
                                                <span class="input-group-btn btn-right">
                                                    <button class="btn green-haze" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-btn btn-left">
                                                    <button class="btn red-intense" type="button">Go!</button>
                                                </span>
                                                <div class="input-group-control">
                                                    <input type="text" class="form-control input-lg" placeholder=".input-lg">
                                                    <label for="form_control_1">Large Input Group</label>
                                                </div>
                                                <span class="input-group-btn btn-right">
                                                    <button class="btn green-haze" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions noborder">
                                        <button type="button" class="btn blue">Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END SAMPLE FORM PORTLET-->
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-red-sunglo">
                                    <i class="icon-check font-red-sunglo"></i>
                                    <span class="caption-subject bold uppercase"> Checkboxes</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a class="btn btn-sm red dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Settings
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-pencil"></i> Edit </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-ban"></i> Ban </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;"> Make admin </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form role="form">
                                    <div class="form-group form-md-checkboxes">
                                        <label>Checkboxes</label>
                                        <div class="md-checkbox-list">
                                            <div class="md-checkbox">
                                                <input type="checkbox" id="checkbox1" class="md-check">
                                                <label for="checkbox1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 1 </label>
                                            </div>
                                            <div class="md-checkbox">
                                                <input type="checkbox" id="checkbox2" class="md-check" checked>
                                                <label for="checkbox2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 2 </label>
                                            </div>
                                            <div class="md-checkbox">
                                                <input type="checkbox" id="checkbox3" class="md-check">
                                                <label for="checkbox3">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 3 </label>
                                            </div>
                                            <div class="md-checkbox">
                                                <input type="checkbox" id="checkbox4" disabled class="md-check">
                                                <label for="checkbox4">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Disabled </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-checkboxes">
                                        <label>Inline Checkboxes</label>
                                        <div class="md-checkbox-inline">
                                            <div class="md-checkbox">
                                                <input type="checkbox" id="checkbox6" class="md-check">
                                                <label for="checkbox6">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 1 </label>
                                            </div>
                                            <div class="md-checkbox">
                                                <input type="checkbox" id="checkbox7" class="md-check" checked>
                                                <label for="checkbox7">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 2 </label>
                                            </div>
                                            <div class="md-checkbox">
                                                <input type="checkbox" id="checkbox8" class="md-check">
                                                <label for="checkbox8">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 3 </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-checkboxes">
                                        <label>Checkboxes</label>
                                        <div class="md-checkbox-list">
                                            <div class="md-checkbox has-success">
                                                <input type="checkbox" id="checkbox9" class="md-check">
                                                <label for="checkbox9">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 1 </label>
                                            </div>
                                            <div class="md-checkbox has-error">
                                                <input type="checkbox" id="checkbox10" class="md-check" checked>
                                                <label for="checkbox10">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 2 </label>
                                            </div>
                                            <div class="md-checkbox has-warning">
                                                <input type="checkbox" id="checkbox11" class="md-check">
                                                <label for="checkbox11">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 3 </label>
                                            </div>
                                            <div class="md-checkbox has-info">
                                                <input type="checkbox" id="checkbox12" disabled class="md-check">
                                                <label for="checkbox12">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Disabled </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-checkboxes">
                                        <label>Inline Checkboxes</label>
                                        <div class="md-checkbox-inline">
                                            <div class="md-checkbox has-success">
                                                <input type="checkbox" id="checkbox14" class="md-check">
                                                <label for="checkbox14">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 1 </label>
                                            </div>
                                            <div class="md-checkbox has-error">
                                                <input type="checkbox" id="checkbox15" class="md-check" checked>
                                                <label for="checkbox15">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 2 </label>
                                            </div>
                                            <div class="md-checkbox has-info">
                                                <input type="checkbox" id="checkbox16" class="md-check">
                                                <label for="checkbox16">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Option 3 </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END SAMPLE FORM PORTLET-->
                    </div>
                </div>

                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free"
                target="_blank">Purchase Metronic!</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
    <script>
        // Initialize Firebase
        
    </script>
    <script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="/js/axios.min.js"></script>
    <script src="/js/vue.js"></script>
    <script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
    <script src="/assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
    <script src="/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function () {
            $('#clickmewow').click(function () {
                $('#radio1003').attr('checked', 'checked');
            });
        })
    </script>
    <script>
        var config = {
            apiKey: "AIzaSyDzWPPOVo6tiil035ZOfTq9eHTdQObjjsI",
            authDomain: "distributed-3366d.firebaseapp.com",
            databaseURL: "https://distributed-3366d.firebaseio.com",
            projectId: "distributed-3366d",
            storageBucket: "distributed-3366d.appspot.com",
            messagingSenderId: "118852300262"
        };
        firebase.initializeApp(config);
        Vue.component('create-tree', {
            template: "#create_tree_template",
            data() {
                return {
                    treeId: "",
                    name: "",
                    locationLat: "",
                    locationLong: "",
                    age: "",
                    category: "",
                    created_at: new Date(),
                    capacity: "",
                    note: "",
                    treeList: []
                };
            },
            created() {
                this.createTreeList();
            },

            methods: {
                createTreeList() {
                    let treeList = [];
                    let myDataRef = firebase.database().ref("tree")
                        .on("value", function (snapshot) {
                            treeList = snapshot.val();
                            console.log(treeList)
                        });
                    this.treeList = treeList
                },
                createTree() {
                    axios.post("/create/tree", {
                            treeId: this.treeId,
                            name: this.name,
                            locationLat: this.locationLat,
                            locationLong: this.locationLong,
                            age: this.age,
                            category: this.category,
                            capacity: this.capacity,
                            created_at: this.created_at,
                            note: this.note,
                            status: "Sống"
                        })
                        .then(response => {
                            console.log(response.data)
                        });
                }
            },
        });
        new Vue({
            el: "#tree_create_form"
        });
    </script>
</body>