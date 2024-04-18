<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

    public function homepage()
    {
        include '../public/assets/views/main/homepage-bootstrap.php';
        // $this->view('../public/assets/views/main/example-homepage.php', true);
    }

    public function bible()
    {
        include '../public/assets/views/main/bible.php';
    }

    public function tanakh()
    {
        include '../public/assets/views/main/tanakh.php';
    }

    public function quran()
    {
        include '../public/assets/views/main/quran.php';
    }

    public function sufism()
    {
        include '../public/assets/views/main/sufism.php';
    }

    public function ruth()
    {
        include '../public/assets/views/main/ruth.php';
    }

    public function ruth1()
    {
        include '../public/assets/views/main/ruth.php';
    }

    public function alsoRuth()
    {
        include '../public/assets/views/main/ruth.php';
    }

    public function ruth2()
    {
        include '../public/assets/views/Ruth/ruth2.php';
    }

    public function ruth3()
    {
        include '../public/assets/views/Ruth/ruth3.php';
    }

    public function ruth4()
    {
        include '../public/assets/views/Ruth/ruth4.php';
    }

    public function about()
    {
        include '../public/assets/views/main/about.php';
    }

    public function update()
    {
        include '../public/assets/views/main/update_comment_form.php';
    }
    public function delete()
    {
        include '../public/assets/views/main/delete_comment_confirmation.php';
    }

    public function notFound()
    {
        include '../public/assets/views/main/notFound.php';
    }

}