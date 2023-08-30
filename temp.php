<?php

$post_author = 1;
$post_date = date('Y-m-d H:i:s');
$post_date_gmt = date('Y-m-d H:i:s');
$post_content = 'This is a dummy post content';
$post_title = 'This is a dummy post title';
$post_excerpt = 'This is a dummy post excerpt';
$post_status = 'publish';
$comment_status = 'closed';
$ping_status = 'closed';
$post_password = '';
$post_name = 'dummy-post-name';
$to_ping = '';
$pinged = '';
$post_modified = date('Y-m-d H:i:s');
$post_modified_gmt = date('Y-m-d H:i:s');
$post_content_filtered = '';
$post_parent = 0;
$guid = '';
$menu_order = 0;
$post_type = 'zoom-meeting';
$post_mime_type = '';
$comment_count = 0;



function from_plugin_bravo()
{

    //$current_path = __DIR__;
    //$plugin_file_path = /*content_url() .*/ '/wp-content/plugins/video-conferencing-with-zoom-api/includes/admin/class-zvc-admin-meetings.php';
    //echo $plugin_file_path;
    //if (file_exists($plugin_file_path)) {
    //include_once($plugin_file_path);
    //if (method_exists('Zoom_Video_Conferencing_Admin_Meetings', 'create_meeting')) {
    //    echo "<script>
    //    console.log(\"function imported\")</script>";
    //}
    //if (method_exists('Zoom_Video_Conferencing_Admin_Meetings', 'add_meeting')) {
    //   echo "<script>console.log(\"function2 imported\")</script>";
    //} else {
    //    echo "<script>console.log(\"function2 not imported\")</script>";
    //}
    if (class_exists('Zoom_Video_Conferencing_Admin_Sync')) {
        echo "<script>console.log(\"class imported\")</script>";
        $dummy_post_data = array('userId' => 'W9nwY3LATDSYDAaxtDuwFA', 'meetingTopic' => 'Dummy Meeting Topic', 'agenda' => 'Dummy Meeting Agenda', 'start_date' => '2023-08-10 09:10', 'timezone' => '(GMT+2:00) Zurich ', 'password' => 'dummy_password', 'duration' => '60', 'join_before_host' => 'true', 'option_host_video' => 'true', 'option_participants_video' => 'true', 'option_mute_participants' => 'true', 'option_auto_recording' => 'local', 'alternative_host_ids' => array('alternative_host_1', 'alternative_host_2'));
        $_POST = $dummy_post_data;
        $myObject = new Zoom_Video_Conferencing_Admin_Sync();
        $myObject->sync();
        print_r(get_defined_functions());
        print_r(get_declared_classes());
        // $class_methods = get_class_methods('Zoom_Video_Conferencing_Admin_Meetings');
        // foreach ($class_methods as $method_name) {
        //   echo "$method_name";
        //}
    } else {
        echo "<script>console.log(\"class not imported\")</script>";
    }
    //} else {
    //   echo "<script>console.log(\"files not found\")</script>";
    //}
}

from_plugin_bravo();
add_action('plugins_loaded', 'call_plugin_a_using_plugin_b');
//function call_plugin_a_using_plugin_b()
//{
//    from_plugin_bravo();
//}
