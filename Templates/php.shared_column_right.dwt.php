<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<!--
    Membership and regular participation in the UNL Web Developer Network
    is required to use the UNL templates. Visit the WDN site at 
    http://wdn.unl.edu/. Click the WDN Registry link to log in and
    register your unl.edu site.
    All UNL template code is the property of the UNL Web Developer Network.
    The code seen in a source code view is not, and may not be used as, a 
    template. You may not use this code, a reverse-engineered version of 
    this code, or its associated visual presentation in whole or in part to
    create a derivative work.
    This message may not be removed from any pages based on the UNL site template.
    
    $Id$
-->
<link rel="stylesheet" type="text/css" media="screen" href="/wdn/templates_3.0/css/all.css" />
<link rel="stylesheet" type="text/css" media="print" href="/wdn/templates_3.0/css/print.css" />
<script type="text/javascript" src="/wdn/templates_3.0/scripts/all.js"></script>
<?php virtual('/wdn/templates_3.0/includes/browserspecifics.html'); ?>
<?php virtual('/wdn/templates_3.0/includes/metanfavico.html'); ?>
<!-- TemplateBeginEditable name="doctitle" -->
<title>UNL | Department | New Page</title>
<!-- TemplateEndEditable --><!-- TemplateBeginEditable name="head" -->
<!-- Place optional header elements here -->
<!-- TemplateEndEditable -->
</head>
<body class="fixed">
<p class="skipnav"> <a class="skipnav" href="#maincontent">Skip Navigation</a> </p>
<div id="wdn_wrapper">
    <div id="header"> <a href="http://www.unl.edu/" title="UNL website"><img src="/wdn/templates_3.0/images/logo.png" alt="UNL graphic identifier" id="logo" /></a>
        <h1>University of Nebraska&ndash;Lincoln</h1>
        <?php virtual('/wdn/templates_3.0/includes/wdnTools.html'); ?>
    </div>
    <div id="wdn_navigation_bar">
        <div id="breadcrumbs">
            <!-- WDN: see glossary item 'breadcrumbs' -->
            <!-- TemplateBeginEditable name="breadcrumbs" -->
            <ul>
                <li><a href="http://www.unl.edu/" title="University of Nebraska&ndash;Lincoln">UNL</a></li>
                <li>Department</li>
            </ul>
            <!-- TemplateEndEditable --></div>
        <div id="wdn_navigation_wrapper">
            <div id="navigation"><!-- TemplateBeginEditable name="navlinks" -->
                <?php include '../sharedcode/navigation.html'; ?>
                <!-- TemplateEndEditable --></div>
        </div>
    </div>
    <div id="wdn_content_wrapper">
        <div id="titlegraphic"><!-- TemplateBeginEditable name="titlegraphic" -->
            <h1>Department</h1>
            <!-- TemplateEndEditable --></div>
        <div id="pagetitle"><!-- TemplateBeginEditable name="pagetitle" --> <!-- TemplateEndEditable --></div>
        <div id="maincontent">
            <!--THIS IS THE MAIN CONTENT AREA; WDN: see glossary item 'main content area' -->
            <div class="three_col left"> <!-- TemplateBeginEditable name="maincontentarea" -->
                <p><strong>Delete this box and place your content here.</strong><br />
                    Remember to validate your pages before publishing! Sample layouts are available through the <a href="http://wdn.unl.edu//">Web Developer Network</a>. <br />
                    <a href="http://validator.unl.edu/check/referer">Check this page</a> </p>
                <!-- TemplateEndEditable --></div>
            <!-- TemplateBeginEditable name="sharedcolumn" -->
            <div class="col right">
                <?php include '../sharedcode/sharedColumn.html'; ?>
            </div>
            <!-- TemplateEndEditable -->
            <div class="clear"></div>
            <?php virtual('/wdn/templates_3.0/includes/noscript.html'); ?>
            <!--THIS IS THE END OF THE MAIN CONTENT AREA.-->
        </div>
        <div id="footer">
            <div id="footer_floater"></div>
            <div class="footer_col">
                <?php virtual('/wdn/templates_3.0/includes/feedback.html'); ?>
            </div>
            <div class="footer_col"><!-- TemplateBeginEditable name="leftcollinks" -->
                <?php include '../sharedcode/relatedLinks.html'; ?>
                <!-- TemplateEndEditable --></div>
            <div class="footer_col"><!-- TemplateBeginEditable name="contactinfo" -->
                <?php include '../sharedcode/footerContactInfo.html'; ?>
                <!-- TemplateEndEditable --></div>
            <div class="footer_col">
                <?php virtual('/wdn/templates_3.0/includes/socialmediashare.html'); ?>
            </div>
            <!-- TemplateBeginEditable name="optionalfooter" --> <!-- TemplateEndEditable -->
            <div id="wdn_copyright"><!-- TemplateBeginEditable name="footercontent" -->
                <?php include '../sharedcode/footer.html'; ?>
                <!-- TemplateEndEditable -->
                <?php virtual('/wdn/templates_3.0/includes/wdn.html'); ?>
                | <a href="http://validator.unl.edu/check/referer">W3C</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS</a> <a href="http://www.unl.edu/" title="UNL Home" id="wdn_unl_wordmark"><img src="/wdn/templates_3.0/css/footer/images/wordmark.png" alt="UNL's wordmark" /></a> </div>
        </div>
    </div>
    <div id="wdn_wrapper_footer"> </div>
</div>
</body>
</html>