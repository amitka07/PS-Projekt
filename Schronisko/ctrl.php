<?php
require_once 'init.php';
// Rozszerzenia:
// Dodanie klasy Router oraz Route, które realizują idee przedstawione poprzednio, ale na wyższym poziomie i obiektowo.
// Po pierwsze rezygnujemy ze struktury 'switch' w kontrolerze głównym i zastępujemy ją tablicą ścieżek przechowywaną
// wewnątrz obiektu routera. Router powstaje w skrypcie init.php i jak inne ważne obekty jest dostępny przez getRouter().

// Odpowiednio nazwane metody routera realizują wszystkie zadania iplementowane uprzednio w funkcji control oraz strukturze 'switch'.

// Oczywiście tym samym znika funkcja 'control' - jest ona prywatną metodą routera.
getRouter()->setDefaultRoute('PersonShowAll'); //domyślne user ma widziec tylko userow a admin wszystko 
getRouter()->setDefaultRoute('DogShowAll'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('register',    'RegisterCtrl');
getRouter()->addRoute('logout',      'LoginCtrl');

// Nazwy do zmiany "behavior"
getRouter()->addRoute('BehaviorShowAll', 'BehaviorListCtrl',  ['moderator','admin']);

getRouter()->addRoute('BehaviorNew',     'BehaviorEditCtrl',  ['moderator','admin']);
getRouter()->addRoute('BehaviorEdit',    'BehaviorEditCtrl',  ['moderator','admin']);
getRouter()->addRoute('BehaviorSave',    'BehaviorEditCtrl',  ['moderator','admin']);

// Nazwy do zmiany "dog"
getRouter()->addRoute('DogShowAll', 'DogListCtrl',  ['user','admin','moderator']);
getRouter()->addRoute('DogShowLike','DogListCtrl',  ['user','admin','moderator']);
getRouter()->addRoute('NazwaAkcji','KontrolerProcedureCtrl',['user','admin','moderator']);
getRouter()->addRoute('showTpl','KontrolerProcedureCtrl',['user','admin','moderator']);

getRouter()->addRoute('ApproveList',    'ReseredCtrl',  ['moderator','admin']);
getRouter()->addRoute('ApproveDog',    'ReseredCtrl',  ['moderator','admin']);
getRouter()->addRoute('DogRent',    'ReseredCtrl',  ['user','moderator','admin']);
getRouter()->addRoute('DogNew',     'DogEditCtrl',  ['moderator','admin']);

getRouter()->addRoute('DogEdit',    'DogEditCtrl',  ['moderator','admin']);
getRouter()->addRoute('DogSave',    'DogEditCtrl',  ['moderator','admin']);
getRouter()->addRoute('DeletePies',  'DogListCtrl',  ['moderator','admin']);

// Nazwy do zmiany "person"
getRouter()->addRoute('personShowAll',  'PersonListCtrl',	['moderator','admin']);
getRouter()->addRoute('personShowLike',  'PersonListCtrl',	['admin']);
getRouter()->addRoute('normalUsers',  'PersonListCtrl',	['user']);

getRouter()->addRoute('personEdit',		'PersonEditCtrl',	['user','moderator','admin']);
getRouter()->addRoute('personSave',		'PersonEditCtrl',	['user','moderator','admin']);
getRouter()->addRoute('personDelete',	'PersonEditCtrl',	['admin']);
getRouter()->addRoute('showMeSmietnik', 'TestCtrl'); 
getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';
