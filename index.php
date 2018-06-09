<?php
    require_once "php/BundleLoader.php";
    require_once "php/NavBarMenuView.php";

    BundleLoader::init();
?>
<!doctype html>
<html lang="en">

	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php require "php/common/headElements.php"; ?>
        <link rel="stylesheet" href="css/index/desktop.css">
        <link rel="stylesheet" href="css/index/mobile.css">
        <link rel="stylesheet" href="css/index/menuSpy/main.css">

		<title>
            <?= BundleLoader::getValue("index", "INDEX_PAGE_TITLE") ?>
        </title>

	</head>

	<body class="text-center">

        <nav class="navbar navbar-expand-lg navbar-dark dark-background">

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <?php
                        $navBarView = new NavBarMenuView();
                        $navBarView->generateHtml();
                    ?>
                </ul>
            </div>

        </nav>

        <!-- Side Menu -->
        <header id="main-header" class="side-menu">
            <nav>
                <ul>
                    <li>
                        <a href="#aBriefStorySection">
                            <span class="menuSpyItemSpan_alwaysActive">
                                <?= BundleLoader::getValue("index", "INDEX_A-BRIEF-STORY-SECTION_TITLE") ?>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="#educationSection">
                            <span class="menuSpyItemSpan_alwaysActive">
                                <?= BundleLoader::getValue("index", "INDEX_EDUCATION-SECTION_TITLE") ?>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="#workingExperienceSection">
                            <span class="menuSpyItemSpan_alwaysActive">
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_TITLE") ?>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="#contactMeSection">
                            <span class="menuSpyItemSpan_alwaysActive">
                                <?= BundleLoader::getValue("index", "INDEX_CONTACT-ME-SECTION_TITLE") ?>
                            </span>
                        </a>
                    </li>

                </ul>
            </nav>
        </header>

        <!-- Main Content -->
		<div class="container-fluid">
            
            <!-- Presentation Area -->
            <div id="presentationArea" class="row presentationArea sectionGap">
            
                <!-- Name area -->
                <div class="col align-self-center">
                    <div class="presentationAreaText">
                        <h1 class="text-right titleFontFamily">
                            <?= BundleLoader::getValue("index", "INDEX_PRESENTATION-AREA_NAME-AND-SURNAME") ?>
                        </h1>
                        <h2 class="text-right subtitleFontFamily">
                            <?= BundleLoader::getValue("index", "INDEX_PRESENTATION-AREA_SUBTITLE") ?>
                        </h2>
                    </div>
                </div>

                <!-- Photo area -->
                <div class="col">
                    <img class="float-left" src="img/Mario.png">
                </div>

            </div>

            <!-- About Me -->
            <div class="row sectionGap">

                <div id="aboutMeSection" class="col section text-center ash-grey">

                    <div class="row mb-4">
                        <h1 class="w-100 titleFontFamily font-italic font-weight-bold ">
                            <?= BundleLoader::getValue("index", "INDEX_ABOUT-ME-SECTION_TITLE") ?>
                        </h1>
                    </div>

                    <div class="row">
                        <p class="w-100 subtitleFontFamily">
                            <?= BundleLoader::getValue("index", "INDEX_ABOUT-ME-SECTION_CONTENT") ?>
                        </p>
                    </div>

                </div>

            </div>

            <!-- A brief story -->
            <div class="row sectionGap">

                <div class="col text-center ash-grey">

                    <div class="circle">

                        <div id="aBriefStorySection" class="row">

                            <!-- Title -->
                            <h1 class="w-100 titleFontFamily font-italic font-weight-bold mb-4">
                                <?= BundleLoader::getValue("index", "INDEX_A-BRIEF-STORY-SECTION_TITLE") ?>
                            </h1>

                            <!-- Description -->
                            <p class="w-100 subtitleFontFamily">
                                <?= BundleLoader::getValue("index", "INDEX_A-BRIEF-STORY-SECTION_CONTENT") ?>
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Education -->
            <div class="row sectionGap">

                <div class="col text-center ash-grey">

                    <div class="circle">

                        <div id="educationSection" class="row">

                            <!-- Title -->
                            <h1 class="w-100 titleFontFamily font-italic font-weight-bold mb-4">
                                <?= BundleLoader::getValue("index", "INDEX_EDUCATION-SECTION_TITLE") ?>
                            </h1>

                            <!-- University of Catania -->
                            <p class="w-100 font-weight-bold mb-2">
                                <?= BundleLoader::getValue("index", "INDEX_EDUCATION-SECTION_DATE-RANGE_1") ?>
                                <br>
                                <?= BundleLoader::getValue("index", "INDEX_EDUCATION-SECTION_LOCATION_1") ?>
                            </p>

                            <!-- Description -->
                            <p class="w-100 subtitleFontFamily mb-5">
                                <?= BundleLoader::getValue("index", "INDEX_EDUCATION-SECTION_CONTENT_1") ?>
                            </p>
                            
                            <br><br><br>

                            <!-- Liceo Statale "Ettore Majorana" -->
                            <p class="w-100 font-weight-bold  mb-2">
                                <?= BundleLoader::getValue("index", "INDEX_EDUCATION-SECTION_DATE-RANGE_2") ?>
                                <br>
                                <?= BundleLoader::getValue("index", "INDEX_EDUCATION-SECTION_LOCATION_2") ?>
                            </p>

                            <!-- Description -->
                            <p class="w-100 subtitleFontFamily">
                                <?= BundleLoader::getValue("index", "INDEX_EDUCATION-SECTION_CONTENT_2") ?>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Working Experience -->
            <div class="row sectionGap">

                <div class="col text-center ash-grey">

                    <div class="circle">

                        <div id="workingExperienceSection" class="row">
                                
                            <!-- Title -->
                            <h1 class="w-100 titleFontFamily font-italic font-weight-bold mb-4 ">
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_TITLE") ?>
                            </h1>

                            <!-- Internship at Imagination Computer Services -->
                            <p class="w-100 font-weight-bold mb-2">
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_DATE-RANGE_1") ?>
                                <br>
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_LOCATION_1") ?>
                            </p>

                            <!-- Description -->
                            <p class="w-100 subtitleFontFamily text-left mb-0">
                                <?= BundleLoader::getValue("index", "INDEX_DUTIES_TEXT") ?>
                            </p>
                            <ul class="subtitleFontFamily text-left mb-5">
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_BULLETED-LIST_CONTENT_1") ?>
                            </ul>
                            
                            <br><br><br>

                            <!-- Voluntary work at Riot Games -->
                            <p class="w-100 font-weight-bold mb-2">
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_DATE-RANGE_2") ?>
                                <br>
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_LOCATION_2") ?>
                            </p>

                            <!-- Description -->
                            <p class="w-100 subtitleFontFamily text-left mb-0">
                                <?= BundleLoader::getValue("index", "INDEX_DUTIES_TEXT") ?>
                            </p>
                            <ul class="subtitleFontFamily text-left mb-5">
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_BULLETED-LIST_CONTENT_2") ?>
                            </ul>

                            <!-- Tutoring at Art School of Catania -->
                            <p class="w-100 font-weight-bold mb-2">
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_DATE-RANGE_3") ?>
                                <br>
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_LOCATION_3") ?>
                            </p>

                            <!-- Description -->
                            <p class="w-100 subtitleFontFamily text-left mb-0">
                                <?= BundleLoader::getValue("index", "INDEX_DUTIES_TEXT") ?>
                            </p>
                            <ul class="subtitleFontFamily text-left mb-5">
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_BULLETED-LIST_CONTENT_3") ?>
                            </ul>

                            <!-- Analyst at Deloitte Consulting -->
                            <p class="w-100 font-weight-bold mb-2">
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_DATE-RANGE_4") ?>
                                <br>
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_LOCATION_4") ?>
                            </p>

                            <!-- Description -->
                            <p class="w-100 subtitleFontFamily text-left mb-0">
                                <?= BundleLoader::getValue("index", "INDEX_DUTIES_TEXT") ?>
                            </p>
                            <ul class="subtitleFontFamily text-left mb-5">
                                <?= BundleLoader::getValue("index", "INDEX_WORKING-EXPERIENCE-SECTION_BULLETED-LIST_CONTENT_4") ?>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Contact Me -->
            <div class="row sectionGap">

                <div class="col ash-grey">

                    <div class="circle">

                        <!-- Form -->
                        <div id="contactMeSection" class="form-row text-left">
                                
                            <!-- Title -->
                            <h1 class="w-100 titleFontFamily font-italic font-weight-bold mb-4 text-center">
                                <?= BundleLoader::getValue("index", "INDEX_CONTACT-ME-SECTION_TITLE") ?>
                            </h1>

                            <!-- Name -->
                            <div class="form-group col-md-6">
                                <?php $contactMeSectionNamePlaceholder = BundleLoader::getValue("index", "INDEX_CONTACT-ME-SECTION_NAME_PLACEHOLDER") ?>
                                <input type="text" class="form-control rounded-0" placeholder="<?= $contactMeSectionNamePlaceholder ?>">
                            </div>

                            <!-- Surname -->
                            <div class="form-group col-md-6">
                                <?php $contactMeSectionEmailPlaceholder = BundleLoader::getValue("index", "INDEX_CONTACT-ME-SECTION_E-MAIL_PLACEHOLDER") ?>
                                <input type="email" class="form-control rounded-0" placeholder="<?= $contactMeSectionEmailPlaceholder ?>">
                            </div>

                            <!-- Subject -->
                            <div class="form-group text-left col-md-12">
                                <?php $contactMeSectionSubjectPlaceholder = BundleLoader::getValue("index", "INDEX_CONTACT-ME-SECTION_SUBJECT_PLACEHOLDER") ?>
                                <input type="text" class="form-control rounded-0" placeholder="<?= $contactMeSectionSubjectPlaceholder ?>">
                            </div>
                                
                            <!-- Message -->
                            <div class="form-group text-left col-md-12">
                                <?php $contactMeSectionMessagePlaceholder = BundleLoader::getValue("index", "INDEX_CONTACT-ME-SECTION_MESSAGE_PLACEHOLDER") ?>
                                <input type="text" class="form-control rounded-0" placeholder="<?= $contactMeSectionMessagePlaceholder ?>">
                            </div>
                            
                            <!-- Send -->
                            <button type="button" class="btn btn-dark w-100">
                                <?= BundleLoader::getValue("index", "INDEX_CONTACT-ME-SECTION_SEND-MESSAGE_BUTTON") ?>
                            </button>
                            
                        </div>

                    </div>

                </div>

            </div>

        </div>

		<?php require "php/common/jsForBootstrap.php"?>
        <script src="js/menuSpy/menuspy.min.js"></script>
        <script src="js/menuSpy/menuSpyInit.js"></script>
        <script src="js/menuSpy/menuSpyColorChanger.js"></script>

	</body>

</html>