<?php

/**
 * TODO: дописать реализацию
 * ВАЖНО: Дописать объявление функций в соответсвии с DOC-блоками
 * см: https://ru.wikipedia.org/wiki/PHPDoc
 *     https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md
 */
class ArrayContainer implements \IteratorAggregate, \Countable {

    /** @var array $items */
    protected $items;

    /**
     * TODO: описать конструктор который сохраняет $items в $this->items
     * 
     * @param array $items
     * 
     * @return ArrayContainer
     */
    public function __construct()
    {
    }

    /**
     * TODO: реализовать создание контейнера через ArrayContainer::new()
     * 
     * @param array $items
     * 
     * @return ArrayContainer
     */
    function new()
    {
    }


    /**
     * TODO: вернуть все элементы
     * 
     * @return array|null
     */
    public function all()
    {
    }

    /**
     * TODO: вернуть только ключи массива $items
     * 
     * @return array
     */
    public function keys()
    {
    }

    /**
     * TODO: вернуть только значения массива $items
     * 
     * @return array
     */
    public function values()
    {
    }

    /**
     * ВАЖНО: в функциях has(), get() и set() параметр $keystring является строкой и может быть описан в виде цепочки ключей
     * Т.е. по пути $keystring = 'first_key.second_key.third_key'
     * обращение происходит к элементу:
     * $this->items['first_key']['second_key']]'third_key']
     */

    /**
     * TODO: вернуть TRUE если ключ существует, иначе FALSE
     * 
     * @param string $keystring
     * 
     * @return bool
     */
    public function has($keystring)
    {
    }


    /**
     * TODO: вернуть значение если ключ существует, иначе $default
     * 
     * @param string $keystring
     * @param $default = null
     * 
     * @return mixed|null
     */
    public function get()
    {
    }

    /**
     * TODO: добавить в $tems значение $value по пути $keystring
     * 
     * @param string $keystring
     * @param $value = null
     * 
     * @return ArrayContainer
     */
    public function set()
    {
    }

    /**
     * TODO: Добавить несколько значений из массива вида
     * [
     *      $keystring => $value,
     *      ...
     * ]
     * 
     * @param array $items = []
     * 
     * @return ArrayContainer
     */
    public function insert()
    {
    }


    /**
     * TODO: реализовать по документации IteratorAggregate
     * 
     * @return ArrayIterator
     */
    public function getIterator()
    {
    }
    
    /**
     * TODO: реализовать по документации Countable
     * 
     * @return integer
     */
    public function count()
    {
    }
}