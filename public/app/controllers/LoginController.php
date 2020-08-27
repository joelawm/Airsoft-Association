<?php

class LoginController extends Controller
{
    public function index()
    {
        $login = $this->model('Login');

        $this->view('login', ['title' => $login->title]);
    }

    //take post and take action
    public function post()
    {
	    if($_POST)
	    {
		    echo "ok posted";
		    header("Location: /home");
	    }
    }
}
