<?php

class DonateController extends Controller
{
    public function index()
    {
        $donate= $this->model('Donate');

        $this->view('donate', ['title' => $donate->title]);
    }
}
