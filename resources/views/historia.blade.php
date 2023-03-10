@extends('layout')

<title>
    @yield('title', 'Acerca de Frugo | Historia')
</title>

@section('content')
<h1 class="position-absolute bottom-50 end-50 text-uppercase text-white p-2"><strong>Una trayectoria <br> de excelencia</strong></h1>
<img src="{{asset('assets/bg_acercade_sinblur.jpg')}}" alt="" class="" style="min-height: 40vh; max-width: 100%; object-fit: contain;">
<section>
    <div class="container w-75 p-3">
        <div class="row">
            <div class="col">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link m-2 active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true" style="background-color: #3FAE29; color: white;">1974</button>
                        <button class="nav-link m-2" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="background-color: #3FAE29; color: white;">1977</button>
                        <button class="nav-link m-2" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" style="background-color: #3FAE29; color: white;">1980</button>
                        <button class="nav-link m-2" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="background-color: #3FAE29; color: white;">1990</button>
                        <button class="nav-link m-2" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="background-color: #3FAE29; color: white;">1993</button>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">1974 Nace Productos Frugo.
                        Con sus primeras exportaciones de frutas Block Frozen a Jap??n, la empresa emerge como exportadora.</div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">Da inicio la exportaci??n a Estados Unidos y Canad??</div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">Adquisici??n de tecnolog??a IQF junto con una l??nea de productos de vegetales en la que se incluyen br??coli y coliflor.</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">Inversi??n en tecnolog??a con la finalidad de aumentar la capacidad de producci??n.
                        El incremento en la capacidad de la planta signific?? un marcado crecimiento.</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">La empresa obtiene el reconocimiento ALTEX (Empresa Altamente Exportadora).</div>
                </div>
            </div>
        </div>
    </div>
</section>
<img src="{{asset('assets/bg_calidad.jpg')}}" alt="" class="" style="min-height: 40vh; max-width: 100%; object-fit: contain;">
<section>
    <div class="container w-50 py-3">
        <p>
            Somos una empresa 100% mexicana con m??s de 40 a??os de experiencia en la industria alimentaria. Estamos ubicados en la zona centro del Baj??o, regi??n de la Rep??blica Mexicana conocida principalmente por la alta calidad de vegetales que se cultivan, gracias a la riqueza del suelo y a un clima propicio para la agricultura.

        </p>
        <p style="color: #3FAE29;">
            <strong>
                FRUGO ES RECONOCIDO EN MERCADOS NACIONALES E INTERNACIONALES POR SU CALIDAD Y LIDERAZGO EN LA ELABORACI??N DE CONGELADOS.
            </strong>
        </p>
        <p>
            Nuestros productos son exportados a Estados Unidos, Canad??, Europa, Sudam??rica y otras regiones, manteniendo siempre los m??s altos est??ndares de calidad y teniendo en mente, en todo momento, la satisfacci??n de todos nuestros clientes y consumidores.
        </p>
    </div>
</section>
<img src="{{asset('assets/bg_nuestra.jpg')}}" alt="" class="" style="min-height: 40vh; max-width: 100%; object-fit: contain;">
<section>
    <div class="container w-50 py-3">
        <p class="pt-5">
            Nuestro sistema de gesti??n fortalece la protecci??n del medio ambiente y ampl??a la seguridad laboral de los empleados, manteniendo siempre una buena atm??sfera de trabajo.
        <p class="py-5" style="color: #3FAE29;">
            <strong>
                PORQUE PARA FRUGO, EL CUIDADO AMBIENTAL Y EL BIENESTAR DE SUS TRABAJADORES SON PRIORIDAD.
            </strong>
        </p>
        Para m?? es muy satisfactorio formar parte de esta empresa porque aqu?? se reconoce la importancia que tienen la inocuidad y la calidad en la producci??n de alimentos. Desde el campo hasta la entrega del producto ya terminado se controlan todos los aspectos necesarios para cumplir con las especificaciones de nuestros clientes. Los productos Frugo son sin??nimo de alimentos sanos, seguros y sabrosos.
        <p class="pt-3" style="color: #3FAE29;">
            Ing. Miguel S.
        </p>
        <p>
            Gerencia de Gesti??n Integral
        </p>
        </p>
    </div>
</section>
<img src="{{asset('assets/bg_expectativas.jpg')}}" alt="" class="" style="min-height: 40vh; max-width: 100%; background-size:cover; background-attachment: fixed;">
<section>
    <div class="container w-50 py-3">
        <p style="color: #3FAE29;">
            <strong>
                Visi??n
            </strong>
        </p>
        <p>
            Frugo es l??der en alimentos buenos, ricos y saludables, para que la gente coma bien y viva mejor.
        </p>
        <p style="color: #3FAE29;">
            <strong>
                Misi??n
            </strong>
        </p>
        <p>
            Procesar alimentos sanos e inocuos que satisfagan las expectativas de nuestros clientes mediante un proceso de mejora continua y desarrollo de nuestro personal, destac??ndonos por la calidad mundial, competitividad en precios y procesos, confianza total y una relaci??n cercana con nuestros clientes, nuestros empleados y la comunidad.
        </p>
    </div>
    <div class="container w-50 p-5" style="background-color: #DFF0D6;">


        <p style="color: #3FAE29;">
            <strong>
                CALIDAD MUNDIAL
            </strong>
        </p>
        <p>
            La exportaci??n de Frugo es todo un ??xito porque nuestros productos son reconocidos internacionalmente por su excelente calidad, desde los procesos de producci??n hasta el resultado final: alimentos completamente inocuos y sanos. Puesto que nos importa mucho que nuestros clientes est??n contentos, una de nuestras principales preocupaciones es que el producto que les entregamos cubra todas sus necesidades y expectativas.
        </p>

        <p style="color: #3FAE29;">
            <strong>
                CONFIANZA
            </strong>
        </p>
        <p>
            Los consumidores pueden tener una absoluta confianza en nuestros productos. El gran n??mero de certificaciones que hemos obtenido son prueba de que nuestros alimentos han sido producidos, procesados y manipulados de acuerdo a los m??s altos est??ndares de inocuidad alimentaria. <br><br>
            Tambi??n somos una empresa confiable por la honestidad y transparencia de todos nuestros procesos y porque siempre cumplimos con los contratos y fechas de entrega establecidas.
        </p>


        <p style="color: #3FAE29;">
            <strong>
                COMPETITIVIDAD
            </strong>
        </p>
        <p>
            Puesto que siempre estamos buscando tener la mejor calidad posible, nos preocupamos por invertir en tecnolog??a de punta que nos permita obtener los mejores resultados por medio de procesos eficientes que se apegan a las normas internacionales para el manejo de alimentos. Adem??s, nuestra capacidad y prontitud para cumplir y nuestros precios competitivos son uno de los sellos distintivos de la empresa.
        </p>

        <p style="color: #3FAE29;">
            <strong>
                CERCAN??A CON NUESTROS CLIENTES
            </strong>
        </p>
        <p>
            En Frugo nos preocupamos por los consumidores, por eso contamos con una disponibilidad las 24 horas (Sun Harvest) para atenderlos en todo momento. Mantenemos con el cliente una relaci??n estrecha con una actitud humana y una absoluta amabilidad. La innovaci??n de nuestra empresa est?? enfocada en conocer bien a nuestros clientes para saber qu?? es lo que quieren exactamente y as?? lograr que queden siempre satisfechos.
        </p>
    </div>
</section>
@stop