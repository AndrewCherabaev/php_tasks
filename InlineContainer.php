<?php

class InlineContainer {
    protected $container;

    public function __construct($container = [])
    {
        $this->container = $container;
    }

    /**
     * TODO: доработать функцию new так, чтобы можно было вызвать
     * InlineContainer::new([])
     * и получить результат, аналогичный вызову 
     * new InlineContainer([])
     */
    function new()
    {

    }
}