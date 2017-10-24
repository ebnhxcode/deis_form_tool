<dl class="dl-vertical">


   <div class="col-xs-6 col-sm-6 col-md-6" v-for="i in inputs">
      {{--<div v-if="inputsQuantity(i.directivas.type)"></div>--}}
         <!-- Etiquetas de los campos -->
      <dt>
         @{{ labels[i.directivas.id] ? labels[i.directivas.id].text:'Sin Etiqueta' }}
      </dt>

      <!-- Input basicos como text,number,time,date,etc -->
      <dd v-if="inputInArray(i,inputTypes.basics)">
         <inputs :name="i.directivas.name"
                 :id="i.directivas.id"
                 :type="i.directivas.type"></inputs>
      </dd>

      <!-- Select Inputs -->
      <dd v-else-if="inputInArray(i,inputTypes.select)">
         <select :name="i.directivas.name"
                 :id="i.directivas.id"
                 class="form-control">

            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
         </select><!-- .form-control -->
      </dd>

      <!-- Textarea Inputs -->
      <dd v-else-if="inputInArray(i,inputTypes.textarea)">

         <textarea :name="i.directivas.name"
                   :id="i.directivas.id"
                   class="form-control">
         </textarea>

      </dd>

      <dd v-else>
         Sin Campos
      </dd>
      <br>
   </div><!-- .col-md-* -->

</dl><!-- .dl-vertical -->