<?php if(config("analytics.google-analytics") && config("analytics.google-analytics") != "UA-XXXXX-X"): ?>
    <?php /* Google Analytics: change UA-XXXXX-X to be your site's ID. */ ?>
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','<?php echo e(config("analytics.google-analytics")); ?>','auto');ga('send','pageview');
    </script>
<?php endif; ?>