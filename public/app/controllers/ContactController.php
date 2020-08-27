<?php

class ContactController extends Controller
{
    public function index()
    {
        $contact = $this->model('Contact');

        $this->view('contact', ['title' => $contact->title]);
    }
}
