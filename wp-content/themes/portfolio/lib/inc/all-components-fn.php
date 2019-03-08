<?php
//components
function get_skill_bar($title, $percentage){
    include(locate_template("/templates/components/skill-bar.php"));
};
function get_contact(){
    include(locate_template("/templates/components/contact.php"));
};
function get_modal(){
    include(locate_template("/templates/components/modal.php"));
};
function get_button($button_title, $type="button", $modal=true, $icon="", $modal_link="#contactModal") {
    include(locate_template("/templates/components/button.php"));
};
function get_separator($width, $height, $color="#f8c045", $option=""){
    include(locate_template("/templates/components/separator.php"));
};
function get_skill($icon, $title, $content){
    include(locate_template("/templates/components/skill.php"));
};
function get_input($label, $required=false, $type="text", $state=""){
    include(locate_template("/templates/components/inputs.php"));
};
function get_textarea($label, $row="8"){
    include(locate_template("/templates/components/textarea.php"));
};

//layouts
function get_about_me() {
    include(locate_template("/templates/about-me.php"));
};
function get_my_projects() {
    include(locate_template("/templates/my-projects.php"));
};