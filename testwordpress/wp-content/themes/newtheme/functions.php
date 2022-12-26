<?php

get_template_part('functions/custom', 'function');
// подключаем пользовательские функции
get_template_part('functions/add', 'filters');
get_template_part ('functions/nav', 'menu');// файл с добавлением фильтров
get_template_part ('functions/scripts', 'functions');// файл с добавлением подключения стилей и скриптов
get_template_part ('functions/theme', 'supports');// подключение поддерживаемых тема модулей
