<?php
/**
 * Copyright (c) 2020. Victor Barcellos Lopes (Texboy)
 */

namespace Vitalflix\Test\Controller;

use Pecee\Http\Request;

class Controller
{
    /**
     * @var Request
     */
    private $request;

    /**
     * Controller constructor.
     * @param Request $request
     */
    public function __construct(
        Request $request
    ) {
        $this->request = $request;
    }

    /**
     * @return string|null
     */
    public function getData(): ?string
    {
        return "<h1>TOP</h1>";
    }
}