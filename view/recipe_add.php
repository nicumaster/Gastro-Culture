<?php

$form = new Form('recipe');

echo $form->text()->label('name')->name('recipe');
echo $form->text()->label('country')->name('culture');
echo $form->text()->label('history')->name('history');
echo $form->text()->label('description')->name('description');
echo $form->submit()->label('Weiter zu Zutaten')->name('send');

$form->end();
