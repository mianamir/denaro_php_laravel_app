<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}" />

        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Default Description')">
        
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles-end')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        @langRTL
            {{ Html::style(elixir('css/backend-rtl.css')) }}
            {{ Html::style(elixir('css/rtl.css')) }}
        @else
            {{ Html::style(elixir('css/backend.css')) }}
        @endif

        @yield('after-styles-end')


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        {{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        {{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}
        <![endif]-->


        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/AdminLTE.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/skins/_all-skins.min.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        @yield('css')
        {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
        <link rel="stylesheet" href="{{asset('datatables/media/css/jquery.dataTables.min.css')}}">
        <script src="{{asset('datatables/media/js/jquery.dataTables.min.js')}}"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        @yield('after-styles')


    </head>
    <body class="skin-{{ config('backend.theme') }} {{ config('backend.layout') }}">
        @include('includes.partials.logged-in-as')

        <div class="wrapper">
            @include('backend.includes.header')
            @include('backend.includes.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @yield('page-header')

                    {{-- Change to Breadcrumbs::render() if you want it to error to remind you to create the breadcrumbs for the given route --}}
                    {!! Breadcrumbs::renderIfExists() !!}
                </section>

                <!-- Main content -->
                <section class="content">
                    @include('includes.partials.messages')
                    @yield('content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            @include('backend.includes.footer')
        </div><!-- ./wrapper -->

        <!-- JavaScripts -->
        {{--{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}--}}


        {{ Html::script('js/vendor/bootstrap/bootstrap.min.js') }}

        @yield('before-scripts-end')
        {{ HTML::script(elixir('js/backend.js')) }}
        @yield('after-scripts-end')



        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

        <!-- AdminLTE App -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/js/app.min.js"></script>

        @yield('scripts')



        {{--<script>--}}
            {{--jQuery(document).ready(function() {--}}
               {{--//$('#myTable').dataTables();--}}

                {{--$( "#purchase_date" ).datepicker();--}}
                {{--$( "#sale_date" ).datepicker();--}}



                {{--// Sale Creation Script--}}
                {{--$("#discount").change(function () {--}}
                {{--var noOfItems = $("#no_of_items").val();--}}
                {{--var salePrice = $("#sale_price").val();--}}
                {{--var discount = $("#discount").val();--}}
                {{--var totalSaleAmountTemp = 0;--}}
                {{--var totalSaleAmountWithDiscount = 0;--}}
                {{--var totalSaleAmount = 0;--}}
                {{--var remainingAmount = 0;--}}
                {{--if(noOfItems != 0){--}}
                    {{--totalSaleAmountTemp = noOfItems * salePrice;--}}
                {{--}else {--}}
                    {{--totalSaleAmountTemp = salePrice;--}}
                {{--}--}}
                {{--if(discount != 0){--}}
                    {{--totalSaleAmountWithDiscount = (totalSaleAmountTemp / 100) * discount;--}}
                    {{--totalSaleAmount = totalSaleAmountTemp - totalSaleAmountWithDiscount;--}}
                {{--}else {--}}
                   {{--// var totalSaleAmountWithDiscount = (totalSaleAmountTemp / 100) * 1;--}}
                    {{--totalSaleAmount = totalSaleAmountTemp;--}}
                {{--}--}}
                {{--$("#totalSaleAmount").val(totalSaleAmount);--}}
                {{--}); // Sale Creation Script Ends--}}


            {{--});--}}




                {{--jQuery.fn.extend({--}}
                {{--treed: function (o) {--}}

                    {{--var openedClass = 'glyphicon-minus-sign';--}}
                    {{--var closedClass = 'glyphicon-plus-sign';--}}

                    {{--if (typeof o != 'undefined'){--}}
                        {{--if (typeof o.openedClass != 'undefined'){--}}
                            {{--openedClass = o.openedClass;--}}
                        {{--}--}}
                        {{--if (typeof o.closedClass != 'undefined'){--}}
                            {{--closedClass = o.closedClass;--}}
                        {{--}--}}
                    {{--};--}}

                    {{--/* initialize each of the top levels */--}}
                    {{--var tree = jQuery(this);--}}
                    {{--tree.addClass("tree");--}}
                    {{--tree.find('li').has("ul").each(function () {--}}
                        {{--var branch = $(this);--}}
                        {{--branch.prepend("");--}}
                        {{--branch.addClass('branch');--}}
                        {{--branch.on('click', function (e) {--}}
                            {{--if (this == e.target) {--}}
                                {{--var icon = jQuery(this).children('i:first');--}}
                                {{--icon.toggleClass(openedClass + " " + closedClass);--}}
                                {{--jQuery(this).children().children().toggle();--}}
                            {{--}--}}
                        {{--})--}}
                        {{--branch.children().children().toggle();--}}
                    {{--});--}}
                    {{--/* fire event from the dynamically added icon */--}}
                    {{--tree.find('.branch .indicator').each(function(){--}}
                        {{--jQuery(this).on('click', function () {--}}
                            {{--jQuery(this).closest('li').click();--}}
                        {{--});--}}
                    {{--});--}}
                    {{--/* fire event to open branch if the li contains an anchor instead of text */--}}
                    {{--tree.find('.branch>a').each(function () {--}}
                        {{--jQuery(this).on('click', function (e) {--}}
                            {{--jQuery(this).closest('li').click();--}}
                            {{--e.preventDefault();--}}
                        {{--});--}}
                    {{--});--}}
                    {{--/* fire event to open branch if the li contains a button instead of text */--}}
                    {{--tree.find('.branch>button').each(function () {--}}
                        {{--jQuery(this).on('click', function (e) {--}}
                            {{--jQuery(this).closest('li').click();--}}
                            {{--e.preventDefault();--}}
                        {{--});--}}
                    {{--});--}}
                {{--}--}}
            {{--});--}}
            {{--/* Initialization of treeviews */--}}
            {{--jQuery('#tree1').treed();--}}





        {{--</script>--}}




        @yield('after-scripts')


    </body>
</html>