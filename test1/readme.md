_Задача №1_

Имеется база со следующими таблицами:
CREATE TABLE `users` (
    `id`         INT(11) NOT NULL AUTO_INCREMENT,
    `name`       VARCHAR(255) DEFAULT NULL,
    `gender`     INT(11) NOT NULL COMMENT '0 - не указан, 1 - мужчина, 2 - женщина.',
    `birth_date` INT(11) NOT NULL COMMENT 'Дата в unixtime.',
    PRIMARY KEY (`id`)
);
CREATE TABLE `phone_numbers` (
    `id`      INT(11) NOT NULL AUTO_INCREMENT,
    `user_id` INT(11) NOT NULL,
    `phone`   VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
);
Напишите запрос, возвращающий имя и число указанных телефонных номеров девушек в возрасте от 18 до 22 лет.
Оптимизируйте таблицы и запрос при необходимости.
