<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormDeisInput extends Model
{
   protected $table = 'form_deis_inputs';
   protected $primaryKey = 'id_input';
   protected $fillable = [
      'type',
      'id',
      'name',
      'value',
      'max_length',
      'placeholder',
      'required',
      'class',
      'style',
      'readonly',

      'bloque',
      'seccion',
      'class_custom',

      'label',
      'tag',
      'subtag',
      'empty_column',
      'order',
      'order_layout_form',
   ];












}
