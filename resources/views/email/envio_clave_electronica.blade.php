<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Transmision Vertical</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
   <tr>
      <td style="padding: 10px 0 30px 0;">
         <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
            <tr>
               <td align="center" bgcolor="#205bb9" style="padding: 40px 0 30px 0; color: #cfd7ff; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                  <img src="" alt="Transmision Vertical VIH y Sifilis" width="300" height="100" style="display: block;" />
                  <img src="{{url('img/logo.png')}}" alt="" style="box-shadow: 2px 3px 8px 1px #303030;border-radius: 3px;">
               </td>
            </tr>
            <tr>
               <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%">
                     <tr>
                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                           Estimado/a <b>{{$nombre}}</b>:
                        </td>
                     </tr>
                     <tr>
                        <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                           <p>
                           <span>
                              Su llave secreta es: <b style="border:dashed 1px grey;padding: 10px;border-radius: 5px;">
                                 {{$llave}}
                              </b>
                              <br><br>
                           </span>
                              ¿Que es la llave secreta? <br /><br />
                              La <b>Llave Secreta</b> es un código que se genera a partir del ingreso del usuario a la <b>Plataforma de Transmision Vertical VIH y Sifilis</b>, con esta <b>Llave Secreta</b> podrás solicitar crear una nueva clave para el ingreso al sistema.
                           </p>

                           <p>
                              Para crear su clave debe usar esta llave entregada, e ingresarla con los datos solicitados en el formulario de solicitud ubicado en este enlace:
                           </p>

                           <div align="center">
                              <br>
                              <a href="http://tv.minsal.cl/crea_clave" target="_blank">
                                 <div style="
                                    border: dotted 1px lightblue;
                                    padding: 20px;
                                    background-color: #205bb9;
                                    color:white;
                                    width: 92%;
                                    text-decoration: none !important;">
                                    Ir al Enlace
                                 </div>
                              </a>
                           </div>

                        </td>
                     </tr>


                  </table>
               </td>
            </tr>
            <tr>
               <td bgcolor="#ea3021" style="padding: 30px 30px 30px 30px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%">
                     <tr>
                        <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 12px;" width="75%">
                           &reg; Ministerio de Salud, Plataforma de Transmision Vertical para la Prevencion de VIH y Sifilis {{date('Y')}}<br/>
                           <a href="#" style="color: #ffffff;"><font color="#ffffff"></font></a>

                           <br>
                           En caso de dudas o consultas favor comunicarse al correo <a href="mailto:desarrollo@minsal.cl" target="_top">desarrollo@minsal.cl</a>
                        </td>

                     </tr>
                  </table>
               </td>
            </tr>
         </table>
      </td>
   </tr>
</table>


</body>
</html>