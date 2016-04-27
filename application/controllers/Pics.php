<?php
/**
 * Created by PhpStorm.
 * User: jameriah
 * Date: 4/12/16
 * Time: 3:53 PM
 * Pages.php
 */


class Pics extends CI_Controller {

    /**
     * Pics constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pics_model');

    }

    public function view($tags = 'Pikas')
    {

        $data['flicker_pics'] = $this->pics_model->search_pics($tags);
        $data['title'] = 'Searching for ' . $tags; // Capitalize the first letter
        $data['page_id'] = "Flicker Search!";
        $this->load->view('themes/bootswatch/header', $data);
        $this->load->view('flicker/view', $data);
        $this->load->view('themes/bootswatch/footer', $data);
    }


}