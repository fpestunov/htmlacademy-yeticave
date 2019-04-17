# Личный проект «YetiCave»

YetiCave — это сайт для продажи горнолыжного снаряжения. Зарегистрированные пользователи размещают здесь свои лоты на продажу вещей на условиях аукциона. Покупатель, предложивший максимальную цену в условленные сроки, получает эту вещь.

## 1.3. Работа с условиями

YetiCave позволяет войти на сайт под своим именем. После входа пользователь видит своё имя в шапке сайта. Формы для входа и регистрации мы пока делать не умеем, поэтому данные о пользователе уже находятся внутри сценария. Вам остается лишь вставить их в нужное место.

## 2.4. Итерация по массивам

На площадке YetiCave пользователи публикуют объявления о продаже самых разных видов горнолыжного снаряжения: крепления, одежда, доски и многое другое. Чтобы облегчить покупателю поиск нужной ему вещи, каждое объявление назначается одной из существующих категорий.

Вам следует вывести в HTML коде список из существующих категорий, а также показать сами обьявления.

## 2.5. Пишем первую функцию

Все товары на сайте YetiCave продаются по принципу аукциона. Владелец вещи указывает только минимальную цену, а затем заинтересованные покупатели делают свои ставки. Автор самой последней ставки на момент окончания аукциона становится победителем и получает право купить товар из лота по этой цене.

В нижней части карточки объявления указана начальная цена лота, заданная его автором. Для удобства пользователя эта цена выводится в формате с делением на разряды и добавлением знака рубля.

Карточка объявления на сайте показывается в двух местах: список обьявлений (на главной странице) и на странице просмотра обьявления.

Ваша задача

Напишите функцию для форматирования суммы и добавления к ней знака рубля. Затем используйте эту функцию для показа цены в карточке объявлений на главной странице.

## 3.7. Шаблонизация проекта

*Предыстория*
Шаблонизация — это преобразование HTML-верстки страниц в специально подготовленные шаблоны.
Шаблон — это PHP сценарий, которые содержит только HTML-код с включениями PHP-переменных и простыми условными конструкциями.

Шаблоны нужны для двух целей:
- избавиться от дублирования HTML-кода на разных страницах;
- отделить бизнес-логику веб-сайта от его представления.

Большинство веб-сайтов состоят из блоков, которые повторяются на каждой странице: шапка, подвал, боковое меню и т. д. Чтобы не дублировать HTML-код этих блоков на каждой странице, имеет смысл выделить каждый такой блок в отдельный файл-шаблон. Так мы сможем редактировать содержимое шаблона в одном месте, а его обновленный контент будет показан на всех страницах, которые его включают.

Бизнес-логикой в программировании называют программный код, который отвечает за обработку данных, но не за их представление. Работа с данными массивов, подсчет дат, обработка форм — это примеры бизнес-логики сайта. Включение PHP-переменных в HTML-коде, форматирование строк — это примеры представления.

Шаблоны помогают отделить бизнес-логику от представления, что упрощает поддержку кода, делает его более легким для чтения. Теперь работа с данными происходит в одном месте, а их показ - в другом. В этом задании вы перенесете HTML-код страниц в PHP-шаблоны.

*Из чего состоит задание*
1. Создать лейаут.
2. Создать шаблон для главной страницы.
3. Убрать из index.php весь HTML код, заменив его вызовами шаблонизатора и показом результата.

## 3.8. Работа с датами

Все лоты, публикуемые на сайте YetiCave «живут» на сайте ограниченное время. После истечения этого времени лот скрывается с сайта. Количество часов и минут, оставшихся до истечения, указаны в карточке лота под ценой.
Дополнительно надо отдельно выделять красным цветом время до истечения лота, если оно составляет меньше часа.

Постановка задачи
Пока, для простоты, будем считать, что каждый лот живет только до полуночи.
Необходимо написать код, который покажет сколько часов и минут осталось до новых суток.

Задача
- Узнайте количество секунд до наступления новых суток. Для этого необходимо получить timestamp для полуночи следующего дня и отнять от него текущий timestamp
- Полученный timestamp преобразовать к формату времени вида “ЧЧ:ММ”
- Показать это время в блоке под ценой лота div.lot__timer
- Если оставшееся время меньше или равно одному часу, то этому блоку также надо добавить класс timer--finishing
- Обновить страницу и убедиться, что под лотами теперь указано корректное время до начала суток

<a href="https://htmlacademy.ru/intensive/php"><img align="left" width="50" height="50" alt="HTML Academy" src="https://up.htmlacademy.ru/static/img/intensive/php/logo-for-github-2.png"></a>

Репозиторий создан для обучения на профессиональном онлайн‑курсе «[PHP, уровень 1](https://htmlacademy.ru/intensive/php)» от [HTML Academy](https://htmlacademy.ru).
