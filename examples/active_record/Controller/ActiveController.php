<?php

/**
 * User: mult1mate
 * Date: 20.12.15
 * Time: 20:56
 */
class ActiveController extends BaseController
{

    public function index()
    {

    }

    public function simpleTask()
    {
        sleep(3);
        echo 'This is a simple task';
    }

}