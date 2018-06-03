<?php

    class NavBarMenuView {

        private $supportedLanguagesKeyValue;

        function __construct() {
            $this->supportedLanguagesKeyValue = BundleLoader::getValue("configuration", "SUPPORTED_LANGUAGES");
        }

        private function generateMenuElement($lang) {

            $isActive = ($_GET['lang'] == $lang) ? true : false;
            $activeClass = ($isActive == true) ? "active" : "";

            echo '<li class="nav-item '.$activeClass.'">';
                echo '<a class="nav-link" href=" ?lang='.$lang.' ">';
                    echo $lang;
                echo '</a>';
            echo '</li>';

        }

        public function generateHtml() {

            $supportedLanguages = explode(",", $this->supportedLanguagesKeyValue);

            foreach($supportedLanguages as $lang) {
                $this->generateMenuElement($lang);
            }

        }

    }

?>

<!--
<li class="nav-item active">
    <a class="nav-link" href="#">ENG</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">DEU</a>
</li>
-->