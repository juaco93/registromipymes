@extends('layouts.master')
@section('content')

    <h1>Alta de Empresa</h1>
    <hr>
    <form id="createMemberForm" data-ajax="false" method="POST" action="/empresas" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="messages"></div>
            <h2 class="col-sm-8 control-label">Datos generales</h2>
            <div class="form-group">
                <label for="nombreFantasia" class="col-sm-4 control-label">Nombre de Fantasía: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nombreFantasia" name="nombreFantasia" placeholder="Nombre de Fantasía">
                </div>
              </div>
            <div class="form-group">
              <label for="razon_social" class="col-sm-4 control-label">Razon Social: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Razon social">
              </div>
            </div>
            <div class="form-group">
                <label for="responsable" class="col-sm-6 control-label">Nombre y Apellido del Titular: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="responsable" name="responsable" placeholder="Nombre y apellido">
                </div>
              </div>
            <div class="form-group">
              <label for="responsable" class="col-sm-6 control-label">Sexo: </label>
              <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="hombre" value="hombre" checked>
                    <label class="form-check-label" for="hombre">
                      Hombre
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="mujer" value="mujer">
                    <label class="form-check-label" for="mujer">
                      Mujer
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="otro" value="otro">
                    <label class="form-check-label" for="otro">
                      Otro
                    </label>
                  </div>
              </div>
            </div>
            <div class="form-group">
                <label for="telefonoCelular" class="col-sm-4 control-label">Teléfono celular: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="telefonoCelular" name="telefonoCelular" placeholder="Telefono Celular">
                </div>
            </div>
            <div class="form-group">
                <label for="telefonoNegocio" class="col-sm-4 control-label">Teléfono del negocio: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="telefonoNegocio" name="telefonoNegocio" placeholder="Telefono del negocio">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">E-mail: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                </div>
            </div>
            <div class="form-row col-sm-10">
                <div class="form-group col-sm-6">
                  <label for="localComercialDireccion">Dirección del local</label>
                  <input type="text" class="form-control" id="localComercialDireccion">
                </div>
                <div class="form-group col-sm-2">
                  <label for="localComercialCP">CP</label>
                  <input type="text" class="form-control" id="localComercialCP">
                </div>
                <div class="form-group col-sm-4">
                  <label for="localComercialLocalidad">Localidad</label>
                  <input type="text" class="form-control" id="localComercialLocalidad">
                </div>
              </div>
            <div class="form-group">
              <label for="cuit" class="col-sm-4 control-label">Nº de CUIT: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="cuit" name="cuit" placeholder="CUIT" maxlength="11">
              </div>
            </div>
            <div class="form-group">
              <label for="numeroIngresosBrutos" class="col-sm-4 control-label">Nº de Ingresos Brutos: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="numeroIngresosBrutos" name="numeroIngresosBrutos" placeholder="Numero de Ingresos Brutos" maxlength="11">
              </div>
            </div>
            <fieldset class="form-group">
                <label for="inscripcionAfip" class="col-sm-4 control-label">Inscripción en AFIP: </label>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="inscripcionAfip" id="responsableInscripto" value="responsableInscripto" checked>
                      <label class="form-check-label" for="responsableInscripto">
                        Responsable Inscripto en IVA
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="inscripcionAfip" id="monotributo" value="monotributo">
                      <label class="form-check-label" for="monotributo">
                        Monotributista
                      </label>
                    </div>
                    <div class="col-sm-10" id="selectMonotributo" style="display: none">
                        <label class="form-check-label" for="monotributoCategoria">
                            Categoría de Monotributo:
                          </label>
                        <select class="form-control" name="monotributoCategoria" id="monotributoCategoria">
                            <option value="-">-</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                        </select>
                  </div>
              </fieldset>
              <br>
              <hr>



              <h2 class="col-sm-8 control-label">Características de la Actividad</h2>
            <div class="form-group">
              <label for="sector" class="col-sm-4 control-label">Sector:</label>
              <div class="col-sm-10">
                <select class="form-control" name="sector" id="sector">
                  <?php
                  /*
                      require_once '../php_action/db_connect.php';
                        $sql = "SELECT * FROM empresa_sector ORDER BY idempresa_sector ASC";
                      $query = $connect->query($sql);
                      while ($row = $query->fetch_assoc()) {
                          echo "<option value='".$row['idempresa_sector']."'>".$row['descripcion']."</option>";
                      }
                      */
                    ?>
              </select>
              </div>
            </div>
            <div class="form-group">
                <label for="bb" class="col-sm-10 control-label">En caso de elegir Comercial:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="bb" id="bb">
                        <option value="Alimentos">Alimentos</option>
                        <option value="Bebidas">Bebidas</option>
                        <option value="Productos de Limpieza">Productos de Limpieza</option>
                    </select>
                </div>
              </div>
            <div class="form-group">
              <label for="bc" class="col-sm-10 control-label">¿Ésta actividad es la principal fuente de ingreso de su hogar?: </label>
              <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bc" id="bc1" value="bc2" checked>
                    <label class="form-check-label" for="hombre">
                      Sí
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bc" id="bc2" value="bc3">
                    <label class="form-check-label" for="mujer">
                      No
                    </label>
                  </div>
              </div>
            </div>
            <div class="form-group">
                <label for="bd" class="col-sm-10 control-label">¿A quién vende principalmente sus productos?: </label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="bd" id="bd1" value="bd1" checked>
                      <label class="form-check-label" for="bd1">
                        Consumidor Final
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="bd" id="bd2" value="bd2">
                      <label class="form-check-label" for="bd2">
                        Organismos Públicos
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="be" class="col-sm-10 control-label">Principalmente sus clientes le pagan en: </label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="be" id="be1" value="be1" checked>
                      <label class="form-check-label" for="be1">
                        Efectivo
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="be" id="be2" value="be2">
                      <label class="form-check-label" for="be2">
                        Tarjetas
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="bf" class="col-sm-10 control-label">Principalmente sus proveedores son de la Pcia de: </label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="bf" id="bf1" value="bf1" checked>
                      <label class="form-check-label" for="bf1">
                        La Rioja
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="bf" id="bf2" value="bf2">
                      <label class="form-check-label" for="bf2">
                        Buenos Aires
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="bg" class="col-sm-10 control-label">Principalmente le paga a sus proveedores con: </label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="bg" id="bg1" value="bg1" checked>
                      <label class="form-check-label" for="bg1">
                        Efectivo
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="bg" id="bg2" value="bg2">
                      <label class="form-check-label" for="bg2">
                        Tarjeta de Crédito
                      </label>
                    </div>
                </div>
              </div>
              <br>
              <hr>



              <h2 class="col-sm-10 control-label">Ingresos y Gastos de la Actividad</h2>
              <div class="form-group">
                <label for="ca" class="col-sm-10 control-label">¿Cuáles fueron sus ingresos promedio en los últimos 12 meses?: </label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="ca" id="ca1" value="ca1" checked>
                      <label class="form-check-label" for="ca1">
                        Entre $0 y $20.000
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ca" id="ca2" value="ca2">
                      <label class="form-check-label" for="ca2">
                        Entre $20.000 y $50.000
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="cb" class="col-sm-10 control-label">El local o espacio donde realiza su actividad es: </label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="cb" id="cb1" value="cb1" checked>
                      <label class="form-check-label" for="cb1">
                        Propio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="cb" id="cb2" value="cb2">
                      <label class="form-check-label" for="cb2">
                        Alquilado
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="cbb" class="col-sm-10 control-label">En caso de que sea alquilado indique monto promedio de los últimos 12 meses  </label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="cbb" id="cbb1" value="cbb1" checked>
                      <label class="form-check-label" for="cbb1">
                        Entre $0 y $20.0000
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="cbb" id="cbb2" value="cbb2">
                      <label class="form-check-label" for="cbb2">
                        Entre $20.000 y $50.000
                      </label>
                    </div>
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label for="empleadosCantidad" class="col-sm-10 control-label">¿Qué cantidad de empleados tiene en su empresa?: </label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="empleadosCantidad" name="empleadosCantidad">
                </div>
              </div>
              <div class="form-row col-sm-10" id="cd">
                  <label for="cd">¿De esas personas cuantos son hombres y cuántas son mujeres?</label>
                <div class="form-group col-sm-6">
                  <label for="empleadosCantidadHombres">Hombres</label>
                  <input type="number" class="form-control" id="empleadosCantidadHombres" name="empleadosCantidadHombres">
                </div>
                <div class="form-group col-sm-6">
                  <label for="empleadosCantidadMujeres">Mujeres</label>
                  <input type="number" class="form-control" id="empleadosCantidadMujeres" name="empleadosCantidadMujeres">
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label for="ce" class="col-sm-10 control-label">¿Cuál fue su consumo promedio de los últimos 12 meses de KWH de Luz? </label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="ce" id="ce1" value="ce1" checked>
                      <label class="form-check-label" for="ce1">
                        Entre 0 y 100KWh
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ce" id="ce2" value="ce2">
                      <label class="form-check-label" for="ce2">
                        Entre 100 y 300KWh
                      </label>
                    </div>
                </div>
              </div>
              <br>
              <hr>



            <h2 class="col-sm-8 control-label">Financiamiento</h2>
            <div class="form-group">
                <label for="da" class="col-sm-10 control-label">En los últimos 5 años ha solicitado prestamos para fines de su negocio o actividad?</label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="da" id="da1" value="da1" checked>
                      <label class="form-check-label" for="da1">
                        Sí
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="da" id="da2" value="da2">
                      <label class="form-check-label" for="da2">
                        No
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="daa" class="col-sm-10 control-label">En caso que haya solicitado un préstamo elija la Entidad Financiera</label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="daa" id="daa1" value="daa1" checked>
                      <label class="form-check-label" for="daa1">
                        Banco Rioja S.A.U
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="daa" id="daa2" value="daa2">
                      <label class="form-check-label" for="daa2">
                        Banco Nación
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="db" class="col-sm-10 control-label">En caso que no haya solicitado. ¿Cuál es la razón?</label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="db" id="db1" value="db1" checked>
                      <label class="form-check-label" for="db1">
                        No lo necesito
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="db" id="db2" value="db2">
                      <label class="form-check-label" for="db2">
                        Los requisitos son demasiados
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="dc" class="col-sm-10 control-label">¿Está pagando un préstamo actualmente? </label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="dc" id="dc1" value="dc1" checked>
                      <label class="form-check-label" for="dc1">
                        Sí
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="dc" id="dc2" value="dc2">
                      <label class="form-check-label" for="dc2">
                        No
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="dd" class="col-sm-10 control-label">¿A través de qué medios recibe la información de los créditos vigentes para empresas?</label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd1" value="dd1" checked>
                      <label class="form-check-label" for="dd1">
                        Redes Sociales
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd2" value="dd2">
                      <label class="form-check-label" for="dd2">
                        Medios Televisivos
                      </label>
                    </div>
                </div>
              </div>
              <br>
              <hr>



            <h2 class="col-sm-8 control-label">Realidad y Expectativas</h2>
            <div class="form-group">
                <label for="dd" class="col-sm-10 control-label">En general  ¿Qué medidas públicas consideraría que serían de mayor apoyo para las pymes?</label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd1" value="dd1" checked>
                      <label class="form-check-label" for="dd1">
                        Moratoria impositiva en impuestos provinciales
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd2" value="dd2">
                      <label class="form-check-label" for="dd2">
                        Beneficios  en cargas sociales para contratación de puestos  de trabajo
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="dd" class="col-sm-10 control-label">¿Cuál fue el rendimiento de su negocio en los últimos  4 años?</label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd1" value="dd1" checked>
                      <label class="form-check-label" for="dd1">
                        Excelente
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd2" value="dd2">
                      <label class="form-check-label" for="dd2">
                        Muy bueno
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="dd" class="col-sm-10 control-label">¿Cómo impactó a la rentabilidad de su negocio la pandemia provocada por el COVID-19?</label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd1" value="dd1" checked>
                      <label class="form-check-label" for="dd1">
                        Me benefició
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd2" value="dd2">
                      <label class="form-check-label" for="dd2">
                        No me afectó
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="dd" class="col-sm-10 control-label">¿Qué expectativas tiene respecto de su comercio para lo que resta del año 2020?</label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd1" value="dd1" checked>
                      <label class="form-check-label" for="dd1">
                        Excelentes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd2" value="dd2">
                      <label class="form-check-label" for="dd2">
                        Buenas
                      </label>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="dd" class="col-sm-10 control-label">¿Qué expectativa tiene respecto a su comercio para los próximos 4 años?</label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd1" value="dd1" checked>
                      <label class="form-check-label" for="dd1">
                        Excelentes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="dd" id="dd2" value="dd2">
                      <label class="form-check-label" for="dd2">
                        Buenas
                      </label>
                    </div>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button name="btnGuardarCambios" id="btnGuardarCambios" type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
        </form>
@endsection
