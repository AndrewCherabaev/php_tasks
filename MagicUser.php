<?php

/**
 * @property $firstName|$first_name
 * @property $lastName|$last_name
 * @property $age
 * @property $proficiency
 * @property $salary
 */
class MagicUser {

    /**
     * @var array $attributes
     */
    protected $attributes = [
        'firstName' => '',
        'lastName' => '',
        'age' => null,
        'proficiency' => null,
        'salary' => null,
    ];

    /**
     * @param string $firstName = ''
     * @param string $lastName = ''
     * @param integer $age = null
     * @param string $proficiency = null
     * @param integer $salary = null
     */
    public function __construct()
    {
        // Заполнить массив $this->attributes по принципу ['firstName' => $firstName]
    }

    /**
     * @param string $attributeName
     */
    public function __get()
    {
        /**
         * Вернуть:
         *      значение $this->attributes[$attributeName], если есть
         *      результат выполнения метода get{AttributeName}Attribute, если есть
         *      null
         * 
         * Важно:
         *      имя аттрибута может быть записано как в camel-case ($attributeName), так и в snake-case ($attribute_name)
         *      результат в обоих случаях должен быть одинаков
         */
    }

    /**
     * @param string $attributeName
     * @param $value = null
     */
    public function __set()
    {

        /**
         * Выполнить:
         *      запись значение $this->attributes[$attributeName], если есть
         *      передать $value в метод set{AttributeName}Attribute, если есть
         * 
         * Важно:
         *      имя аттрибута может быть записано как в camel-case ($attributeName), так и в snake-case ($attribute_name)
         *      результат в обоих случаях должен быть одинаков
         */
    }

    /**
     * Паттерн "Мутатор" https://en.wikipedia.org/wiki/Mutator_method
     * @param string $value
     */
    public function setFullNameAttribute()
    {
        /**
         * Разбить $value по пробелу, первую часть записать в $firstName, вторую в $lastName
         */
    }

    /**
     * @return string
     */
    public function getFullNameAttribute()
    { 
        /**
         * Вернуть $firstName и $lastName, склееные пробелом
         */
    }

    /**
     * @param array $attributes = []
     */
    public function fill()
    {
        // Заполнить массив $this->attributes, должен учитывать мутаторы, сеттеры и camel-case/snake-case
    }

    /**
     * @return MagicUser
     */
    public static function new()
    {
        //реализовать создание MagicUser::new()
    }
}
