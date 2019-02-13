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
function get_button($text_button, $action_button="#") {
    include(locate_template("/templates/components/button.php"));
};
function get_separator($width, $height, $color="black", $option=""){
    include(locate_template("/templates/components/separator.php"));
};
function get_skill($icon, $title, $content){
    include(locate_template("/templates/components/skill.php"));
};

//layouts
function get_about_me() {
    include(locate_template("/templates/about-me.php"));
};
function get_expert_in() {
    include(locate_template("/templates/expert-in.php"));
};