<?php

class About extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view("about/index");
        $this->view('templates/footer');
    }

    public function page()
    {
        echo "about/page";
    }

    public function bio($name = "Ridho Muhammad", $occupation = "Backend Engineer")
    {
        $data["name"] = $name;
        $data["occupation"] = $occupation;
        $data["judul"] = "Bio";
        $this->view('templates/header', $data);
        $this->view("/about/bio", $data);
        $this->view('templates/footer');
    }
}