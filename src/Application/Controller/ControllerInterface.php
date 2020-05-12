<?php


namespace Application\Controller;

interface ControllerInterface
{
    public function execute(array $get) : array;
}