


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >

  <head>

      <base href="https://www.iiitm.ac.in/" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="SYSADMIN" />
  <meta name="description" content="ABV-Indian Institute of Information Technology &amp; Management, Gwalior" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Home</title>
  <link href="/templates/beez5/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="/media/jui/css/chosen.css" type="text/css" />
  <link rel="stylesheet" href="/media/com_finder/css/finder.css" type="text/css" />
  <link rel="stylesheet" href="/modules/mod_sp_accordion/style/style3.css" type="text/css" />
  <script src="/media/jui/js/jquery.min.js" type="text/javascript"></script>
  <script src="/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="/media/system/js/caption.js" type="text/javascript"></script>
  <script src="/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="/media/system/js/core.js" type="text/javascript"></script>
  <script src="/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script src="/media/jui/js/chosen.jquery.min.js" type="text/javascript"></script>
  <script src="/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="/media/jui/js/jquery.autocomplete.min.js" type="text/javascript"></script>
  <script src="/modules/mod_sp_accordion/js/sp-accordion.js" type="text/javascript"></script>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
                new JCaption('img.caption');
            });
        jQuery(document).ready(function (){
            jQuery('select').chosen({"disable_search_threshold":10,"search_contains":true,"allow_single_deselect":true,"placeholder_text_multiple":"Select some options","placeholder_text_single":"Select an option","no_results_text":"No results match"});
        });
    
jQuery(document).ready(function(){
    jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});
jQuery(document).ready(function() {
    var value, searchword = jQuery('#mod-finder-searchword');

        // Get the current value.
        value = searchword.val();

        // If the current value equals the default value, clear it.
        searchword.on('focus', function ()
        {
            var el = jQuery(this);

            if (el.val() === 'Search ...')
            {
                el.val('');
            }
        });

        // If the current value is empty, set the previous value.
        searchword.on('blur', function ()
        {
            var el = jQuery(this);

            if (!el.val())
            {
                el.val(value);
            }
        });

        jQuery('#mod-finder-searchform').on('submit', function (e)
        {
            e.stopPropagation();
            var advanced = jQuery('#mod-finder-advanced');

            // Disable select boxes with no value selected.
            if (advanced.length)
            {
                advanced.find('select').each(function (index, el)
                {
                    var el = jQuery(el);

                    if (!el.val())
                    {
                        el.attr('disabled', 'disabled');
                    }
                });
            }
        });
    var suggest = jQuery('#mod-finder-searchword').autocomplete({
        serviceUrl: '/index.php/component/finder/?task=suggestions.suggest&amp;format=json&amp;tmpl=component',
        paramName: 'q',
        minChars: 1,
        maxHeight: 400,
        width: 300,
        zIndex: 9999,
        deferRequestBy: 500
    });});
  </script>


    <link rel="stylesheet" href="/templates/system/css/system.css" type="text/css" />

    <link rel="stylesheet" href="/templates/beez5/css/position.css" type="text/css" media="screen,projection" />

    <link rel="stylesheet" href="/templates/beez5/css/layout.css" type="text/css" media="screen,projection" />

    <link rel="stylesheet" href="/templates/beez5/css/print.css" type="text/css" media="Print" />

    <link rel="stylesheet" href="/templates/beez5/css/beez5.css" type="text/css" />

    <link rel="stylesheet" href="/templates/beez5/css/slider.css" type="text/css" />

    

    

    


    <link rel="stylesheet" href="/templates/beez5/css/general.css" type="text/css" />


    
    <!--[if lte IE 6]>

      <link href="/templates/beez5/css/ieonly.css" rel="stylesheet" type="text/css" />

    <![endif]-->

    <!--[if IE 7]>

      <link href="/templates/beez5/css/ie7only.css" rel="stylesheet" type="text/css" />

    <![endif]-->


    <script type="text/javascript" src="/templates/beez5/javascript/hide.js"></script>



    <script type="text/javascript">
      //jQuery=$.noConflict();
      var big ='72%';

      var small='53%';

      var altopen='is open';

      var altclose='is closed';

      var bildauf='/templates/beez5/images/plus.png';

      var bildzu='/templates/beez5/images/minus.png';

      var rightopen='Open info';

      var rightclose='Close info';

      var fontSizeTitle='Font size';

            var bigger='Bigger';

            var reset='Reset';

            var smaller='Smaller';

            var biggerTitle='Increase size';

            var resetTitle='Revert styles to default';

            var smallerTitle='Decrease size';

      

      

      

    </script>

    

    <!--<script type="text/javascript" src="/templates/beez5/javascript/jquery-1.6.2.js"></script>-->

    <script type="text/javascript" src="/templates/beez5/javascript/jquery.easing.1.3.js"></script>

  

  <script type="text/javascript" src="/templates/beez5/javascript/tms-0.3.js"></script>

    <script type="text/javascript" src="/templates/beez5/javascript/tms_presets.js"></script>



  </head>



  <body>

<div id="outbdy">

<div id="all">

  <div id="back">

<!-- deleted content on text format -->



<div id="header">



<div class="logoheader">

          <h1 id="logo">

      <div style="float:left; width:49%; padding:10px 0 0 0;">
              <a href="/">
                  <img src="/templates/beez5/images/logo_left.png" style="vertical-align:central;" alt="ABV-IIITM" border="0" />
                </a>
            </div>

            <div style="float:left; width:10%; text-align:center">
              <a href="/">
                  <img align="middle" src="/templates/beez5/images/logo_mid.png" alt="ABV-IIITM" border="0" />
              </a>
            </div>

            <div style="float:right; width:41%; padding:10px 0 0 0;">
              <a href="/">
                  <img src="/templates/beez5/images/logo_right.png" alt="ABV-IIITM" border="0" />                
                 </a>
            </div>

         </h1>
         <div style="text-align:center;" align="center">
                

<div class="custom"  >
    <p style="text-align: center;"><strong><span style="font-size: medium;">NAAC Accredited 'A' Grade Institute of National Importance<br /></span></strong></p></div>

         </div>
</div><!-- end logoheader -->





<ul class="nav menu">
<li class="item-102 deeper parent"><a href="#" >ABOUT IIITM</a><ul class="nav-child unstyled small"><li class="item-116"><a href="/index.php/about-iiitm/history" >History</a></li><li class="item-113"><a href="/index.php/about-iiitm/vision-and-mission" >Vision and Mission</a></li><li class="item-402"><a href="/index.php/about-iiitm/our-objective" >Objectives</a></li><li class="item-123"><a href="/index.php/about-iiitm/institute-s-logo" >Institute's Logo</a></li><li class="item-115"><a href="/index.php/about-iiitm/the-organization" >Organization</a></li><li class="item-114"><a href="/index.php/about-iiitm/administration" >Administration</a></li><li class="item-206"><a href="/index.php/about-iiitm/location" >Location</a></li><li class="item-124"><a href="/index.php/about-iiitm/director-s-message" >Director's Message</a></li></ul></li><li class="item-103 deeper parent"><a href="#" >ACADEMICS</a><ul class="nav-child unstyled small"><li class="item-544"><a href="/images/Academic/IIITM_Prospectus_2016_17_1.pdf" target="_blank" >IIITM Prospectus 2016-17</a></li><li class="item-395"><a href="/index.php/academics/methodology" >Methodology</a></li><li class="item-393 deeper parent"><a href="/index.php/academics/academic-programs" >Academic Programs</a><ul class="nav-child unstyled small"><li class="item-390"><a href="/index.php/academics/academic-programs/ipg" >Integrated Post Graduate - IPG</a></li><li class="item-391"><a href="/index.php/academics/academic-programs/m-tech" >Post Graduate - M.Tech</a></li><li class="item-392"><a href="/index.php/academics/academic-programs/mba" >Post Graduate - MBA</a></li><li class="item-394"><a href="/index.php/academics/academic-programs/ph-d" >PhD</a></li></ul></li><li class="item-425"><a href="/index.php/academics/fee-structure" >Fee Structure</a></li><li class="item-452 deeper parent"><a href="/" >Academic Calender</a><ul class="nav-child unstyled small"><li class="item-180"><a href="/index.php/academics/2014-11-26-05-51-30/academic-calendar" >Current Semester</a></li><li class="item-451"><a href="/index.php/academics/2014-11-26-05-51-30/academic-calender-archives" >Archives</a></li></ul></li><li class="item-358"><a href="/index.php/academics/nri-pio-foreign-students" >NRI / PIO / Foreign Students</a></li><li class="item-361"><a href="/index.php/academics/financial-guide" >Financial Assistance</a></li><li class="item-450"><a href="/index.php/academics/course-study" >Courses of Study</a></li><li class="item-457"><a href="/index.php/academics/procedure-to-obtain-transcripts-degrees-verification-of-degree-certificates-and-other-certificates" >Procedure to obtain Transcripts/Degrees etc.</a></li><li class="item-458"><a href="/index.php/academics/procedure-to-issue-of-duplicate-degree-certificate" >Procedure to Issue Duplicate Degree Certificate</a></li><li class="item-459"><a href="/index.php/academics/charges-for-academic-related-activities" >Charges for Academic related Activities</a></li><li class="item-542"><a href="/index.php/academics/ordinances-ipg-m-tech-mba-programme" >Ordinances (IPG/M Tech/MBA Programme)</a></li><li class="item-543"><a href="/index.php/academics/ordinances-ph-d-programme" >Ordinances (Ph D Programme)</a></li></ul></li><li class="item-104 deeper parent"><a href="#" >ADMISSIONS</a><ul class="nav-child unstyled small"><li class="item-357"><a href="/index.php/admissions/ipg-admission" >Admission for IPG</a></li><li class="item-186"><a href="/index.php/admissions/m-tech-program" >Admission for M. Tech. </a></li><li class="item-179"><a href="/index.php/admissions/mba-program" >Admission for MBA </a></li><li class="item-187"><a href="/index.php/admissions/ph-d-program" >Admission for Ph D</a></li></ul></li><li class="item-105 deeper parent"><a href="#" >RESEARCH</a><ul class="nav-child unstyled small"><li class="item-216"><a href="/index.php/research/research-focuc" >Research Focus</a></li><li class="item-220 deeper parent"><a href="/index.php/research/research-laboratory" >Research Laboratory</a><ul class="nav-child unstyled small"><li class="item-405 deeper parent"><a href="#" >IT</a><ul class="nav-child unstyled small"><li class="item-222"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/data-communication" >Data Communication</a></li><li class="item-223"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/secured-computing" >Secured Computing</a></li><li class="item-224"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/communication-skills" >Communication Skills</a></li><li class="item-225"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/vlsi-design" >VLSI Design</a></li><li class="item-226"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/comm-systems-lab" >Comm. Systems Lab</a></li><li class="item-227"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/hardware-lab" >Hardware Lab</a></li><li class="item-228"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/digital-logic-design" >Digital Logic Design</a></li><li class="item-229"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/visual-info-processing" >Visual Info. Processing</a></li><li class="item-230"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/advanced-networking" >Advanced Networking</a></li><li class="item-231"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/electrical-and-electronics" >Electrical and Electronics</a></li><li class="item-232"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/engineering-physics-lab" >Engineering Physics Lab</a></li><li class="item-233"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/math-model-simulation" >Math. Model &amp; Simulation</a></li><li class="item-234"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/cnt-lab" >CNT Lab</a></li><li class="item-236"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/soft-comp-expert-sys-lab" >Soft Comp. &amp; Expert Sys. Lab</a></li><li class="item-235"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/sponsored-project-lab" >Sponsored Project Lab</a></li><li class="item-370"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/information-security-lab" >Information Security Lab</a></li><li class="item-371"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/wireless-sensor-netwrok" >Wireless Sensor Network</a></li><li class="item-410"><a href="/index.php/research/research-laboratory/2013-11-08-12-07-35/medical-informatics-laboratory" >Medical Informatics Lab</a></li></ul></li><li class="item-406 deeper parent"><a href="#" >MBA</a><ul class="nav-child unstyled small"><li class="item-221"><a href="/index.php/research/research-laboratory/2013-11-08-12-08-20/e-business-lab" >E-Business Lab</a></li><li class="item-367"><a href="/index.php/research/research-laboratory/2013-11-08-12-08-20/enterprise-integration-lab" >Enterprise Integration Lab</a></li><li class="item-435"><a href="/index.php/research/research-laboratory/2013-11-08-12-08-20/behavioural-economics-experiment-and-analytics-labartory" >Behavioural Economics Experiment and Analytics lab</a></li></ul></li></ul></li><li class="item-249"><a href="/index.php/research/research-scholars" >Research Scholars</a></li><li class="item-251"><a href="/index.php/research/list-of-sponsored-projects" >Sponsored Projects</a></li><li class="item-468"><a href="/index.php/research/online-courses" >Links to Online Courses</a></li><li class="item-476"><a href="http://www.scopus.com/results/results.url?sort=plf-f&amp;src=s&amp;sid=1BA3464587F0EC0C3CE00CC99A579686.CnvicAmOODVwpVrjSeqQ%3a130&amp;sot=aff&amp;sdt=a&amp;sl=15&amp;s=AF-ID%2860032762%29&amp;origin=AffiliationProfile&amp;editSaveSearch=&amp;txGid=1BA3464587F0EC0C3CE00CC99A579686.CnvicAmOODVwpVrjSeqQ%3a13" target="_blank" >Scopus Online List (Accessible only through Intranet)</a></li><li class="item-472"><a href="/index.php/research/list-of-publications" >Research Publications</a></li><li class="item-474"><a href="https://www.researchgate.net/institution/ABV-Indian_Institute_of_Information_Technology_and_Management_Gwalior/stats" >Research  dissemination through informal social media</a></li></ul></li><li class="item-108 deeper parent"><a href="#" >CAMPUS LIFE</a><ul class="nav-child unstyled small"><li class="item-277"><a href="/index.php/campus-life/campus-overview" >Overview</a></li><li class="item-278"><a href="/index.php/campus-life/student-hostels" >Students' Hostels</a></li><li class="item-408 deeper parent"><a href="#" >Residence</a><ul class="nav-child unstyled small"><li class="item-280"><a href="/index.php/campus-life/2013-11-14-11-50-44/faculty-residence" >Faculty </a></li><li class="item-281"><a href="/index.php/campus-life/2013-11-14-11-50-44/staff-residence" >Staff</a></li></ul></li><li class="item-282"><a href="/index.php/campus-life/visitors-hostel" >Visitor's Hostel</a></li><li class="item-284"><a href="/index.php/campus-life/campus-facilities" >Facilities</a></li><li class="item-453 deeper parent"><a href="/index.php/campus-life/green-iiitmg" >Green IIITM</a><ul class="nav-child unstyled small"><li class="item-471"><a href="/index.php/campus-life/green-iiitmg/green-circuits-for-walking-inside-the-campus" >Green circuits for walking inside  the campus</a></li><li class="item-475"><a href="/index.php/campus-life/green-iiitmg/green-commitment" >Green Commitment</a></li><li class="item-546"><a href="/index.php/campus-life/green-iiitmg/solar-initiatives-on-the-campus" target="_blank" >Solar Initiatives on the Campus</a></li><li class="item-547"><a href="/index.php/campus-life/green-iiitmg/biodiversity-report-about-the-campus" >Biodiversity Report about the Campus</a></li><li class="item-548"><a href="https://flic.kr/s/aHskKjVAoh" >Green Album</a></li><li class="item-549"><a href="/index.php/campus-life/green-iiitmg/environment-sustainability-education-efforts-at-iiitm" >Environment &amp; Sustainability Education Efforts at IIITM</a></li></ul></li><li class="item-289"><a href="/index.php/campus-life/recreation" >Recreation</a></li><li class="item-460"><a href="/index.php/campus-life/best-practices-abv-iiitm" >Best <span class="__cf_email__" data-cfemail="58082a393b2c313b3d2b18191a0e751111110c15">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li></ul></li><li class="item-106 deeper parent"><a href="#" >ACTIVITIES</a><ul class="nav-child unstyled small"><li class="item-295"><a href="/index.php/activities/events-activities" >Overview</a></li><li class="item-399"><a href="/index.php/activities/sports" >Sports</a></li><li class="item-467"><a href="/index.php/activities/yoga" >Yoga</a></li><li class="item-397"><a href="/index.php/activities/cultural-events" >Cultural Events</a></li><li class="item-396"><a href="/index.php/activities/technical-events" >Technical Events</a></li><li class="item-398"><a href="/index.php/activities/literary-activities" >Literary Activities</a></li></ul></li><li class="item-107 deeper parent"><a href="#" >FACULTY</a><ul class="nav-child unstyled small"><li class="item-254"><a href="/index.php/faculties/faculty" >List of Faculty</a></li><li class="item-258"><a href="/index.php/faculties/faculty-publications" >Publications</a></li><li class="item-248"><a href="/index.php/faculties/faculty-research-areas" >Research Areas</a></li></ul></li><li class="item-111 deeper parent"><a href="#" >FAQ</a><ul class="nav-child unstyled small"><li class="item-333"><a href="/index.php/faq/general" >General</a></li><li class="item-336"><a href="/index.php/faq/academics" >Academics</a></li><li class="item-334"><a href="/index.php/faq/hostels-and-infrastructure" >Hostels </a></li><li class="item-335"><a href="/index.php/faq/student-life" >Student Life</a></li></ul></li><li class="item-109 deeper parent"><a href="/" >PLACEMENT</a><ul class="nav-child unstyled small"><li class="item-433"><a href="/index.php/placement/prospective-employer" >Prospective Employer</a></li><li class="item-434"><a href="/index.php/placement/student" >Student</a></li></ul></li><li class="item-454 deeper parent"><a href="/" >ALUMNI</a><ul class="nav-child unstyled small"><li class="item-455"><a href="/index.php/2014-12-01-10-02-12/alumni-our-pride" >Alumni - Our Pride</a></li><li class="item-456"><a href="/index.php/2014-12-01-10-02-12/our-alumni-who-have-done-pursuing-higher-studies" >Our Alumni who have done/pursuing Higher Studies</a></li></ul></li><li class="item-112"><a href="/index.php/contact-us" >CONTACT US</a></li></ul>


          <div id="line">

          <!-- <div id="fontsize"></div> -->

          <h3 class="unseen">Search</h3>

          <ul class="nav menu_second">
<li class="item-125 current active"><a href="/index.php" >Home</a></li><li class="item-127"><a href="/index.php/resource-center" >Resource Center</a></li><li class="item-131"><a href="/index.php/outreach" >Outreach</a></li><li class="item-133"><a href="/index.php/sitemap" >Sitemap</a></li><li class="item-129"><a href="/index.php/campus-tour" >Visitor Guide</a></li><li class="item-126"><a href="/index.php/careers" >Careers</a></li><li class="item-421"><a href="/index.php/other-iiit-s" >Other IIITs</a></li><li class="item-545"><a href="https://www.iiitm.ac.in/index.php/650-academic-registration-for-semester-july-dec-2016" target="_blank" >Academic Portal</a></li><li class="item-551"><a href="/index.php/nirf-2017" >NIRF</a></li><li class="item-132"><a href="https://webmail.iiitm.ac.in/squirrelmail" target="_blank" >Web Mail</a></li><li class="item-447"><a href="http://localhost/login_and_register/index.php" >No Dues System</a></li></ul>


          </div> <!-- end line -->

</div>

    <div id="contentarea">

          


            
              <div class="left1 leftbigger" id="nav">

            


                

                
<div
    class="moduletable_js ">
<h3 class="js_heading" style="display:none;"><span class="backh"> <span
    class="backh1">Latest News <a href="#"
    title="click"
    onclick="auf('module_94'); return false"
    class="opencloselink" id="link_94"> <span
    class="no"><img src="/templates/beez5/images/plus.png"
    alt="is closed" />
</span></a></span></span></h3>
<div class="module_content "
    id="module_94" tabindex="-1"><script type="text/javascript">
        var $j=jQuery.noConflict();
    $j(document).ready(function() {
        $j('#accordion_sp1_id94').spAccordion({
            hidefirst: 0        });
    });
</script>   
<div id="accordion_sp1_id94" class="sp-accordion sp-accordion-style3">
    
        <div class="toggler">
            <span><span>News Feed</span></span>
        </div>
        <div class="clr"></div>
       
        <div class="sp-accordion-inner">
                        <p></p>
                        <a href="/index.php/735-centralized-counselling-for-m-tech-admissions-ccmt-2017">Centralized Counselling for M.Tech. Admissions CCM...</a>
            <div class="clr"></div>
            
            <p></p>
            
                        <p></p>
                        <a href="/index.php/733-mba-admission-2017-20">MBA Admissions 2017-19 ...</a>
            <div class="clr"></div>
            
            <p></p>
            
                        <p></p>
                        <a href="/index.php/732-register-for-national-digital-library">Register for  &quot;National Digital Library&quot;...</a>
            <div class="clr"></div>
            
            <p></p>
            
                        <p></p>
                        <a href="/index.php/729-advertisement-for-the-post-of-junior-research-fellow-jrf">Advertisement for the post of Junior Research Fell...</a>
            <div class="clr"></div>
            
            <p></p>
            
                        <p></p>
                        <a href="/index.php/728-conference-on-information-communication-technology-cict-2017">Conference on Information &amp; Communication Technolo...</a>
            <div class="clr"></div>
            
            <p></p>
            
                        <p></p>
                        <a href="/index.php/710-our-scientific-social-responsibility-student-gyan-movement">Our Scientific Social Responsibility : Student Gya...</a>
            <div class="clr"></div>
            
            <p></p>
            
                        <p></p>
                        <a href="/index.php/687-vittiya-saksharta-abhiyan">Vittiya Saksharta Abhiyan...</a>
            <div class="clr"></div>
            
            <p></p>
            
            </div>
        <div class="toggler">
            <span><span>Purchase & Tenders</span></span>
        </div>
        <div class="clr"></div>
       
        <div class="sp-accordion-inner">
                        <p></p>
                        <a href="/index.php/19-news-events-tenders/tenders/737-re-tender-for-inverted-microscope-with-fluorescence-and-high-resolution-digital-image-analysis-system-last-date-24-04-2017-upto-3-30pm">Re tender for Inverted Microscope with Fluorescenc...</a>
            <div class="clr"></div>
            
            <p></p>
            
                        <p></p>
                        <a href="/index.php/19-news-events-tenders/tenders/621-list-of-registered-vendors">List of Registered Vendors...</a>
            <div class="clr"></div>
            
            <p></p>
            
                          <!---->
        </div>

            </div></div>
</div>
    
<div
    class="moduletable_js ">
<h3 class="js_heading" ><span class="backh"> <span
    class="backh1">Quick Links <a href="#"
    title="click"
    onclick="auf('module_97'); return false"
    class="opencloselink" id="link_97"> <span
    class="no"><img src="/templates/beez5/images/plus.png"
    alt="is closed" />
</span></a></span></span></h3>
<div class="module_content "
    id="module_97" tabindex="-1"><ul class="nav menu">
<li class="item-142"><a href="/index.php/download" >Forms Central</a></li><li class="item-148"><a href="http://sors.iiitm.ac.in/" target="_blank" >SORS</a></li><li class="item-477"><a href="/index.php/newsletter" >Newsletter</a></li><li class="item-427"><a href="http://www.tiiciiitm.com/" target="_blank" >Technology Innovation and Incubation Centre</a></li><li class="item-431"><a href="/index.php/annual-report-2012-13" target="_blank" >Annual Report </a></li><li class="item-464"><a href="/index.php/annual-accounts" >Annual Accounts</a></li><li class="item-448"><a href="/index.php/abhishar" >ABHISHAR</a></li><li class="item-465"><a href="/index.php/arunoday" >ARUNODAY</a></li><li class="item-473"><a href="http://iiitmguthaan.blogspot.in/" >Uthaan</a></li><li class="item-541"><a href="/index.php/handbook-on-sexual-harassment-of-women-at-workplace" >Handbook on Sexual Harassment of Women at Workplace</a></li><li class="item-552"><a href="/index.php/archives1" >Archives</a></li></ul>
</div>
</div>
    
<div
    class="moduletable_js ">
<h3 class="js_heading" ><span class="backh"> <span
    class="backh1">Photo Gallery <a href="#"
    title="click"
    onclick="auf('module_104'); return false"
    class="opencloselink" id="link_104"> <span
    class="no"><img src="/templates/beez5/images/plus.png"
    alt="is closed" />
</span></a></span></span></h3>
<div class="module_content "
    id="module_104" tabindex="-1"><ul class="nav menu">
<li class="item-165"><a href="/index.php/photo-gallery" ><img src="/images/banners/sidebar-banner.jpg" alt="Photo Gallery" /></a></li></ul>
</div>
</div>
    
<div
    class="moduletable_js ">
<h3 class="js_heading" ><span class="backh"> <span
    class="backh1">Other Links <a href="#"
    title="click"
    onclick="auf('module_99'); return false"
    class="opencloselink" id="link_99"> <span
    class="no"><img src="/templates/beez5/images/plus.png"
    alt="is closed" />
</span></a></span></span></h3>
<div class="module_content "
    id="module_99" tabindex="-1"><ul class="nav menu">
<li class="item-156"><a href="/index.php/anti-ragging-ugc-notification" >Anti-Ragging UGC Notification</a></li><li class="item-157"><a href="/index.php/scholraships" >Financial Assistance</a></li><li class="item-413"><a href="/index.php/disclaimer" >Disclaimer</a></li><li class="item-436"><a href="/index.php/success-stories" >Success Story - Developing Entrepreneurs</a></li><li class="item-437"><a href="/index.php/workshop-video-fdp" >Workshop Video / FDP</a></li><li class="item-438"><a href="/index.php/skill-development" >Skill Development</a></li></ul>
</div>
</div>
    
<div
    class="moduletable_js ">
<h3 class="js_heading" ><span class="backh"> <span
    class="backh1">RTI <a href="#"
    title="click"
    onclick="auf('module_100'); return false"
    class="opencloselink" id="link_100"> <span
    class="no"><img src="/templates/beez5/images/plus.png"
    alt="is closed" />
</span></a></span></span></h3>
<div class="module_content "
    id="module_100" tabindex="-1"><ul class="nav menu">
<li class="item-164"><a href="/index.php/sample-rti" >RTI &amp; Guidelines</a></li></ul>
</div>
</div>
    
<div
    class="moduletable_js ">
<h3 class="js_heading" ><span class="backh"> <span
    class="backh1">Student Online Fee Payment <a href="#"
    title="click"
    onclick="auf('module_123'); return false"
    class="opencloselink" id="link_123"> <span
    class="no"><img src="/templates/beez5/images/plus.png"
    alt="is closed" />
</span></a></span></span></h3>
<div class="module_content "
    id="module_123" tabindex="-1"><ul class="nav menu">
<li class="item-550"><a href="/index.php/student-online-fee-payment" >Student Online Fee Payment</a></li></ul>
</div>
</div>
    



            
              </div><!-- end navi -->

            


          
       
              <div id="top"><!-- <div class="bannergroup"> -->

<div id="bannerbg">
    <div class="slider-wrapper">
        <div class="slider">
            <ul class="items">
           


    <li>
                                                                                                                                                                                        <img
                        src="https://www.iiitm.ac.in/images/banners/imgx.jpg"
                        alt="Banner 7"
                                                                    />
                                            <!--<div class="clr"></div>-->
    </li>
    <li>
                                                                                                                                                                                        <img
                        src="https://www.iiitm.ac.in/images/banners/img1.jpg"
                        alt="Banner 1"
                                                                    />
                                            <!--<div class="clr"></div>-->
    </li>
    <li>
                                                                                                                                                                                        <img
                        src="https://www.iiitm.ac.in/images/banners/img4.jpg"
                        alt="Banner 2"
                                                                    />
                                            <!--<div class="clr"></div>-->
    </li>
    <li>
                                                                                                                                                                                        <img
                        src="https://www.iiitm.ac.in/images/banners/img6.jpg"
                        alt="Banner 6"
                                                                    />
                                            <!--<div class="clr"></div>-->
    </li>
    <li>
                                                                                                                                                                                        <img
                        src="https://www.iiitm.ac.in/images/banners/img2.jpg"
                        alt="Banner 4"
                                                                    />
                                            <!--<div class="clr"></div>-->
    </li>
    <li>
                                                                                                                                                                                        <img
                        src="https://www.iiitm.ac.in/images/banners/img5.jpg"
                        alt="Banner 5"
                                                                    />
                                            <!--<div class="clr"></div>-->
    </li>
    <li>
                                                                                                                                                                                        <img
                        src="https://www.iiitm.ac.in/images/banners/img3.jpg"
                        alt="Banner 3"
                                                                    />
                                            <!--<div class="clr"></div>-->
    </li>
    <li>
                                                                                                                                                                                        <img
                        src="https://www.iiitm.ac.in/images/banners/imgy.jpg"
                        alt="Banner 8"
                                                                    />
                                            <!--<div class="clr"></div>-->
    </li>

</ul> 
    </div>
<ul class="pagination_slider">
    
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
</ul>
    </div>
        
<div class="clear"></div>
 <script type="text/javascript">
        $j=jQuery.noConflict();
        $j(document).ready(function(){
           $j('.slider')._TMS({
            duration:800,
            easing:'easeOutQuad',
            preset:'simpleFade',
            pagination:'.pagination_slider',
            slideshow:7000,
            banners:'fromLeft',
            waitBannerAnimation:false,
            pauseOnHover:true
           });
      });
    </script>
<!--banner ends    --> 
</div>
<div class="clear"></div>

              </div>

             
            
       
            
          <div id="wrapper2" >
        

            <div id="main">
        

           



              <div id="system-message-container">
    </div>


              <div class="item-page" itemscope itemtype="https://schema.org/Article">
    <meta itemprop="inLanguage" content="en-GB" />
    
        
                        
    
    
                
                                <div itemprop="articleBody">
        <h2 style="text-align: left;"><span style="font-family: 'times new roman', times;">Welcome to ABV-Indian Institute of Information Technology &amp; Management, Gwalior.</span></h2>
<p style="text-align: left;"><span style="font-family: verdana, geneva;"><span lang="EN-GB">Atal Bihari Vajpayee-Indian Institute of Information Technology and Management (ABV-IIITM), Gwalior is an institute committed to taking academics to unprecedented levels of brilliance and efficiency. In this generation of excellence and specialization we aim at achieving an education standard that is comparable to the best globally. Academics at our institute are focussed on advancement of knowledge and systematic understanding of course materials and their application areas.</span><span lang="EN-GB"><br /></span></span></p>
<p style="text-align: right;"><span style="font-family: verdana, geneva;"><span lang="EN-GB" data-mce-mark="1"><a href="/index.php/home-full">Read more...</a></span><span lang="EN-GB" data-mce-mark="1"> </span></span></p>   </div>

    
                            </div>


                

            </div><!-- end main -->



          </div><!-- end wrapper -->



        


      


          <div class="wrap"></div>



        </div> <!-- end contentarea -->



      </div><!-- back -->



   



    <div id="footer-outer">



    
      <div id="footer-inner">



        <div id="bottom">

          
          <div class="box box1"> <div class="moduletable">
 
<form id="mod-finder-searchform" action="/index.php/component/finder/search" method="get" class="form-search">
    <div class="finder">
        <label for="mod-finder-searchword" class="finder">Search</label><input type="text" name="q" id="mod-finder-searchword" class="search-query input-medium" size="25" value="" placeholder="Search ..."/><button class="btn btn-primary hasTooltip  finder" type="submit" title="Go"><span class="icon-search icon-white"></span>Search</button>
                        <input type="hidden" name="Itemid" value="125" />   </div>
</form>
</div>
</div>

          
             
          <div class="box box2"> <div class="moduletable">
 

<div class="custom"  >
    <p>ABV-IIITM Gwalior Copyright © 2016. All right Reserved.</p></div>
</div>
</div>

          
          
        </div>

      </div>

       
     </div><!-- all -->

    </div>

      <!---->
      
    </div>
  </body>

</html>