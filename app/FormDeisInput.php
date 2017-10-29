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
      'max_lenght',
      'placeholder',
      'required',
      'class',
      'style',

      'bloque',
      'seccion',
      'class_custom',
   ];












}
