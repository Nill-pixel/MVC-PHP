<?php

class HomeController extends RenderViews
{
    public function index()
    {
        $users = new UserModel();

        $this->loadView('home', [
            'title' => 'Home Page',
            'users' => $users->fetch()
        ]);
    }
}